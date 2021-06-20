<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Alert;
use App\Product;
use App\Delivery;
use Auth;

class TransactionController extends Controller
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

        $transactions = Transaction::latest()->paginate(5);

        return view('transactions.index',compact('transactions'))
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
        $products = Product::all();
        return view('transactions.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function input(Request $request)
    {
        if(Auth::user()->role == 'user')  {
            $products = Product::latest()->paginate(8);
            return view('welcome',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }

        $request->validate([
            
            'id_produk' => 'required',
            'id_user' => 'required',
            'nama_produk' => 'required',
            'jml' => 'required',
            'alamat' => 'required',
        ]);
        
        $delivery = new Delivery;
        $delivery->id_produk = $request->id_produk;
        $delivery->id_user = $request->id_user;
        $delivery->nama_produk = $request->nama_produk;
        $delivery->alamat = $request->alamat;
        $delivery->jml = $request->jml;
        $delivery->status = "Terkirim";
        $delivery->save();
        Alert::success('Produk dikirimkan','Succes Message');
        return redirect()->route('transactions.index')
                        ->with('success','Product created successfully.');
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
            'nama_produk' => 'required',
            'alamat' => 'required',
            'noreq' => 'required',
            'jml' => 'required',
            'status' => 'required',
        ]);
        Transaction::create($request->all());
        Alert::success('Pesanan berhasil di Simpan','Succes Message');
        return redirect()->route('transactions.index')
                        ->with('success','Product created successfully.');
    }

    


    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        if(Auth::user()->role == 'user')  {
            $products = Product::latest()->paginate(8);
            return view('welcome',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        return view('transactions.edit',compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'id_produk' => 'required',
            'nama_produk' => 'required',
            'alamat' => 'required',
            'noreq' => 'required',
            'jml' => 'required',
            'status' => 'required',
        ]);

        $transaction->update($request->all());

        return redirect()->route('transactions.index')
                        ->with('success','Product updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        Alert::success('Pesanan berhasil di Hapus','Succes Message');
        return redirect()->route('transactions.index')
                        ->with('success','Product deleted successfully');
    }
}
