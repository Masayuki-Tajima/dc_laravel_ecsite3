@extends('layouts.app')

@section('content')
    <div class="container h-100">
        @foreach($products as $product)
        <div class="col-3">
            <form method="post" action="">
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
        @endforeach
    </div>
@endsection