@extends('admin.app')

   

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
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
                                <form action="{{ route('transactions.update',$transaction->id) }}" method="POST" class="form-horizontal form-material">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">ID Produk</label>
                                        <div class="col-md-12">
                                            <input type="text" name="id_produk" value="{{ $transaction->id_produk }}" placeholder="Masukan Produk" class="form-control pl-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Nama Produk</label>
                                        <div class="col-md-12">
                                            <input type="text" name="nama_produk" value="{{ $transaction->nama_produk }}" placeholder="Masukan Produk" class="form-control pl-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Alamat</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" name="alamat" class="form-control pl-0 form-control-line">{{ $transaction->alamat }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Nomor Rekening</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Upload Gambar" value="{{ $transaction->noreq }}" class="form-control pl-0 form-control-line" name="noreq">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">jumlah</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Masukan Jumlah Produk" value="{{ $transaction->jml }}" class="form-control pl-0 form-control-line" name="jml">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">status</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Produk yang terjual" value="{{ $transaction->status }}" class="form-control pl-0 form-control-line" name="status">
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