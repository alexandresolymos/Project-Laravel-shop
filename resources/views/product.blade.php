@extends('layouts.master')

@section('meta_title'){{ $product->meta_title }}@stop
@section('meta_description'){{ $product->meta_description }}@stop

<style>
    .product-first-block {
        background-image: url("{{ asset('/img/'. $product->image) }}");
    }
</style>

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="h1-block">
                    <h1>{{ $product->title }}</h1>
                    <h2 style="text-align: center;font-weight: 300;font-size: 16px">{{ $product->subtitle }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-all">
        <div class="row">


            <div class="col-12">
                <div class="product-first-block">
                </div>
            </div>

        </div>
    </div>


   <div class="container-bis">
        <div class="row">


                <div class="col-6-t">
                    <div class="block-left-image">
                        <img width="100%" src="{{ asset('/img/'. $product->image) }}" alt="{{ $product->balise_alt }}">
                    </div>
                </div>

            <div class="col-6-t">
                <div class="block-right-other">
                    <h1 class="br-title">{{ $product->title }}</h1>
                    <p class="lead">  <p>{{ $product->subtitle }}</p>
                    <hr class="my-4">

                    <p>Description : {{ $product->description }}</p>
                    <p>Categorie : {{$category->title}}</p>
                    <p>Prix : {{ $product->price }}</p>

                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="title" value="{{ $product->title }}">
                        <input type="hidden" name="subtitle" value="{{ $product->subtitle }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <button type="submit" id="addcart">Ajouter au panier</button>
                    </form>
                </div>
            </div>

        </div>
   </div>

@stop


