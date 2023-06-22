@extends('master')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Pengumuman</h4>
                <p class="card-description">
                    Silahkan Edit Data Pengumuman
                </p>
                <form class="forms-sample" action="{{ route('update-pengumuman', $pengumuman->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" placeholder="judul" name="judul"
                            value="{{ $pengumuman->judul }}">
                    </div>
                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="pengumuman" class="file-upload-default"
                            value="{{ $pengumuman->pengumuman }}">
                        <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" placeholder="Upload Image"
                                name="pengumuman" value="{{ $pengumuman->pengumuman }}">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('index-pengumuman') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
