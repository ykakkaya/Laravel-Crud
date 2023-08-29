@extends('layout')
@section('content')
    <br>
    <a href="{{ route('product.create') }}" type='button' class="btn btn-success">ÜRÜN EKLE</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ÜRÜN ADI</th>
                <th scope="col">AÇIKLAMA</th>
                <th scope="col">FİYAT</th>
                <th scope="col">AYRINTI GÖSTER</th>
                <th scope="col">DÜZENLE</th>
                <th scope="col">SİL</th>
            </tr>
        </thead>
        <tbody>
            @if ($products)
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td><a href="{{ route('product.show', $product->id) }}" type="button" class="btn btn-info">GÖSTER
                        </td>
                        <td><a href="{{ route('product.edit', $product->id) }}" type="button"
                                class="btn btn-warning">GÜNCELLE</td>
                        <td>
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">ÜRÜN SİL</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
