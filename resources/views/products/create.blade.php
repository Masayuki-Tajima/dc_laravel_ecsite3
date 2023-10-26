@extends('layouts.app')

@section('content')
    <div class="container h-100">
        <div>
            <h2>商品登録</h2>
        </div>

        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="product_name">商品名</label>
                <input type="text" name="product_name" required>
            </div>

            <div>
                <label for="price">価格</label>
                <input type="text" name="price" required>
            </div>

            <div>
                <label for="price">個数</label>
                <input type="text" name="qty" required>
            </div>

            <div>
                <label for="image">商品画像</label>
                <input type="file" name="image">
            </div>

            <div>
                <label for="public_flag">公開フラグ</label>
                <select name="public_flag">
                    <option value=1>公開</option>
                    <option value=0>非公開</option>
                </select>
            </div>

            <input type="submit" value="商品を登録">
            <a href="{{ route('products.index') }}">戻る</a>
        </form>
    </div>
@endsection