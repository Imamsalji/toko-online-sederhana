<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Str;
use Auth;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == 'user')  {
            $products = Product::latest()->paginate(8);
            return view('welcome',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        $products = Product::latest()->paginate(8);

        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role == 'user')  {
            $products = Product::latest()->paginate(8);
            return view('welcome',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->role == 'user')  {
            $products = Product::latest()->paginate(8);
            return view('welcome',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        $request->validate([
            'id_produk' => 'required',
            'id_produk' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required',
            'jml_produk' => 'required',
            'produk_jual' => 'required',
            'produk_beli' => 'required',
        ]);

        $nm = $request->gambar;
        $namagambar = $nm->getClientOriginalName();

        $Product = new Product;
        $Product->id_produk = $request->id_produk;
        $Product->nama_produk = $request->nama_produk;
        $Product->deskripsi = $request->deskripsi;
        $Product->jml_produk = $request->jml_produk;
        $Product->produk_jual = $request->produk_jual;
        $Product->produk_beli = $request->produk_beli;
        $Product->gambar = $namagambar;

        $nm->move(public_path().'/data_foto', $namagambar);

        $Product->save();
        Alert::success('Sukses menyimpan Produk','Succes Message');
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        if(Auth::user()->role == 'user')  {
            $products = Product::latest()->paginate(8);
            return view('welcome',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if(Auth::user()->role == 'user')  {
            $products = Product::latest()->paginate(8);
            return view('welcome',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        $request->validate([
            'id_produk' => 'required',
            'nama_produk' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required',
            'jml_produk' => 'required',
            'produk_jual' => 'required',
            'produk_beli' => 'required',
        ]);

        $product->update($request->all());
        Alert::success('Sukses mengubah Produk','Succes Message');
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Alert::success('Sukses menghapus Produk','Succes Message');
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
