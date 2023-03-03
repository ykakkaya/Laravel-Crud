@extends("layout")
@section("content")
    <div class="container">
        <h1>ÜRÜN GÜNCELLEME SAYFASI</h1>
        <form method="post" action="{{route("product.update",["product"=>$product->id])}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label  class="form-label">ÜRÜN ADI</label>
                <input type="text" class="form-control" name="productName" VALUE="{{$product->productName}}" >

            </div><div class="mb-3">
                <label  class="form-label">ÜRÜN KATEGORİSİ</label>
                <input type="text" class="form-control" name="productCategory" VALUE="{{$product->productCategory}}" >

            </div><div class="mb-3">
                <label  class="form-label">ÜRÜN AÇIKLAMA</label>
                <input type="text" class="form-control" name="productDescription" VALUE="{{$product->productDescription}}" >

            </div>
            <div class="mb-3">
                <label  class="form-label">ÜRÜN FİYATI</label>
                <input type="text" class="form-control" name="productPrice" value="{{$product->productPrice}}">
            </div>

            <button type="submit" class="btn btn-primary">ÜRÜN KAYDET</button>

        </form>
    </div>

@endsection
