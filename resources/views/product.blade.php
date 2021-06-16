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
                    <h2 style="text-align: center;
                      font-weight: 300;
                      font-size: 20px;
                      padding-bottom: 1em">{{ $product->subtitle }}</h2>
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

    <div class="container pb">
        <div class="row fp">
            <div class="col-4 fp">
                <div class="description-product">
                    <span>Categorie : {{$category->title}}</span>
                </div>
            </div>
            <div class="col-4 fp">
                <div class="info-product">
                    <span>Prix : </span><p>{{ $product->price }} €</p>
                </div>
            </div>
            <div class="col-4 fp">
                <div class="add-cart-product">
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

    <div class="container" id="plus-product">
        <div class="row">
            <div class="col-6">
                <div class="other-img">

                </div>
            </div>
            <div class="col-6">
                <div class="description-product">
                    <p>{{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>

@stop


