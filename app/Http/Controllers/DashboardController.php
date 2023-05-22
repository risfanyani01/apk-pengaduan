<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index(){
        $dataPengaduan = Pengaduan::count();
        $pengaduanPending = Pengaduan::where('keterangan', 'pending')->count();
        $pengaduanProses = Pengaduan::where('keterangan', 'proses')->count();
        $pengaduanSelesai = Pengaduan::where('keterangan', 'selesai')->count();
        return view('admin.dashboard', compact('dataPengaduan', 'pengaduanPending', 'pengaduanProses', 'pengaduanSelesai'));
    }
 
}
