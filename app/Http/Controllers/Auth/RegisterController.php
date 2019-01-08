<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('guest', ['only' => 'showRegistrationForm']);
     }

     public function showRegistrationForm(){
         return view('Auth.register');
     }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
          'email' => 'required|string|email|max:255|unique:usuario,email',
          'rut' => 'required|string|min:9|max:12|unique:usuario,rut_usuario',
          'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $User = User::create([
          'nom_usuario' => $data['nombre'],
          'apellido_paterno' => $data['apellido_paterno'],
          'apellido_materno' => $data['apellido_materno'],
          'rut_usuario' => $data['rut'],
          'email' => $data['email'],
          'password' => Hash::make($data['password']),
          'estado' => '0',
      ]);

      return $User;

    }
}
