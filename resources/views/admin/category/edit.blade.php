@extends('layouts.admin')

@section('content')

    <div class="content-header">
        <a href="{{route('admin.category.index')}}" class="btn-grad">Retour</a>

        <div class="form-admin">
            <form method="POST" action="{{ route('admin.category.update', $category->id) }}" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" name="title" value="{{ $category->title }}">
                </div>

                <div class="form-group">
                    <h3>Seo</h3>
                </div>

                <div class="form-group">
                    <label for="">Slug </label>
                    <input type="text" name="slugy" value="{{ $category->slugy }}">
                </div>

                <button class="btn-grad-product" type="submit">Valider</button>
            </form>
        </div>

    </div>


@stop
