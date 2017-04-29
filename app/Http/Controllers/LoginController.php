<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Validator;
use Hash;
class LoginController extends Controller
{
  public function index()
 {
     return view('login');
 }
 public function userprofile()
 {
    return view('userprofile');
 }

 public function login()
 {
     $loginWasSuccessful = Auth::attempt([
         'email' => request('email'),
         'password' => request('password'),
     ]);

     if ($loginWasSuccessful) {
         return redirect('/')
         ->with('loginSuccess', 'Welcome');
     } else {
         return redirect('/login')
         ->with('loginError', 'Invalid Credentials.');
     }
 }

public function update(Request $request){
  $validator = Validator::make($request->all(),[
    'currentpassword' => 'required',
    'newpassword' => 'required'

]);
if($validator->passes()){
  $userID = Auth::user()->id;
  $currentpw = Auth::user()->password;

  if(Hash::check(request('currentpassword'), $currentpw)){

  $user = Auth::user();
  $user->id = $userID;
  $user->password= Hash::make(request('newpassword'));
  $user->save();

  return redirect()->back()
  ->with('successStatus','Password successfully changed!');
}
else{
  return redirect()->back()
  ->with('failedStatus','Please enter the correct current password');
}
}else{
  return redirect()->back()
  ->withInput()
  ->withErrors($validator);
}

}



public function logout()
   {
       Auth::logout();
       return redirect('/');
   }









}
