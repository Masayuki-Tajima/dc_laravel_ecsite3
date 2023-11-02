@extends('layouts.app')

@section('content')
    <div class="container h-100">
        @foreach($products as $product)
        <div class="col-3">
            <img src="{{ asset($product->image) }}" class="img-thumbnail">
            <div class="row">
                <div class="col-12">
                    <p>
                        {{ $product->name }}
                        {{ $product->price }}円
                    </p>
                </div>
            </div>

            <form method="post" action="{{ route('carts.store', $product->id) }}">
                @csrf
                <input type="submit" name="cartIn" value="カートに入れる">
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="hidden" name="product_qty" value="1">
            </form>

            {{-- @if(Auth::user()->name == "ec_admin")
                <a href="{{route('products.edit', $product)}}">編集</a>
            @endif

            @if(Auth::user()->name == "ec_admin")
                <form method="post" action="{{ route('products.destroy', $product->id) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="delete" value="削除">
                </form>
            @endif
 --}}
        </div>
        @endforeach
    </div>
@endsection