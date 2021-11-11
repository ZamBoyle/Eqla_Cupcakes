@if ($cupcake != null)
    @php
        $btnClassAttributes = $cupcake->stock > 0 ? 'class=\'btn btn-primary\' aria-label=\'Ajouter au panier\'' : 'class="btn btn-warning disabled" aria-label="Impossible d\'ajouter au panier:Plus en stock"';
        $btnText = $cupcake->stock > 0 ? 'Ajouter' : 'Indisponible';
        $disabled = $cupcake->stock <= 0 ? 'disabled' : '';
    @endphp

    <div class='d-inline-block my-1 p-2 bg-light border rounded'>
        <h2><a href='{{ url("products/$cupcake->id") }}' class="text-dark">{{ $cupcake->name }}</a></h2>
            <img class='img-fluid img-thumbnail product float-left mr-2' src='{{ asset("Images/$cupcake->imageName"); }}'
                aria-label='Une image de Cupcake: {{ $cupcake->name }}'>
            <p>{{ $cupcake->description }}</p>
        <p><span class='font-weight-bold'>Prix: </span>{{ $cupcake->price }} </p>
        <p><span class='font-weight-bold'>Stock: </span> {{ $cupcake->stock }} </p>
        <button {!! $btnClassAttributes !!} {!! $disabled !!}><i class='bi bi-cart'></i> {{ $btnText }} </button>
    </div>
@endif
