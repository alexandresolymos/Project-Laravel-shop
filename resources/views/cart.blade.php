@extends('layouts.master')

@section('content')

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">
        @if($message = Session::get('success'))
            <div>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="row">
            <div class="col-xs-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <div class="row">
                                <div class="col-xs-6">
                                    <h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
                                </div>
                                <div class="col-xs-6">
                                    <a href="{{ route('shop.index') }}" class="btn btn-primary btn-sm btn-block">
                                        <span class="glyphicon glyphicon-share-alt"></span> Continue shopping
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">

                        @foreach(Cart::content() as $product)

                            <div class="row">
                                <div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
                                </div>
                                <div class="col-xs-4">
                                    <h4 class="product-name"><strong>{{ $product->name }}</strong></h4><h4><small>Product description</small></h4>
                                </div>
                                <div class="col-xs-6">
                                    <div class="col-xs-6 text-right">
                                        <h6><strong>{{ $product->price }} €<span class="text-muted">x</span></strong></h6>
                                    </div>
                                    <div class="col-xs-4">
                                        <input disabled type="text" class="form-control input-sm" value="{{ $product->qty }}">
                                    </div>
                                    <div class="col-xs-2">
                                        <form action="{{ route('cart.destroy', $product->rowId) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-link btn-xs">
                                                <span class="glyphicon glyphicon-trash"> </span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                        <div class="row">
                            <div class="text-center">
                                <div class="col-xs-9">
                                    <h6 class="text-right">Added items?</h6>
                                </div>
                                <div class="col-xs-3">
                                    <button type="button" class="btn btn-default btn-sm btn-block">
                                        Update cart
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="panel-footer">
                        <div class="row text-center">
                            <div class="col-xs-9">
                                <h4 class="text-right">Sous-Total <strong>{{ Cart::subtotal() }}</strong></h4>
                                <h4 class="text-right">Tva <strong>{{ Cart::tax() }}</strong></h4>
                                <h4 class="text-right">Total <strong>{{ Cart::total() }}</strong></h4>


                            </div>
                            <div class="col-xs-3">
                                <a href="{{ route('checkout') }}" class="btn btn-success btn-block">
                                    Checkout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
