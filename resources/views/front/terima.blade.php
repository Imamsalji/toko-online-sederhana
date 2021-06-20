@extends('layouts.app')

@section('content')
<div class="" style="background-color: #ffc107;">
    <h1 style="color: black;text-align: center;padding-top: auto;"><strong>Klik Terima Bila barang Sudah sampai</strong></h1>
</div>
<div class="container" style="margin-top: 40px;margin-bottom: 40px">
     <div class="row">
                    <!-- column -->
                    
                    <div class="col-sm-12">
                        <div class="card" >
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table user-table" style="text-align: center;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Id Produk</th>
                                                <th>Id user</th>
                                                <th>nama produk</th>
                                                <th>Alamat</th>
                                                <th>jumlah produk</th>
                                                <th>Status Pemesanan</th>
                                                <th width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($deliverys as $delivery)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $delivery->id_produk }}</td>
                                                <td>{{ $delivery->id_user }}</td>
                                                <td>{{ $delivery->nama_produk }}</td>
                                                <td>{{ $delivery->alamat }}</td>
                                                <td>{{ $delivery->jml }}</td>
                                                <td><p style="border: 0px solid black;text-align: center;background-color: #00ff00;
                                                box-shadow: 0px 2px 6px 2px grey;height: 30px;color: black">{{ $delivery->status }}</p   >

                                                </td>
                                                <td>
                                                <form action="{{ route('deliverys.destroy',$delivery->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Penerimaan {{ $delivery->nama_produk }}</button>
                                                </form>
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