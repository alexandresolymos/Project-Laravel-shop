@extends('layouts.admin')

@section('content')

    <div class="content-header">
        <a href="{{route('admin.category.index')}}" class="btn-grad">Retour</a>

        <div class="form-admin">
            <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" name="title" placeholder="Mon titre ici">
                    @error('title')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" name="slugy" placeholder="Mon slug ">
                    @error('slugy')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>


                <h3>SEO</h3>

                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="meta_title" placeholder="Mon titre de page">
                    @error('meta_title')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="">Meta Description</label>
                    <textarea type="text" name="meta_description" placeholder="Ma description de page"></textarea>
                    @error('meta_description')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Balise alt de l'image</label>
                    <input type="text" name="balise_alt" placeholder="Titre de l'image">
                    @error('balise_alt')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>


                <button class="btn-grad-product" type="submit">Valider</button>
            </form>
        </div>

    </div>


@stop
