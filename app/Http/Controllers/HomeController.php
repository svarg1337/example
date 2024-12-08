<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at')->take(6)->get();
        // dd($products[3]->images);
        return view('home.index', [
            'products' => $products,
        ]);
    }

    public function indexBladeTest()
    {
        return view('layouts.main');
    }

    public function test()
    {
        //$products = Product::where('price', '<',  1555)->get();
        $products = Product::all();
        //dd($products);


        //echo
        

        //dd($products);

        $ddata = [];
         foreach ($products as $key => $product) {
            $ddata[$key]['id'] = $product->id;
            $ddata[$key]['title'] = $product->title;
            $ddata[$key]['price'] = $product->price;

        }
        //dd($ddata);
        
        return view('home.test', ['data' => $ddata] );
    }

    public function forma(){
        return view('home.forma');
    }
    public function formPost(Request $req){
        $validated = $req->validate([
            'title'=> 'required',
            'description' => 'required',
            'price' => 'numeric',
            'in_stock' => 'nullable',
            'show_on_home' => 'nullable',
        ]);
        // dd($validated);
        //$allr = $req->all(['title', 'description','price','in_stock','show_on_home']);
        // dd($allr);
        $ppp = Product::create($validated);
        

        return 1;

        

    }


}
