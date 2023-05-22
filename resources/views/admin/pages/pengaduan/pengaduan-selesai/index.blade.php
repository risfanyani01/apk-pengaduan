@extends('admin.layouts.main')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-check"></i>
            </span> Daftar Pengaduan Yang Sudah Diselesaikan
          </h3>
      </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body py-4">
                                <div class="mb-4">
                                    <a class="btn btn-sm btn-primary" href="{{route('pengaduan.index')}}">Kembali</a>
                                </div>
                                <table id="pengaduan" class="table table-bordered table-striped table-hover">
                                    <thead style="font-size: 14px;">
                                        <tr>
                                            <th class="text-center">No</th>                                          
                                            <th>NPA</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Jenis Permintaan</th>
                                            <th>Cabang</th>
                                            <th>Status</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody style="font-size:14px;">
                                         @php $no=1 @endphp
                                       @forelse ($data as $item)
                                            <tr>
                                                <td class="text-center">{{$no++}}</td>
                                                <td class="text-wrap">{{$item->npa}}</td>
                                                <td class="text-wrap">{{$item->nama}}</td>
                                                <td class="text-wrap">{{$item->alamat}}</td>
                                                <td class="text-wrap">{{$item->kategori->nama_jenis}}</td>                                       
                                                <td class="text-wrap">{{$item->cabang->nama_cabang}}</td>
                                                @if ($item->keterangan == 'selesai')
                                                <td><span class="bg-info rounded-5 px-2 py-1 text-light"><strong>{{$item->keterangan}}</strong></span></td>
                                                @endif   
                                                <td>
                                                    <a href="{{route('pengaduan.detail',$item->id)}}" class="btn btn-sm btn-info"><i class="mdi mdi-eye"></i></a></td>                                         
                                            </tr>
                                       @empty
                                           <tr>
                                            <td colspan="8" class="text-center">
                                                Data Tidak Ada
                                            </td>
                                           </tr>
                                       @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection