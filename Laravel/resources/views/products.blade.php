<x-layout>
    <x-slot name="title">Page des produits</x-slot>

    <div class="container my-1 rounded text-justify    ">
    <h1 class="text-center">Produits - Cupcakes</h1>
    <p>Voici une liste de nos produits dont la composition a été étudiée durant de 20 ans. Avec Amour et savoir faire, voici nos Crazy Cupcakes qui, nous l'espérons, vous régalerons et vous rendrons complétement Crazy d'eux.🤪🤤😊</p>
    @foreach ($products as $product)
        {{ $product->DisplayProduct(); }}
    @endforeach
</div>
</x-layout>