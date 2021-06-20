@extends('admin.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('transactions.index') }}"> Back</a>
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
        <form action="{{ route('transactions.store') }}" method="POST" class="form-horizontal form-material">
            @csrf
            <div class="form-group">
                <label class="col-md-12 mb-0">ID Produk</label>
                <div class="col-md-12">
                    <select  class="form-control" name="id_produk" >
                    @foreach ($products as $product)
                    <option value="{{ $product->id_produk}} " style="color: black">
                        <h4 name>{{ $product->id_produk . " - " . $product->nama_produk }}</h4></option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
                <label class="col-md-12 mb-0">Nama Produk</label>
                <div class="col-md-12">
                    <select  class="form-control" name="nama_produk" >
                    @foreach ($products as $product)
                    <option value="{{ $product->nama_produk }} " style="color: black">
                        <h4 name>{{ $product->nama_produk }}</h4></option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-12 mb-0">Alamat</label>
            <div class="col-md-12">
                <textarea rows="5" name="alamat" class="form-control pl-0 form-control-line"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="example-email" class="col-md-12">Noreq</label>
            <div class="col-md-12">
                <input type="text" placeholder="Masukan Nomor reqening" class="form-control pl-0 form-control-line" name="noreq">
            </div>
        </div>
        <div class="form-group">
            <label for="example-email" class="col-md-12">Jumlah </label>
            <div class="col-md-12">
                <input type="text" placeholder="Upload jml" class="form-control pl-0 form-control-line" name="jml">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <input type="hidden" placeholder="Masukan Jumlah Produk" class="form-control pl-0 form-control-line" name="status" value="Pemesanan">
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