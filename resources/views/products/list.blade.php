<x-layout>
    <x-slot name='title'>Liste des produits</x-slot>
    <div class='container my-1 rounded text-justify'>
        <h1 class='text-center'>Produits - Cupcakes</h1>
        <p>Voici une liste de nos produits dont la composition a été étudiée durant de 20 ans. Avec Amour et savoir
            faire, voici nos Crazy Cupcakes qui, nous l'espérons, vous régalerons et vous rendrons complétement Crazy
            d'eux.🤪🤤😊</p>
        @forelse ($cupcakes as $cupcake)
            @include('products.cupcake')
        @empty
            Pour le moment, il n'y a aucun cupcakes...
        @endforelse
    </div>
</x-layout>
