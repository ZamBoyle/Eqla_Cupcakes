<x-layout>
    <x-slot name="title">Initialisation de la base de données</x-slot>

    <div class="container">
        <h1 class="text-center">Initialisation de la base de données</h1>

        {{-- Si aucune tâche n´a été faite et qu´aucune tâche n´a echouée alors tout a déjà été fait  --}}
        @if (count($tasksDone) == 0  && count($tasksFailed) == 0)
            <p>Il n'y a rien à faire, tout est déjà initialisé.</p>
        @endif

        {{-- Si aucune tâche n´a échouée et que des tâches ont été faîtes --}}
        @if (count($tasksFailed) == 0)
            <p>Aucun problème n'a été rencontré.</p>
            {{-- Si des tâches ont été effectuées --}}
            @if (count($tasksDone)> 0)
                Les tâches suivantes ont été exécutées:
                <ul>
                    @foreach ($tasksDone as $taskDone)
                    <li>{{ "$taskDone: ".$tasks[$taskDone] }} </li>
                    @endforeach
                </ul>
            @endif
        @else
            {{-- Si des tâches ont échoué --}}
            @if(count($tasksFailed) >0 )
                Une erreur ou plusieurs tâches ont rencontré un problème:
                <ul>
                    @foreach ($tasksFailed as $taskFailed)
                    <li>{{ $tasks[$taskFailed] }} </li>
                    @endforeach
                </ul>
            @endif
        @endif

        {{-- Si une migration a été faite ou a échouée --}}
        @if(in_array('migration', $tasksDone) || in_array('migration', $tasksFailed))
            Résultat de la commande php artisan migrate:fresh</p>
            <pre>
                {{ $artisanOutput }}
            </pre>
        @endif
        
        {{-- Si des tâches ont été précédemment faîtes --}}
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