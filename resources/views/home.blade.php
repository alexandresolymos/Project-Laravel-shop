@extends('layouts.master')


@section('content')
<h1>Page accueil</h1>

    @foreach($products as $product)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $product->title }}</h5>
                <p class="card-text">{{ $product->subtitle }}</p>
                <p class="card-text">{{ $product->price }}€</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        @endforeach
@stop
