<x-layout>
    <x-slot name="title">
        Page d'accueil
    </x-slot>

    <div class="container">
        <div class="jumbotron bg-dark text-white text-justify mt-2">
            <h2>Crazy Cupcakes</h2>
            <p>Fiers de notre savoir faire, venez découvrir nos <span class="font-italic">Crazy Cupcakes</span> faits avec Amour et Passion depuis déjà 20 ans.
                C'est une histoire familiale que vous pourrez <a href="about.php">découvrir</a>.
            </p>
        </div>
    </div>

    <div class='position-absolute mr-1' style='bottom:0; right:0;'>
        <hr class='mb-0' />
        (c) 2021 <img class='d-inline-block mb-1' height='15' src=" {{ asset('Images/logo.png') }}" aria-label='Logo compagnie' /> <span class='font-italic'>Crazy Cupcakes</span>
    </div>
</x-layout>