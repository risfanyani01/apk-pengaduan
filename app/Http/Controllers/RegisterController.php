<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index(){
        return view('admin.auth.register');
    }

    public function prosesregister(Request $request){
        Validator::make($request->all(), [
            'email' => 'required|unique:users',
            'name' => 'required',   
            'password' => 'required',
            ], [
                'email.unique' => 'Name Code Sudah Terdaftar',
                '*.required' => 'Field Harus Di Isi'
            ])->validate();    

        $defaultRole = 'petugas';
        
        $data = new User();
        $data->email = $request->email;
        $data->name = $request->name;
        $data->password = Hash::make($request->get('password'));
        $data->role = $defaultRole;
        $data->save();

        if($data){
            return redirect()->route('login');
        }
    }
}
