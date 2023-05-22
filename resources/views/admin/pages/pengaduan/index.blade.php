@extends('admin.layouts.main')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-bookmark"></i>
            </span> Data Pengaduan
          </h3>
      </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                @if (Auth::user()->role == 'petugas')
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{route('pengaduan.create')}}" class="btn btn-md btn-primary" >Tambah Data</a>
                                        <div>
                                            <a href="{{route('pengaduan.selesai')}}" class="btn btn-sm btn-info" >Selesai</a>
                                            <a href="{{route('pengaduan.proses')}}" class="btn btn-sm btn-warning" >Diproses</a>
                                        </div>
                                    </div>
                                </div>

                                @else
                                <div class="mb-4">
                                    <div>
                                        <a href="{{route('pengaduan.selesai')}}" class="btn btn-sm btn-info" >Selesai</a>
                                        <a href="{{route('pengaduan.proses')}}" class="btn btn-sm btn-warning" >Diproses</a>
                                    </div>
                                </div>
                                @endif
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
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody style="font-size:14px;">
                                         @php $no=1 @endphp
                                        @forelse ($datas as $data)
                                        <tr>
                                            <td class="text-center">{{$no++}}</td>
                                            <td class="text-wrap">{{$data->npa}}</td>
                                            <td class="text-wrap">{{$data->nama}}</td>
                                            <td class="text-wrap">{{$data->alamat}}</td>
                                            <td class="text-wrap">{{$data->kategori->nama_jenis}}</td>                                       
                                            <td class="text-wrap">{{$data->cabang->nama_cabang}}</td>
                                            @if ($data->keterangan == 'pending')
                                                <td class="text-center"><span class="bg-warning rounded-5 px-2 py-1"><strong>{{$data->keterangan}}</strong></span></td>
                                            @endif

                                            {{-- @if (Auth::user()->role == 'admin') --}}
                                            <td class="text-center">
                                                <form action="{{route('pengaduan.delete',$data->id)}}" method="post">
                                                    <a href="{{route('pengaduan.detail',$data->id)}}" class="btn btn-sm btn-info"><i class="mdi mdi-eye"></i></a>
                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{route('pengaduan.edit',$data->id)}}" class="btn btn-sm btn-warning fa fa-edit"><i class="mdi mdi-pencil"></i></a>
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin menghapus')"><i class="mdi mdi-delete"></i></button>
                                                </form>
                                            </td>
                                            {{-- @endif --}}
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