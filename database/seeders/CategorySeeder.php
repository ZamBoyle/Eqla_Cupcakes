<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
        public function run()
        {
                if (DB::table('categories')->count() == 0) {
                        DB::table('categories')->insert([
                                ['name' => 'croquant'],
                                ['name' => 'moelleux'],
                                ['name' => 'glacé']
                        ]);
                }
        }
}
