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
        $this->middleware('guest');
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
            'name' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:150',
            'user_name' => 'required|string|max:200',
            'user_tipo' => 'required|Integer|max:200',
            'email' => 'required|string|email|max:255|unique:users',
            'telefone' =>  'required|Integer|digits:11',
            'cpf' => 'required|integer|cpf|digits:11',
            'password' => 'required', 'string', 'min:8', 'confirmed',
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
        
        return User::create([
            'name' => $data['name'],
            'sobrenome'=>$data['sobrenome'],
            'user_name'=>$data['user_name'],
            'user_tipo' => $data['user_tipo'],
            'email' => $data['email'],
            'telefone' =>$data['telefone'],
            'cpf' =>$data['cpf'],
            'password' => Hash::make($data['password']),
            
        ]);
    }
}
