<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Alert;
use Auth;

class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(Auth::user()->role == 'admin')  {
            $products = Product::latest()->paginate(8);

            return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        

        $products = Product::latest()->paginate(8);
        return view('welcome',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index2()
    {
        

        $products = Product::latest()->paginate(8);
        return view('welcome',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }
}
