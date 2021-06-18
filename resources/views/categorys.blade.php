@extends('layouts.master')



@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="h1-block">
                    <h1>Nos services </h1>
                    <h2 style="text-align: center;
                      font-weight: 300;
                      font-size: 20px;
                      padding-bottom: 1em">Un large panel de services nous permet d'avoir de vous accompangnez dans un projet de A à Z</h2>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            @foreach( $category as $categories)
                <div class="col-3 col-6-m">
                    <div class="category-space">
                        <div class="category-block">
                            <a class="link-category" href="{{ route('category.show', $categories->slug ) }}">
                                <img src="https://shtheme.com/preview/orgafe/img/demos/home1.jpg" alt="">
                                <span>Voir la Catégorie </span>
                            </a>
                        </div>
                        <div class="category-text">
                            <p>{{ $categories->title }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@stop


