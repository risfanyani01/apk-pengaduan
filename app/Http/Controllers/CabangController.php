<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CabangController extends Controller
{
    // Menampilkan Data Cabang Dari Database
    public function index(){
        $datas = Cabang::all();
        return view('admin.pages.cabang.index', compact('datas'));
    }

    // Menampilkan Form Tambah Data Cabang
    public function create(){
        return view('admin.pages.cabang.create');
    }

    // Mebambahkan Data Cabang Kedalam Database
    public function store(Request $request){
        $validated = $request->validate([
            'nama_cabang' => 'required',
        ]);

        $data = new Cabang();
        $data->nama_cabang = $request->nama_cabang;
        $data->save();

        if($data){
            return redirect()->route('cabang.index');
        }
    }

    // Menampilkan Halaman Edit Sesuai Dengan ID
    public function edit($id){
        $data = Cabang::findOrFail($id);
        return view('admin.pages.cabang.edit', compact('data'));
    }

    // Melakukan Perubahan Data Pada Database
    public function update(Request $request, $id){
        $validated = $request->validate([
            'nama_cabang' => 'required',
        ]);

        $data = Cabang::findOrFail($id);
        $data->nama_cabang = $request->nama_cabang;
        $data->save();

        if($data){
            return redirect()->route('cabang.index');
        }
        
    }

    // Menghapus Data
    public function delete($id){
        $data = Cabang::findOrFail($id);
        $data->delete();

        return redirect()->route('cabang.index');
    }
}
