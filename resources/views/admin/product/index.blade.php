@extends('layouts.admin')

@section('content')
        <div class="content-header">
            <a href="{{route('admin.product.create')}}" class="btn-grad">Ajouter un produit</a>

            <div class="container-all">
                <div class="row">


                @foreach($product as $products)

                        <div class="col-12-m col-6">
                            <div class="card">
                                <div class="card-half card-product">
                                    <a href="{{ route('shop.show', $products->slug  ) }}">
                                    <img src="{{ asset('/img/'. $products->image) }}" alt="{{ $products->balise_alt }}">
                                    </a>
                                </div>
                                <div class="card-half card-description">
                                    <h1 class="card-title">#{{ $products->id }} - {{ $products->title }}</h1>
                                    <div class="card-actions">
                                        <a class="btn-grad-product" href="{{ route('admin.product.edit', $products->id) }}">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.1925 7.70711C15.8019 7.31658 15.1688 7.31658 14.7782 7.70711L7.70718 14.7782C7.31665 15.1687 7.31665 15.8019 7.70718 16.1924C8.0977 16.5829 8.73087 16.5829 9.12139 16.1924L16.1925 9.12132C16.583 8.7308 16.583 8.09763 16.1925 7.70711Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M3 6C3 4.34315 4.34315 3 6 3H18C19.6569 3 21 4.34315 21 6V18C21 19.6569 19.6569 21 18 21H6C4.34315 21 3 19.6569 3 18V6ZM6 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H6C5.44772 19 5 18.5523 5 18V6C5 5.44772 5.44772 5 6 5Z" fill="currentColor" /></svg>
                                            Modifier
                                        </a>
                                        <form method="POST" action="{{ route('admin.product.delete', $products->id) }}">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn-grad-product">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.552 8C11.9997 8 11.552 8.44772 11.552 9C11.552 9.55228 11.9997 10 12.552 10H16.552C17.1043 10 17.552 9.55228 17.552 9C17.552 8.44772 17.1043 8 16.552 8H12.552Z" fill="currentColor" fill-opacity="0.5" /><path d="M12.552 17C11.9997 17 11.552 17.4477 11.552 18C11.552 18.5523 11.9997 19 12.552 19H16.552C17.1043 19 17.552 18.5523 17.552 18C17.552 17.4477 17.1043 17 16.552 17H12.552Z" fill="currentColor" fill-opacity="0.5" /><path d="M12.552 5C11.9997 5 11.552 5.44772 11.552 6C11.552 6.55228 11.9997 7 12.552 7H20.552C21.1043 7 21.552 6.55228 21.552 6C21.552 5.44772 21.1043 5 20.552 5H12.552Z" fill="currentColor" fill-opacity="0.8" /><path d="M12.552 14C11.9997 14 11.552 14.4477 11.552 15C11.552 15.5523 11.9997 16 12.552 16H20.552C21.1043 16 21.552 15.5523 21.552 15C21.552 14.4477 21.1043 14 20.552 14H12.552Z" fill="currentColor" fill-opacity="0.8" /><path d="M3.448 4.00208C2.89571 4.00208 2.448 4.44979 2.448 5.00208V10.0021C2.448 10.5544 2.89571 11.0021 3.448 11.0021H8.448C9.00028 11.0021 9.448 10.5544 9.448 10.0021V5.00208C9.448 4.44979 9.00028 4.00208 8.448 4.00208H3.448Z" fill="currentColor" /><path d="M3.448 12.9979C2.89571 12.9979 2.448 13.4456 2.448 13.9979V18.9979C2.448 19.5502 2.89571 19.9979 3.448 19.9979H8.448C9.00028 19.9979 9.448 19.5502 9.448 18.9979V13.9979C9.448 13.4456 9.00028 12.9979 8.448 12.9979H3.448Z" fill="currentColor" /></svg>
                                                Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

            @endforeach
                </div>
            </div>

        </div>



@stop
