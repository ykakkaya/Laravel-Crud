@extends('layout');

@section('content')
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">ÜRÜN ADI</label>
            <input type="text" class="form-control" name="name" value="{{ $product->name }}">

        </div>
        <div class="mb-3">
            <label class="form-label">ÜRÜN AÇIKLAMASI</label>
            <input type="text" class="form-control" name="description" value="{{ $product->description }}">

        </div>
        <div class="mb-3">
            <label class="form-label">ÜRÜN FİYATI</label>
            <input type="text" class="form-control" name="price" value="{{ $product->price }}">

        </div>
        <button type="submit" class="btn btn-warning">ÜRÜN GÜNCELLE</button>

    </form>
@endsection
