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


    <div class="jumbotron">

        @foreach ($products as $product)

            <p>{{$product->title}}</p>
            <p class="card-text">{{ $product->subtitle }}</p>
            <p class="card-text">{{ $product->price }}€</p>
            <a href="{{ route('shop.show', $product->slug  ) }}" class="btn btn-primary">Go somewhere</a>
        @endforeach
    </div>
@stop


