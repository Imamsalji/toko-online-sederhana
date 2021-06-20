@extends('admin.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
                    <!-- column -->
                    <div class="pull-left">
                        <h2 ><strong>Data Produk</strong></h2>
                    </div>
                    <div class="col-sm-12">
                        <div class="card" >
                            <div class="pull-right" style="padding: 20px 0px 0px 20px">
                                <a class="btn btn-success" href="{{ route('products.create') }}">Tambah Produck</a>
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
                                                <th>gambar</th>
                                                <th>Deskripsi</th>
                                                <th>jml_produk</th>
                                                <th>produk_jual</th>
                                                <th>produk_beli</th>
                                                <th width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $product->id_produk }}</td>
                                                <td>{{ $product->id_user }}</td>
                                                <td>{{ $product->nama_produk }}</td>
                                                <td><img src="{{ asset('data_foto') }}/{{ $product->gambar }}" style="width: 200px;height: 200px" /></td>
                                                <td>
                                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample{{ $product->id_produk }}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        selengkapnya...
                                                    </a>
                                                    <div class="collapse" id="collapseExample{{ $product->id_produk }}">
                                                        <div class="card card-body">
                                                            {{ $product->deskripsi }}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $product->jml_produk }}</td>
                                                <td>{{ $product->produk_jual }}</td>
                                                <td>{{ $product->produk_beli }}</td>
                                                <td>
                                                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
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

    {!! $products->links() !!}

@endsection