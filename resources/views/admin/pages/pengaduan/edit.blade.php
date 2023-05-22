@extends('admin.layouts.main')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-pencil"></i>
        </span>Ubah Data Pengaduan
      </h3>
    </div>

<div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <form class="row g-3" action="{{route('pengaduan.update', $data->id)}}" method="POST">
          @csrf
          @method('PUT')

          <div class="col-12">
            <label for="cabang_id" class="form-label">Cabang</label>
            <select class="form-select @error('cabang_id') is-invalid @enderror" name="cabang_id" class="form-control">
                <option selected value="{{$data->cabang_id}}">{{$data->cabang->nama_cabang}}</option>
                @foreach ($cabang as $item)
                        <option value="{{ $item->cabang_id }}">{{ $item->nama_cabang }}</option>
                @endforeach
            </select>

            @error('cabang_id')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>


          <div class="col-12">
            <label for="kategori_id" class="form-label">Jenis Pekerjaan</label>
            <select class="form-select form-control @error('kategori_id') is-invalid @enderror" name="kategori_id">
                <option selected value="{{$data->kategori_id}}">{{$data->kategori->nama_jenis}}</option>
                @foreach ($kategori as $item)
                  <option value="{{ $item->id }}">{{ $item->nama_jenis }}</option>
                @endforeach
             </select>
            
            @error('kategori_id')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="col-12">
            <label for="npa" class="form-label">NPA</label>
            <input type="text" name="npa" class="form-control @error('npa') is-invalid @enderror" value="{{$data->npa}}">
            
            @error('npa')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="col-12">
            <label for="nama" class="form-label">nama</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{$data->nama}}">
            
            @error('nama')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-12">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" rows="10" class="form-control">{{$data->alamat}}</textarea>
            
            @error('alamat')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-12">
            <label for="gambar" class="form-label"><strong>Foto</strong></label>
            <input type="file" class="form-control" name="gambar" value="{{$data->gambar}}">
            
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