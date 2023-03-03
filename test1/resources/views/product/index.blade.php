@extends("layout")
@section("content")
    <div class="container">
        <h1>ÜRÜN LİSTELEME SAYFASI</h1>
        <br>
        <a href="{{route("product.create")}}" class="btn btn-primary">ÜRÜN EKLE</a>
        <a href="{{route("category.index")}}" class="btn btn-danger">KATEGORİLER </a>
        <br>
        <br>
        <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th >ID</th>
                <th >ÜRÜN ADI</th>
                <th >ÜRÜN KATEGORİSİ</th>
                <th >ÜRÜN AÇIKLAMA</th>
                <th >ÜRÜN FİYAT</th>
                <th >ÜRÜN GÜNCELLE</th>
                <th >ÜRÜN SİL</th>

            </tr>
            </thead>
            <tbody>
            @foreach($productList as $p)
                <tr>
                    <th >{{$p->id}}</th>
                    <td>{{$p->productName}}</td>
                    <td>{{$p->productCategory}}</td>
                    <td>{{$p->productDescription}}</td>
                    <td>{{$p->productPrice}}</td>

                    <td><a href="{{route("product.edit",["$p->id"])}}"class="btn btn-success">GÜNCELLE</a> </td>
                    <form method="post" action="{{ route('product.destroy',["$p->id"]) }}">
                        @csrf
                        @method('DELETE')
                        <td><button type="submit" class="btn btn-warning">SİL</button></td>
                    </form>
                </tr>
            @endforeach

            </tbody>
        </table>

    </div>

@endsection
