@extends("layout")
@section("content")
    <div class="container">
        <h1>ÜRÜN EKLEME SAYFASI</h1>
        <form method="post" action="{{route("product.store")}}">
            @csrf
            <div class="mb-3">
                <label  class="form-label">ÜRÜN ADI</label>
                <input type="text" class="form-control" name="productName" >

            </div>
            <div class="mb-3">
                <label  class="form-label">ÜRÜN KATEGORİSİ</label>
                <input type="text" class="form-control" name="productCategory" >

            </div>
            <div class="mb-3">
                <label  class="form-label">ÜRÜN AÇIKLAMA</label>
                <input type="text" class="form-control" name="productDescription" >

            </div>
            <div class="mb-3">
                <label  class="form-label">ÜRÜN FİYATI</label>
                <input type="text" class="form-control" name="productPrice">
            </div>

            <button type="submit" class="btn btn-primary">ÜRÜN KAYDET</button>

        </form>
    </div>

@endsection
