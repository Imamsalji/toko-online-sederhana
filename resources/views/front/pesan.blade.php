@extends('layouts.app')

@section('content')
<div class="" style="background-color: #ffc107;">
    <h1 style="color: black;text-align: center;padding-top: auto;"><strong>Produk Yang sedang di Pesan saat ini</strong></h1>
</div>
<div class="container" style="margin-top: 40px;margin-bottom: 40px">
     <div class="row">
                    <!-- column -->
                    
                    <div class="col-sm-12">
                        <div class="card" >
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID produk</th>
                                                <th>nama produk</th>
                                                <th>Alamat</th>
                                                <th>Nomor Reqening</th>
                                                <th>jumlah produk</th>
                                                <th>Status Pemesanan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transactions as $transaction)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $transaction->id_produk }}</td>
                                                <td>{{ $transaction->nama_produk }}</td>
                                                <td>{{ $transaction->alamat }}</td>
                                                <td>{{ $transaction->noreq }}</td>
                                                <td>{{ $transaction->jml }}</td>
                                                <td><p style="border: 0px solid black;text-align: center;background-color: yellow;
                                                box-shadow: 0px 2px 6px 2px grey;height: 30px;color: black">{{ $transaction->status }}</p>
                                                </td>
            
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

@endsection