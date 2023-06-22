@extends('master')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Berita</h4>
                <p class="card-description">
                    Silahkan Tambah Data Berita
                </p>
                <form class="forms-sample" action="{{ route('store-berita') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">title berita</label>
                        <input type="text" class="form-control" id="title" placeholder="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="title">description</label>
                        <textarea class="form-control" name="description" id="editor" cols="30" rows="10"
                            placeholder="Masukkan description ..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="title">photo</label>
                        <input class="form-control" id="inputnumber" type="file" placeholder="Masukkan photo ..."
                            name="photo">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('index-berita') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
