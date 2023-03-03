@extends("layout")
@section("content")
    <div class="container">
        <h1>KATEGORİ LİSTESİ</h1>
        <br>
        <a href="{{route("category.create")}}" class="btn btn-primary">KATEGORİ EKLE</a>
        <a href="{{route("product.index")}}" class="btn btn-danger">ÜRÜNLER</a>
        <br>
        <br>
        <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th >ID</th>
                <th >KATEGORİ ADI</th>
                <th >KATEGORİ AÇIKLAMA</th>
                <th >GÜNCELLE</th>
                <th >SİL</th>

            </tr>
            </thead>
            <tbody>
            @foreach($categoryList as $item)
                <tr>
                    <th >{{$item->id}}</th>
                    <td>{{$item->categoryName}}</td>
                    <td>{{$item->categoryDescription}}</td>

                    <td><a href="{{route("category.edit",["$item->id"])}}"class="btn btn-success">GÜNCELLE</a> </td>
                    <form method="post" action="{{ route('category.destroy',[$item->id]) }}">
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
