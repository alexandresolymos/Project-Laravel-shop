@extends('layouts.admin')

@section('content')

    <div class="content-header">
        <a href="{{route('admin.index')}}" class="btn-grad">Retour</a>

        <div class="form-admin">
            <form method="POST" action="{{ route('admin.payment.store') }}">
                @csrf
                <div class="form-group">
                    <label for="">Clée publique stripe</label>
                    <input type="text" name="STRIPE_KEY" placeholder="Clée pulique">
                    @error('STRIPE_KEY')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Clée privée stripe</label>
                    <input type="password" name="STRIPE_SECRET" placeholder="Clée privée ">
                    @error('STRIPE_SECRET')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <button class="btn-grad-product" type="submit">Valider</button>
            </form>
        </div>

    </div>


@stop
