@extends('layouts.master')


@section('content')

<div class="container-all">
    <div class="row">


        <div class="col-12">
                <div class="home-first-block">
                </div>
        </div>

    </div>
</div>

<div class="container">
    <div class="row">


        <div class="col-12">
            <div class="h2-block">
                <h2>Nos services</h2>
            </div>
            @foreach($categories as $category)
                    <div class="col-3 col-6-m">
                        <div class="category-space">
                            <div class="category-block">
                                <a class="link-category" href="{{ route('category.show', $category->slug ) }}">
                                    <img src="https://shtheme.com/preview/orgafe/img/demos/home1.jpg" alt="">
                                    <span>Voir la Catégorie </span>
                                </a>
                            </div>
                            <div class="category-text">
                                <p>{{ $category->title }}
                                </p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>

    </div>
</div>

<div class="container" id="section-three">
    <div class="row">
        <div class="col-12">
            <div class="col-6">
               <div class="left-section-three">
                    <div class="block-svg">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M3 3H11V7H17V13H21V21H13V17H7V11H3V3ZM15 13H13V15H9V11H11V9H15V13Z" fill="currentColor" /></svg>
                    </div>
               </div>
            </div>
            <div class="col-6">
                <div class="right-section-three">
jjj
                </div>
            </div>
        </div>
    </div>
</div>

    @foreach($products as $product)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $product->title }}</h5>
                <p class="card-text">{{ $product->subtitle }}</p>
                <p class="card-text">{{ $product->price }}€</p>
                <a href="{{ route('shop.show', $product->slug  ) }}" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        @endforeach
@stop
