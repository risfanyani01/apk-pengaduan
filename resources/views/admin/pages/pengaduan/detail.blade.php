@extends('admin.layouts.main')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-clipboard"></i>
        </span> Detail Pengaduan
      </h3>
    </div>

    <div class="container">

    <section class="section profile">
      <div class="row">

        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              
              <ul class="nav nav-tabs nav-tabs-bordered flex justify-content-between">

                  <li class="nav-item d-flex">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-overview"><h4><strong>Detail Pengaduan</strong></h4></button>
                  </li>

                  <div class="d-flex flex-row">
                    @if ($data->keterangan == 'pending')
                    <div class="pe-2">
                      <p class="px-3 rounded py-2 bg-warning">Status : {{$data->keterangan}}</p>
                    </div>
                    @elseif($data->keterangan == 'proses')
                    <div class="pe-2">
                      <p class="px-3 rounded py-2 bg-info">Status : {{$data->keterangan}}</p>
                    </div>
                    @endif


                   @if (Auth::user()->role == 'admin')
                      @if ($data->keterangan == 'pending')
                        <div>
                          <a href="{{route('pengaduan.diproses',$data->id)}}" class="btn btn-md btn-info">Proses Pengaduan</a>
                        </div>
                      @elseif($data->keterangan == 'proses')
                        <div>
                          <a href="{{route('pengaduan.success',$data->id)}}" class="btn btn-md btn-success">Pengaduan Selesai</i></a>
                        </div>
                      @endif
                   @endif
                  </div>
                  
                  {{-- <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#proses-pengerjaan"><h4><strong>Proses Pengerjaan</strong></h4></button>
                </li>    --}}
                    
              </ul>
              <div class="tab-content pt-2">

                {{-- Detail Pengaduan --}}
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <div class="card p-4">
                       
                      <a href="{{ url('pengaduan/cetak', $data->id)}}" class="btn btn-sm btn-danger mb-4" style="width:140px">Cetak PDF</a>

                        <div class="d-flex">
                          <h2 class="card-title">Tanggal Pengaduan :</h2>
                          <p class="">&nbsp;{{$data->tanggal_pengaduan}}</p>
                        </div>

                        <div class="d-flex">
                          <h2 class="card-title">Nama :</h2>
                          <p class="">&nbsp;{{$data->nama}}</p>
                        </div>

                        <div class="d-flex">
                          <h2 class="card-title">Jenis Pengaduan :</h2>
                          <p>&nbsp;{{$data->kategori->nama_jenis}}</p>
                        </div>

                        <div class="d-flex">
                          <h2 class="card-title">alamat :</h2>
                          <p class="text-justify">&nbsp;{!!$data->alamat!!}</p>
                        </div>

                        
                        <div> 
                          <img src="{{asset('/gambar' .$data->gambar)}}" class="card-img-top">
                        </div>

                    </div>
                </div>
            </div>
          </div>

        </div>
      </div>
    </section>

</div>
</div>
</div>
</div>
</div>

@endsection