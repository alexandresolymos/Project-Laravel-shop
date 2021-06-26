@extends('layouts.master')



@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="h1-block">
                    <h1></h1>
                    <h2 style="text-align: center;
                      font-weight: 300;
                      font-size: 20px;
                      padding-bottom: 1em"></h2>
                </div>
            </div>
        </div>
    </div>



    <div class="container" style="padding-bottom: 2em">
        <div class="row">

                @foreach ($products as $product)
                    <div class="col-6">

                        <div class="card-product">
                            <div class="img">
                                <img src="{{ asset('/img/'. $product->image) }}" alt="{{ $product->balise_alt }}" width="50%">
                            </div>
                        <div class="card-product-text">
                            <p>{{$product->title}}</p>
                            <p class="card-text">{{ $product->subtitle }}</p>
                            <p class="card-text">{{ $product->price }}€</p>
                            <a href="{{ route('shop.show', $product->slug  ) }}" class="btn btn-primary">Go somewhere</a>
                        </div>
                        </div>
                        
                    </div>
                @endforeach

        </div>
    </div>

@stop


