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
                                <a class="btn btn-success" href="{{ route('transactions.create') }}">Tambah Produck</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID produk</th>
                                                <th>ID User</th>
                                                <th>nama produk</th>
                                                <th>Alamat</th>
                                                <th>Nomor Reqening</th>
                                                <th>jumlah produk</th>
                                                <th>Status Pemesanan</th>
                                                <th width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transactions as $transaction)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $transaction->id_produk }}</td>
                                                <td>{{ $transaction->id_user }}</td>
                                                <td>{{ $transaction->nama_produk }}</td>
                                                <td>{{ $transaction->alamat }}</td>
                                                <td>{{ $transaction->noreq }}</td>
                                                <td>{{ $transaction->jml }}</td>
                                                <td><p style="border: 0px solid black;text-align: center;background-color: yellow;
                                                box-shadow: 0px 2px 6px 2px grey;height: 30px;color: black">{{ $transaction->status }}</p   >
                                                    <form action="{{ route('transaksi') }}" method="post">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="id_produk" value="{{ $transaction->id_produk }}">
                                                        <input type="hidden" name="id_user" value="{{ $transaction->id_user }}">
                                                        <input type="hidden" name="nama_produk" value="{{ $transaction->nama_produk }}">
                                                        <input type="hidden" name="alamat" value="{{ $transaction->alamat }}">
                                                        <input type="hidden" name="jml" value="{{ $transaction->jml }}">
                                                        <button type="submit" class="btn btn-danger">Kirim barang</button>
                                                    </form>

                                                </td>
                                                <td>
                                                <form action="{{ route('transactions.destroy',$transaction->id) }}" method="POST">
                                                    <a class="btn btn-primary" href="{{ route('transactions.edit',$transaction->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
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

    {!! $transactions->links() !!}

@endsection