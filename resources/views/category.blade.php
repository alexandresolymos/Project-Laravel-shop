@extends('layouts.master')



@section('content')
    <div class="jumbotron">

        @foreach ($products as $product)

            <p>{{$product->title}}</p>
            <p class="card-text">{{ $product->subtitle }}</p>
            <p class="card-text">{{ $product->price }}€</p>
            <a href="{{ route('shop.show', $product->slug  ) }}" class="btn btn-primary">Go somewhere</a>
        @endforeach
    </div>
@stop


