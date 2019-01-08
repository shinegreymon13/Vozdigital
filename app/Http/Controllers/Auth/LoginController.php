<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Session;

class LoginController extends Controller
{
  public function __construct(){
    $this->middleware('guest', ['only' => 'showLoginForm']);
  }

  public function showLoginForm(){
    return view('Auth.login');
  }

  public function login(){

    $credentials = $this->validate(request(), [
      'email' => 'email|required|string',
      'password' => 'required|string'
    ]);

    if(Auth::attempt($credentials)){
      $estado = auth()->user()->estado;
      if($estado == 0){
        return redirect()->route('home');
      }else if($estado == 1){
        return redirect()->route('supervisor');
      }else if($estado == 2){
        return redirect()->route('admin');
      }
    }

    return back()->withErrors(['email' => trans('auth.failed')])
                 ->withInput(request(['email']));
  }

  public function logout(){
    Auth::logout();
    return redirect('/');
  }
}
