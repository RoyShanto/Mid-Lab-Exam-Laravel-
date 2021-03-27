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

    public function products_list(){
        $users = Product::all();
        return view('Admin.all_product', ['users' => $users]);
    }
    public function show_add_product_form(){
        return view('Admin.add_product');
    }
    public function upload_product(Request $req){
        $user = new Product();
        $user->p_name = $req->p_name;
        $user->p_price = $req->p_price;
        $user->p_quantity = $req->p_quantity;
        $user->size = $req->p_size;
        $user->short_description = $req->short_description;
        $user->image = $req->p_image;
        $user->gender = $req->p_gender;
        $user->save();
        return redirect('/products_list');
    }
    public function edit_product($id){
        echo $id;
        $product = DB::table('product')->where('p_id', $id)->get();
        return view('Admin.edit_product', ['product' => $product]);
    }
    public function edited_product($id, Request $req){
        $user = DB::table('product')
        ->where('p_id', $id)
        ->update([
        'p_name' => $req->p_name,
        'p_price' => $req->p_price,
        'p_quantity' => $req->p_quantity,
        'size' => $req->p_size,
        'short_description' => $req->short_description,
        'gender' => $req->p_gender,
        'image' => $req->p_image
        ]);
        return redirect('/products_list');
    }
    public function delete_product($id){
        $data = Product::find($id);
        $data->delete();
        return redirect('/products_list');
    }
}
