<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('Login.index');
    }

    public function verify(Request $req){
        $rules = [
            'username' => 'required|max:49',
            'password' => 'required|min:5|max:20|alpha_num'];
            $this->validate($req, $rules);

        $users = DB::table('users')->where('u_username', $req->username)
                    ->where('u_password', $req->password)
                    ->get();


        if(count($users) > 0){

            $req->session()->put('username', $req->username);

                return redirect('/abc.com');
        }
        else{
            $req->session()->flash('msg', 'invalide user..!');
            return redirect('/login');
        }

    }

}
