@extends('layout')

@section('content')
<div class="py-3 container">
    Home / {{ $product->category->name }} / {{ $product->name }}
</div>

<div class="container pb-5">
    <div class="row py-5" style="height: 500px;">
        <div class="col-md-6 h-100">
            <img src="https://www.vignashop.com/34827-tm_large_default/camicia-uomo-image.jpg" alt="" style="height: 100%; width: 100%; object-fit: cover; object-position: top">
        </div>

        <div class="col-md-6 text-warning">
            <h1 class="h3">{{ $product->name }}</h1>            
            <p class="h2">{{ $product->price }} €</p>

            <div class="d-flex">
                <input type="number" class="form-control mr-2" style="width:60px" value="1">
                <button class="btn btn-outline-warning">Aggiungi al carrello</button>
            </div>
        </div>        
    </div>

    <div class="container">
        <h3 class="text-warning">Descrizione</h3>
        <p>{{ $product->description }}</p>
    </div>
</div>
@endsection