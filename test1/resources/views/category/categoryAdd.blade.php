@extends("layout")
@section("content")
    <div class="container">
        <h1>KATEGORİ EKLEME SAYFASI</h1>
        <form method="post" action="{{route("category.store")}}">
                @csrf
            <div class="mb-3">
                <label  class="form-label">KATEGORİ ADI</label>
                <input type="text" class="form-control" name="categoryName" >

            </div>
            <div class="mb-3">
                <label  class="form-label">KATEGORİ AÇIKLAMA</label>
                <input type="text" class="form-control" name="categoryDescription">
            </div>

            <button type="submit" class="btn btn-primary">KATEGORİ KAYDET</button>

        </form>
    </div>

@endsection
