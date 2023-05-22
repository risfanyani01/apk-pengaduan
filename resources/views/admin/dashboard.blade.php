@extends('admin.layouts.main')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> Dashboard
      </h3>
      <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
          </li>
        </ul>
      </nav>
    </div>

    <div class="container mb-4 rounded px-4">
      <div class="row bg-white py-5 text-center d-flex justify-content-center">
        <img class="mb-4" src="{{asset('assets/images/logo.png')}}" alt="logo" style="width:240px">
        <h5>Selamat Datang Di Sistem Informasi Penerbitan Surat Perintah Kerja Perbaikan (SPKP) </h5>
        <h2 class="font-weight-bold" style="color:#008fd3">PDAM TIRTANADI SUMATERA UTARA</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-primary card-img-holder text-white">
          <div class="card-body">
            <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Total Data Pengaduan
            </h4>
            <h2 class="mb-5">{{$dataPengaduan}}</h2>
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-warning card-img-holder text-white">
            <a href="{{route('pengaduan.index')}}" style="text-decoration:none; color:#fff">
              <div class="card-body">
                <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Pengaduan Pending
                </h4>
                <h2 class="mb-5">{{$pengaduanPending}}</h2>
              </div>
            </a>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
            <a href="{{route('pengaduan.proses')}}" style="text-decoration:none; color:#fff">
              <div class="card-body">
                <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Pengaduan Diproses
                </h4>
                <h2 class="mb-5">{{$pengaduanProses}}</h2>
              </div>
            </a>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
            <a href="{{route('pengaduan.selesai')}}" style="text-decoration:none; color:#fff">
              <div class="card-body">
                <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Pengaduan Selesai
                </h4>
                <h2 class="mb-5">{{($pengaduanSelesai)}}</h2>
              </div>
            </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection