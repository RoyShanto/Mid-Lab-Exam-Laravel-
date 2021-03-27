<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $users = Product::all();
        return view('Customer.index', ['users' => $users]);
    }

    public function show_product($id, Request $req){
        echo $id;
        $users = DB::table('product')->where('p_id', $id)->get();
        return view('Customer.select_product', ['users' => $users]);

    }
}
