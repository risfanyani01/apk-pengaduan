<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(){
        $data = User::all();
        return view('admin.pages.user.index', compact('data'));
    }

    public function create(){
        return view('admin.pages.user.create');
    }

    public function store(Request $request){

        Validator::make($request->all(), [
            'email' => 'required|unique:users',
            'name' => 'required',   
            'password' => 'required',
            'role' => 'required',
            ], [
                'email.unique' => 'Name Code Sudah Terdaftar',
                '*.required' => 'Field Harus Di Isi'
            ])->validate();    

        $data = new User();
        $data->email = $request->email;
        $data->name = $request->name;
        $data->password = Hash::make($request->get('password'));
        $data->role = $request->role;
        $data->save();

        if($data){
            return redirect()->route('user.index');
        }
    }

    public function show($id){
        $data = User::findOrFail($id);
        return view('admin.pages.user.profile', compact('data'));
    }

    public function edit($id){
        $data = User::findOrFail($id);
        return view('admin.pages.user.edit', compact('data'));
    }

    public function update(Request $request, $id){

        $data = User::findOrFail($id);
        $data->email = $request->email;
        $data->name = $request->name;
        $data->password = Hash::make($request->get('password'));
        $data->role = $request->role;
        $data->save();

        if($data){
            return redirect()->route('user.index');
        }
        
    }

    public function delete($id){
        $data = User::findOrFail($id);
        $data->delete();

        return redirect()->route('user.index');
    }
}
