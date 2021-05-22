@extends('layouts.admin')

@section('content')

    <div class="content-header">
        <a href="{{route('admin.category.index')}}" class="btn-grad">Retour</a>

        <div class="form-admin">
            <form method="POST" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
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


                <button class="btn-grad-product" type="submit">Valider</button>
            </form>
        </div>

    </div>


@stop
