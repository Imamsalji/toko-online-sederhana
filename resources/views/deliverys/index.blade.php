@extends('admin.app')

@section('content')
     <div class="row">
                    <!-- column -->
                    <div class="pull-left">
                        <h2 ><strong>Konfirmasi Menjual Produk</strong></h2>
                    </div>
                    <div class="col-sm-12">
                        <div class="card" >
                            <div class="pull-right" style="padding: 20px 0px 0px 20px">
                                <a class="btn btn-success" href="{{ route('deliverys.create') }}">Tambah Produck</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Id Produk</th>
                                                <th>Id User</th>
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
                                                    <button type="submit" class="btn btn-danger">Terima Barang</button>
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

    {!! $deliverys->links() !!}

@endsection