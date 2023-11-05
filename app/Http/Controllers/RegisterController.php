<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function register(){
       return view('register.index');
   }

   public function store(Request $request){
       $request->validate([
           'name' => 'required',
           'email' => 'required|unique:users,email',
           'password' => 'required|min:5',
       ]);

       $user = User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => bcrypt($request->password),

       ]);

       return redirect('login')->with('success', 'Register Berhasil');
   }
}
