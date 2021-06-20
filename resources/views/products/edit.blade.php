@extends('admin.app')

   

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
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
                                <form action="{{ route('products.update',$product->id) }}" method="POST" class="form-horizontal form-material">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">ID Produk</label>
                                        <div class="col-md-12">
                                            <input type="text" name="id_produk" value="{{ $product->id_produk }}" placeholder="Masukan Produk" class="form-control pl-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Nama Produk</label>
                                        <div class="col-md-12">
                                            <input type="text" name="nama_produk" value="{{ $product->nama_produk }}" placeholder="Masukan Produk" class="form-control pl-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">gambar</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Upload Gambar" value="{{ $product->gambar }}" class="form-control pl-0 form-control-line" name="gambar">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Deskripsi</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" name="deskripsi" class="form-control pl-0 form-control-line">{{ $product->deskripsi }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">jumlah produk</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Masukan Jumlah Produk" value="{{ $product->jml_produk }}" class="form-control pl-0 form-control-line" name="jml_produk">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">produk jual</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Produk yang terjual" value="{{ $product->produk_jual }}" class="form-control pl-0 form-control-line" name="produk_jual">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">produk beli</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{ $product->produk_beli }}" placeholder="Produk Yang dibeli"class="form-control pl-0 form-control-line" name="produk_beli">
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