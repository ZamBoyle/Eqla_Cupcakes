<x-layout>
    <x-slot name="title">
        Page d'accueil
    </x-slot>

    <div class="container">
        <div class="jumbotron bg-dark text-white text-justify mt-2">
            <h2>Crazy Cupcakes</h2>
            <p>Fiers de notre savoir faire, venez découvrir nos <span class="font-italic">Crazy Cupcakes</span> faits
                avec Amour et Passion depuis déjà 20 ans.
                C'est une histoire familiale que vous pourrez <a href="{{ url('about') }}">découvrir</a>.
            </p>
            <div id="monCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
                <div class="carousel-inner text-center">
                    @foreach ($cupcakes as $cupcake)
                        <div class="carousel-item {{ $loop->first ? 'active' :''}}">
                        <img class="img-fluid img-thumbnail product" src="{{ asset('Images/' . $cupcake->imageName) }}"
                            aria-label="{{ $cupcake->name }}" />
                </div>
                @endforeach
            </div>
            <!-- Contrôles Précédent et Suivant -->
            <a class="carousel-control-prev" href="#monCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
            </a>
            <a class="carousel-control-next" href="#monCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>

    </div>
    </div>

    <div class='position-absolute mr-1' style='bottom:0; right:0;'>
        <hr class='mb-0' />
        (c) 2021 <img class='d-inline-block mb-1' height='15' src=" {{ asset('Images/logo.png') }}"
            aria-label='Logo compagnie' /> <span class='font-italic'>Crazy Cupcakes</span>
    </div>
</x-layout>
