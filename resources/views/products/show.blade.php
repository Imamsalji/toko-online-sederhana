@extends('layouts.app')

@section('content')
<div class="" style="background-color: #ffc107;">
    <h1 style="color: black;text-align: center;padding-top: -60px"><strong>Detail Produk</strong></h1>
</div>

<div class="about" style="margin-bottom: 100px">
   <div class="container">
      <div class="row">
         <dir class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="about_box">
               <figure><img src="{{ asset('data_foto') }}/{{ $product->gambar }}" style="width:  540px;height: 380px" /></figure>
            </div>
         </dir>
          <dir class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="about_box">
               <h3>{{ $product->nama_produk }}</h3>
               <p>{{ $product->deskripsi }}</p>
               
            </div>
         </dir> 
      </div>
      <h2 style="text-align: center;margin-top: 20px" style=""><strong>Isi Form dibawah untuk membeli</strong></h2>
      <form action="{{ route('input') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id_produk" value="{{ $product->id_produk }}">
                <input type="hidden" name="nama_produk" value="{{ $product->nama_produk }}">
                <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                <label style="margin-top: auto;">Masukan Alamat</label>
                <textarea type="text" name="alamat" class="form-control" style="margin-bottom: auto;margin-top: auto;"></textarea>
                <label style="margin-bottom: auto;margin-top: auto;">Masukan Jumlah pembelian</label>
                <input type="text" name="jml" class="form-control" style="margin-bottom: auto;margin-top: auto;">
                <label style="margin-bottom: auto;margin-top: auto;">Masukan No Rekening</label>
                <input type="text" name="noreq" class="form-control" style="margin-bottom: auto;margin-top: auto;">
                <button type="submit" class="btn btn-danger">Beli Sekarang</button>
              </form>
   </div>
</div>
@endsection