<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Validator;

class SignUpController extends Controller
{
  public function index()
 {
     return view('signup');
 }

 public function signup(Request $request)
 {
   $validator = Validator::make($request->all(),
   ['email' => 'required',
   'name' => 'required',
   'password' => 'required|confirmed',
   'password_confirmation' => 'required'
 ]);

if($validator->passes()){
     $user = new User();
     $user->email = request('email');
     $user->password = Hash::make(request('password'));
     $user->name =request('name');
     $user->save();

     return redirect('/login')
     ->with('');
   }else{
     return redirect('/signup')
     ->withErrors($validator);
   }
 }
}
