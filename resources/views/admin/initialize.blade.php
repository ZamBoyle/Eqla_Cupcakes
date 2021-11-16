<x-layout>
    <x-slot name="title">Initialisation de la base de données</x-slot>

    <div class="container">
        <h1 class="text-center">Initialisation de la base de données</h1>
        @if (count($tasksDone) == 0  && count($tasksFailed) == 0)
            <p>Il n'y a rien à faire, tout est déjà initialisé.</p>
        @endif

        @if (count($tasksFailed) == 0 && count($tasksDone)>0)
            <p>Aucun problème n'a été rencontré.</p>
            @if (count($tasksDone)> 0)
                Les tâches suivantes ont été exécutées:
                <ul>
                    @foreach ($tasksDone as $taskDone)
                    <li>{{ "$taskDone: ".$tasks[$taskDone] }} </li>
                    @endforeach
                </ul>
            @endif
        @else
            @if(count($tasksFailed) >0 )
                Une erreur ou plusieurs tâches ont rencontré un problème:
                <ul>
                    @foreach ($tasksFailed as $taskFailed)
                    <li>{{ $tasks[$taskFailed] }} </li>
                    @endforeach
                </ul>
            @endif
        @endif

        @if(in_array('migration', $tasksDone) || in_array('migration', $tasksFailed))
            Résultat de la commande php artisan migrate:fresh</p>
            <pre>
                {{ $artisanOutput }}
            </pre>
        @endif
        
        @if (count($tasksDoneBefore)>0)
        Tâches précédemment faites:<br>
            @foreach ($tasksDoneBefore as $task)
                <ul>
                    <li>{{ "$task: ".$tasks[$task] }}</li>
                </ul>
            @endforeach
        @endif
    </div>
</x-layout>