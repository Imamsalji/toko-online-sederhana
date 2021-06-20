@extends('admin.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Masukan Produk</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card">
<div class="card-body">
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">@csrf
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">ID Produk</label>
                                        <div class="col-md-12">
                                            <input type="text" name="id_produk" placeholder="Masukan ID" class="form-control pl-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Nama Produk</label>
                                        <div class="col-md-12">
                                            <input type="text" name="nama_produk" placeholder="Masukan Produk" class="form-control pl-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">gambar</label>
                                        <div class="col-md-12">
                                            <input type="file" placeholder="Upload Gambar" class="form-control pl-0 form-control-line" name="gambar">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Deskripsi</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" name="deskripsi" class="form-control pl-0 form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">jumlah produk</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Masukan Jumlah Produk" class="form-control pl-0 form-control-line" name="jml_produk">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">produk jual</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Produk yang terjual" class="form-control pl-0 form-control-line" name="produk_jual">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">produk beli</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Produk Yang dibeli"class="form-control pl-0 form-control-line" name="produk_beli">
                                        </div>
                                    </div>
        
                                    <div class="form-group">
                                        <div class="col-sm-12 d-flex">
                                            <button type="submit" class="btn btn-success mx-auto mx-md-0 text-white">Simpan data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
@endsection