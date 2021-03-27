<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index($username){
        echo $username;
        $user = DB::table('customers')->where('user_name', $username)->get();
        // print_r($user);
        return view('Customer.edit', ['user' => $user]);

    }
    public function update_info($username, Request $req){

        $user = DB::table('customers')
        ->where('user_name', $username)
        ->update([
            'full_name' => $req->name,
            'user_name' => $req->username,
            'email' => $req->email,
            'password' => $req->password,
            'address' => $req->address,
            'phone' => $req->phone,
            'city' => $req->city,
            'country' => $req->country,
            'user_type' => 'customer'
            ]);

        $user = DB::table('users')
        ->where('u_username', $username)
        ->update([
            'u_username' => $req->name,
            'u_email' => $req->email,
            'u_password' => $req->password,
            'u_type' => 'customer'
            ]);

        return redirect('/abc.com');

    }

    public function admin_home(){
        return view('Admin.index');
        // return view('Customer.index', ['users' => $users]);
    }
    public function customer_list(){
        $customer = Customer::all();
        return view('Admin.customer_list', ['users' => $customer]);
    }
    public function delete_customer($id){
        $data = Customer::find($id);
        $data->delete();
        return redirect('/customer_list');
    }
}
