<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Prosespekerjaan;
use App\Models\Pengaduan;
use App\Models\Cabang;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Session\Session;
use PDF;

class PengaduanController extends Controller
{
    public function index(){
        $datas = Pengaduan::where('keterangan', 'pending')->get();
        return view('admin.pages.pengaduan.index', compact('datas'));
    }

    public function create(){
        $kategori = Kategori::all();
        $cabang = Cabang::all();
        return view('admin.pages.pengaduan.create', compact('kategori','cabang'));
    }

    public function store(Request $request){ 
             
        Validator::make($request->all(), [
        'kategori_id' => 'required',
        'npa' => 'required',
        'nama' => 'required',
        'alamat' => 'required',
        'cabang_id' => 'required',
        'gambar' => 'required',
        'gambar' => 'mimes:jpg,png,jpeg|max:5000',
        ], [
            'gambar.max' => 'Ukuran File Maksimal 5 MB',
            'gambar.mimes' => 'Tipe File Harus jpg / png / jpeg',
            '*.required' => 'Field Harus Di Isi'
        ])->validate();

        //upload image
        $image = $request->file('gambar');
        $image->storeAs('public/gambar', $image->hashName());

        $tanggalPengaduan = Carbon::now()->isoFormat('dddd, D MMMM Y');
        
        $data = new Pengaduan();
        $data->kategori_id = $request->kategori_id;
        $data->npa = $request->npa;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->cabang_id = $request->cabang_id;
        $data->gambar = $image->hashName();
        $data->tanggal_pengaduan = $tanggalPengaduan;
        $data->save();

        if($data){
            return redirect()->route('pengaduan.index');
        }
    }

    public function show($id){
        $data = Pengaduan::findOrFail($id);
        return view('admin.pages.pengaduan.detail', compact('data'));
    }

    public function edit($id){
        $kategori = Kategori::all();
        $cabang = Cabang::all();
        $data = Pengaduan::findOrFail($id);
        return view('admin.pages.pengaduan.edit', compact('kategori','data', 'cabang'));
    }

    public function update(Request $request, $id){

        $data = Pengaduan::findOrFail($id);

        if ($request->hasFile('gambar')) {
            
            // upload new image
            $image = $request->file('gambar');
            $image->storeAs('public/gambar', $image->hashName());
            
            // delete old image
            Storage::delete('public/gambar/'.$data->gambar);

            //update post with new image
            $data->update([ 
            'kategori_id' => $request->kategori_id,
            'npa' => $request->npa,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'gambar' => $image->hashName()
            ]);            

             if($data){
                 return redirect()->route('pengaduan.index');
             }
        } else{
             $data->kategori_id = $request->kategori_id;
             $data->npa = $request->npa;
             $data->nama = $request->nama;
             $data->alamat = $request->alamat;
             $data->save();
         }
         if($data){
             return redirect()->route('pengaduan.index');
         }
    }

    public function delete($id){
        $data = Pengaduan::findOrFail($id);
        //delete image
        Storage::delete('public/gambar/'. $data->gambar);
        $data->delete();

        return redirect()->route('pengaduan.index');
    }


    public function pengaduan_selesai(){
        $data = Pengaduan::where('keterangan', 'selesai')->get();
        return view('admin.pages.pengaduan.pengaduan-selesai.index', compact('data'));
    }

    public function pengaduan_proses(){
        $data = Pengaduan::where('keterangan', 'proses')->get();
        return view('admin.pages.pengaduan.pengaduan-proses.index', compact('data'));
    }

    public function proses($id){
        try{
            Pengaduan::where('id', $id)->update([
                'keterangan' => 'proses'
            ]);
            
            \Session::flash('proses', 'Pengaduan Diproses');
        }

        catch(\Exception $e){
            \Session::flash('gagal'.$e->getMessage());
        }

        return redirect()->route('pengaduan.proses');
    }

    public function done($id){
        try{
            Pengaduan::where('id', $id)->update([
                'keterangan' => 'selesai'
            ]);
            
            \Session::flash('selesai', 'Pengaduan Selesai');
        }

        catch(\Exception $e){
            \Session::flash('gagal'.$e->getMessage());
        }

        return redirect()->route('pengaduan.selesai');
    }

    public function laporan(){
        $datas = Pengaduan::all();
        return view('admin.pages.pengaduan.laporan.index', compact('datas'));
    }

    public function printDataAll(){
        $datas = Pengaduan::all();
        $pdf = PDF::loadview('admin.pages.pengaduan.laporan.cetak', compact('datas'))->setPaper('a4');
        return $pdf->stream('laporan-pengaduan.pdf');
    }

    public function printData($id){
        $data = Pengaduan::findOrFail($id);
        $pdf = PDF::loadview('admin.pages.pengaduan.cetak', compact('data'))->setPaper('a4');
        return $pdf->stream('laporan-pengaduan.pdf');
    }
       
}
