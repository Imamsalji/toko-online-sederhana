<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Transaction;
use App\Delivery;
use Alert;
use Auth;


class FrontController extends Controller
{
    


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::latest()->paginate(12);

        return view('front.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pesan()
    {

        
        $transactions = Transaction::where('id_user','=',Auth::user()->id)->get();
        return view('front.pesan',compact('transactions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function terima()
    {

        $deliverys = Delivery::where('id_user','=',Auth::user()->id)->get();
        

        return view('front.terima',compact('deliverys'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function input(Request $request)
    {


        $Transaction = new Transaction;
        $Transaction->id_produk = $request->id_produk;
        $Transaction->id_user = $request->id_user;
        $Transaction->nama_produk = $request->nama_produk;
        $Transaction->alamat = $request->alamat;
        $Transaction->noreq = $request->noreq;
        $Transaction->jml = $request->jml;
        $Transaction->status = "Pemesanan";
        $Transaction->save();

        $products = Product::latest()->paginate(12);
        Alert::success('Sukses Memesan Produk','Succes Message');

        return view('front.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**

     * Display the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function show(Product $product)

    {
        return view('front.show',compact('product'));
    }
}
