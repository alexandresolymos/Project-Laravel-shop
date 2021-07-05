@extends('layouts.master')



@section('content')

    <div class="container mgt-5" style="padding-bottom: 2em">
        <div class="row">


            <div class="col-12">
                <div class="h2-block">
                    <h1 style="display: flex; flex-direction: column">Nos produit de la categorie <span>
                            <div class="svg-1">
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
7 2673 -4z"/>
</g>
</svg>
                            </div> {{ basename(Request::url()) }}</span></h1>
                </div>
                @foreach ($products as $product)
                    <div class="col-6-t col-12-m mgt-5">
                        <div class="category-space">
                            <div class="category-block">
                                <a class="link-category" href="{{ route('shop.show', $product->slug  ) }}">
                                    <img src="{{ asset('/img/'. $product->image) }}" alt="{{ $product->balise_alt }}" >
                                    <span class="card-text">{{ $product->price }}€</span>
                                </a>
                            </div>
                            <div class="category-text">
                                <p>{{ $product->title }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

@stop


