@extends('layouts.admin')

@section('content')

        <div class="content-header">
            <a href="{{route('admin.product.index')}}" class="btn-grad">Retour</a>

        <div class="form-admin">
            <form method="POST" action="{{ route('admin.product.update', $product->id) }}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" name="title" value="{{ $product->title }}">
                </div>

                <div class="form-group">
                    <label for="">Sous Titre</label>
                    <input type="text" name="subtitle" value="{{ $product->subtitle }}">
                </div>

                <div class="form-group">
                    <label for="">Slug </label>
                    <input type="text" name="slugy" value="{{ $product->slugy }}">
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea type="text" name="description">{{ $product->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="">Prix</label>
                    <input type="number" name="price" step="1" value="{{ $product->price }}">
                </div>

                <button class="btn-grad-product" type="submit">Valider</button>
            </form>
        </div>

        </div>


@stop
