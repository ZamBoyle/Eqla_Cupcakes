<?php

namespace App\Http\Controllers;

use App\Models\Cupcake;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    public function initialize()
    {
        $filename = base_path() . "\database\database.sqlite";
        $tasks = ['database' => 'Création du fichier database\database.sqlite', 'migration' => 'php artisan migrate:fresh'];
        $tasksFailed = [];
        $tasksDone = [];
        $tasksDoneBefore =  [];
        $artisanOutput = "";

        if (!file_exists($filename)) {
            $touchResult = touch($filename);
            if (!$touchResult) {
                array_push($tasksFailed, 'database');
            } else {
                array_push($tasksDone, 'database');
            }
            $artisanOutput = $this->artisanCall($tasksDone, $tasksFailed);
        } else {
            if (!Schema::hasTable('cupcakes') || !Schema::hasTable('categories')) {
                $artisanOutput = $this->artisanCall($tasksDone, $tasksFailed);
            }
        $tasksDoneBefore = array_diff(array_keys($tasks), $tasksDone, $tasksFailed);
        }
        return view('admin.initialize', ['tasks' => $tasks, 'tasksDone' => $tasksDone,  'tasksFailed' => $tasksFailed, 'tasksDoneBefore'=> $tasksDoneBefore, 'files' => File::allFiles(base_path() . "\database\migrations"), 'artisanOutput' => $artisanOutput]);
    }

    /**
     *
     * Description for function
     *
     * @param    array  $tasksDone Description
     * @param    array  $tasksFailed Description
     *
     * @return      string
     *
     */
    public function artisanCall(array &$tasksDone, array &$tasksFailed)
    {
        $migrateResult = Artisan::call('migrate:fresh');
        if ($migrateResult != 0) {
            array_push($tasksFailed, 'migration');
        } else {
            array_push($tasksDone, 'migration');
        }
        $artisanOutput = Str::of(Artisan::output())->ltrim();
        return $artisanOutput;
    }
}
