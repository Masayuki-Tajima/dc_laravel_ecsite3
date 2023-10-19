@extends('layouts.app')

@section('content')
    <div class="container h-100">
        <div class="col-3">
            <form method="post" action="{{ route('carts.store') }}">
                    <img src="{{ asset('images/orange.jpg') }}" class="img-thumbnail">
                    <div class="row">
                        <div class="col-12">
                            <p>
                                {{ $product->name }}
                                {{ $product->price }}円
                            </p>
                        </div>
                    </div>
                    <input type="button" value="カートに入れる">
            </form>
        </div>
        <div class="col-3">
            <img src="{{ asset('images/dummy.png') }}" class="img-thumbnail">
            <div class="row">
                <div class="col-12">
                    <p>
                        みかん（偽物）
                        50,000,000円
                    </p>
                    <input type="button" value="カートに入れる">
                </div>
            </div>
        </div>
    </div>
@endsection