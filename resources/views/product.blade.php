@extends('layouts.master')

@section('meta_title'){{ $product->meta_title }}@stop
@section('meta_description'){{ $product->meta_description }}@stop

<style>
    .product-first-block {
        background-image: url("{{ asset('/img/'. $product->image) }}");
    }
</style>

@section('content')

    <div class="container mgt-5">
        <div class="row">
            <div class="col-12">
                <div class="h1-block">
                    <h1>{{ $product->title }}</h1>
                    <h2 style="text-align: center;
                      font-weight: 300;
                      font-size: 18px;
                      padding-bottom: 1em">{{ $product->subtitle }}</h2>
                    <div class="svg-2">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                             width="400" height="400" viewBox="0 0 420.000000 594.000000"
                             preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0.000000,594.000000) scale(0.100000,-0.100000)"
                               fill="#ddd" stroke="none">
                                <path d="M746 4469 c-53 -13 -102 -51 -127 -100 -20 -40 -20 -50 -19 -1399 0
-919 4 -1369 11 -1387 15 -40 58 -83 104 -104 38 -18 97 -19 1385 -19 l1345 0
51 24 c53 25 83 58 102 115 9 25 12 388 12 1375 0 1275 -1 1343 -19 1381 -26
57 -79 101 -141 114 -64 14 -2645 14 -2704 0z m2697 -90 c26 -7 44 -21 58 -42
19 -31 19 -59 17 -1379 l-3 -1348 -28 -27 -27 -28 -1343 -3 c-995 -2 -1349 1
-1370 9 -61 25 -57 -72 -57 1409 l0 1356 28 26 c15 15 38 28 52 31 57 10 2636
7 2673 -4z"/></g></svg></div>

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
        <div class="row" style="display: flex;flex-wrap: wrap;">
            <div class="col-4 col-6-m fp">
                <div class="product-ctg">
                    <span>Categorie :</span> <p><a href="{{ route('category.show', $category->slug ) }}">{{$category->title}}</a></p>
                </div>
            </div>
            <div class="col-4 col-6-m fp">
                <div class="info-product">
                    <span>Prix : </span><p>{{ $product->price }} €</p>

                </div>
            </div>
            <div class="col-4 col-6-m  fp">
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


