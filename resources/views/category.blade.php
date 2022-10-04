@extends('layout')

@section('content')
<div class="py-3 container">
    <a href="{{ route('home') }}" class="text-warning">Home</a> / {{ $category->name }}
</div>

<div class="container py-5">
    <div class="row">
        @foreach($category->products as $product)
        <div class="col-md-4 p-2 py-3 text-center">
            <a href="{{ route('products.show', ['product' => $product->id]) }}">
                <img src="https://www.vignashop.com/34827-tm_large_default/camicia-uomo-image.jpg" alt="" style="width: 100%; display:block;">
                <h3 class="text-center h5" style="color: black">{{ $product->name }}</h3>
            </a>
            <div class="mb-2 font-weight-bold">{{ $product->price }} €</div>
            <button class="btn btn-outline-warning">Aggiungi al carrello</button>
        </div>
        @endforeach
    </div>
</div>
@endsection