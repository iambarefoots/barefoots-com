<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class AuthController extends Controller
{
    public function getLogin() {
        return view ('login');
    }
    
    public function getBiodata() {
        return view ('biodata');
    }

    public function postLogin(Request $request) {
       if(\Auth::attempt([
        'email'=>$request->email,
        'password'=>$request->password
    ])) {
        return redirect()->route('home');
    } else {
        return redirect()->route('index');
    }
    }

    public function getRegister() {
        return view('register');
    }
    public function postRegister(Request $request) {
        $this->validate($request,[
            'name'=>'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);
        User::create([
            'name'=> $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        Profile::create([
            'user_id'=> Auth::user()->id,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        return redirect()->route('index');
    }
    public function postHome() {
        $data['a'] = DB::table('profiles')->select('phone','address')->where('id',Auth::user()->id)->get();
        return view('home',$data);
    }
}
