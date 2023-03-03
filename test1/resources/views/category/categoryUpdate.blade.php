@extends("layout")
@section("content")
    <div class="container">
        <h1>KATEGORİ GÜNCELLEME SAYFASI</h1>
        <form method="post" action="{{route("category.update",["category"=>$category->id])}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label  class="form-label">KATEGORİ ADI</label>
                <input type="text" class="form-control" name="categoryName" VALUE="{{$category->categoryName}}" >

            </div>
            <div class="mb-3">
                <label  class="form-label">KATEGORİ AÇIKLAMA</label>
                <input type="text" class="form-control" name="categoryDescription" value="{{$category->categoryDescription}}">
            </div>

            <button type="submit" class="btn btn-primary">KATEGORİ KAYDET</button>

        </form>
    </div>

@endsection
