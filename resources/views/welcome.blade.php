@extends('layouts.app')

@section('content')

      @include('layouts.section')

 @include('layouts.product')
<div class="product-bg">
         <div class="product-bg-white">
            <div class="container">
               <div class="row">
                  @foreach ($products as $product)
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="product-box">
                        <i><img src="{{ asset('data_foto') }}/{{ $product->gambar }}" style="width: 200px;height: 200px" /></i>
                        <h3>{{ $product->nama_produk }}</h3>
                        <span>{{ $product->jml_produk }}</span>
                        <div id="closed"></div>
                        
                     </div>
                     
                  </div>

                  @endforeach
                 
               </div>
            </div>
         </div>
      </div>


      @include('layouts.service')

      @endsection