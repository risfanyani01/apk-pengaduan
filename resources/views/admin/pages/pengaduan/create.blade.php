@extends('admin.layouts.main')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-plus"></i>
        </span> Tambah Data Pengaduan
      </h3>
    </div>

<div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <form class="row g-3" action="{{route('pengaduan.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          
          <div class="col-12">
            <label for="cabang_id" class="form-label"><strong>Cabang</strong></label>
            <select class="form-select form-control @error('cabang_id') is-invalid @enderror" name="cabang_id">
              <option disabled selected>Cabang</option>
              @foreach ($cabang as $item)
              <option value="{{ $item->id }}">{{ $item->nama_cabang }}</option>
              @endforeach
            </select>
            
            @error('cabang_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="col-12">
            <label for="kategori_id" class="form-label"><strong>Jenis Permintaan</strong></label>
            <select class="form-select form-control" name="kategori_id">
                <option disabled selected>Pilih Jenis Permintaan</option>
                  @foreach ($kategori as $item)
                  <option value="{{ $item->id }}">{{ $item->nama_jenis }}</option>
                @endforeach
             </select>
            
            @error('kategori_id')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="col-12">
            <label for="npa" class="form-label"><strong>NPA</strong></label>
            <input type="text" name="npa" placeholder="NPA" class="form-control @error('npa') is-invalid @enderror">
            
            @error('npa')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-12">
            <label for="nama" class="form-label"><strong>Nama</strong></label>
            <input type="text" name="nama" placeholder="nama" class="form-control @error('nama') is-invalid @enderror">
            
            @error('nama')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-12">
            <label for="alamat" class="form-label"><strong>Alamat</strong></label>
            <textarea name="alamat" rows="10" class="form-control"></textarea>
            
            @error('alamat')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-12">
            <label for="gambar" class="form-label"><strong>Foto</strong></label>
            <input type="file" class="form-control" name="gambar" accept="images">
            
            @error('gambar')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="text-left">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <a href="{{route('pengaduan.index')}}" class="btn btn-md btn-secondary">Cancel</a>
          </div>
        </form>

      </div>
    </div>

  </div>
  </div>
  </div>
  </div>

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'penjelasan' );
</script>
@endsection