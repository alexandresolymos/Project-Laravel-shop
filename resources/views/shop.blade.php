@extends('layouts.master')

@section('content')
    <div class="block">
        <h1>Categorie liste</h1>
        @foreach($categories as $category)
            <li><a href="{{ route('category.show', $category->slug ) }}">{{ $category->title }} -
                    {{ $count }}</a></li>
        @endforeach
    </div>

    @foreach($product as $products)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $products->title }}</h5>
                <p class="card-text">{{ $products->subtitle }}</p>
                <p class="card-text">{{ $products->price }}€</p>
                <a href="{{ route('shop.show', $products->slug  ) }}" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    @endforeach
@stop
