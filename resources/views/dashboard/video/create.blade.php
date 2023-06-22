@extends('master')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data video</h4>
                <p class="card-description">
                    Silahkan Tambah Data video
                </p>
                <form class="forms-sample" action="{{ route('store-video') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" placeholder="judul" name="judul">
                    </div>
                    <div class="form-group">
                        <label>File sampul</label>
                        <input type="file" name="sampul" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" placeholder="Upload Image"
                                name="sampul">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload sampul</button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="video" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" placeholder="Upload Image"
                                name="video">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload video</button>
                            </span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('index-video') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
