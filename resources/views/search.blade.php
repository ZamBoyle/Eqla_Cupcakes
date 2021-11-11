@php
    use Illuminate\Http\Request;
@endphp
<x-layout>
    <x-slot name="title">Recherches</x-slot>
    {{ Request::old("what")}}
    <div class="container my-1 rounded text-justify">
        <h1 class="text-center">Recherche de Produits</h1>
        @forelse ($result as $cupcake)
            @include('products.cupcake')
        @empty
            Votre recherche n'a donné aucun résultat...
        @endforelse
    </div>
</x-layout>