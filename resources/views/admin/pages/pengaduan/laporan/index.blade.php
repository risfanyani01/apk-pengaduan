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
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{url('pengaduan/cetak')}}" class="btn btn-md btn-danger" >Export Pdf</a>
                                    </div>
                                </div>

                                <table id="pengaduan" class="table table-bordered table-striped table-hover">
                                    <thead style="font-size: 14px;background-color:#0081C9;color:#ffff">
                                        <tr>
                                            <th class="text-center">No</th>                                          
                                            <th>NPA</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Jenis Permintaan</th>
                                            <th>Cabang</th>
                                            <th>Status</th>
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
                                            <td class="text-wrap">{{$data->keterangan}}</td>
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