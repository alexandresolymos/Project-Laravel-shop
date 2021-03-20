@extends('layouts.master')

@section('meta_title'){{ $product->meta_title }}@stop
@section('meta_description'){{ $product->meta_description }}@stop



@section('content')
    <div class="jumbotron">
        <h1 class="display-4">{{ $product->title }}</h1>
        <p class="lead">  <p>{{ $product->subtitle }}</p>
        <hr class="my-4">
        <img src="{{ asset('/img/'. $product->image) }}" alt="{{ $product->balise_alt }}">

        <p>Description : {{ $product->description }}</p>
        <p>Prix : {{ $product->price }}</p>
        <p class="lead">
        <form action="{{ route('cart.store') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $product->id }}">
            <input type="hidden" name="title" value="{{ $product->title }}">
            <input type="hidden" name="subtitle" value="{{ $product->subtitle }}">
            <input type="hidden" name="price" value="{{ $product->price }}">
            <button type="submit" id="addcart">Ajouter au panier</button>
        </form>
        </p>
    </div>
@stop


