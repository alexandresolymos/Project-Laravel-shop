@extends('layouts.master')



@section('content')

    <div class="container mgt-5" style="padding-bottom: 2em">
        <div class="row">


            <div class="col-12">
                <div class="h2-block">
                    <h1 style="display: flex; flex-direction: column">Nos produit de la categorie <span>{{ basename(Request::url()) }}</span></h1>
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


