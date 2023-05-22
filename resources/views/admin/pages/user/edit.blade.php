@extends('admin.layouts.main')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">

      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-pencil"></i>
        </span>Ubah Akun
      </h3>

    </div>

<div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <form class="row g-3" action="{{route('user.update', $data->id)}}" method="POST">
          @csrf
          @method('PUT')
          <div class="col-12" hidden>
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$data->email}}">
            
            @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-12" hidden>
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$data->name}}">
            
            @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-12">
            <label for="role" class="form-label"><strong>Role</strong></label>
            @php
                $role = ['petugas', 'admin'];
            @endphp
            <select class="form-select form-control" name="role">
                <option selected>{{$data->role}}</option>
                  @foreach ($role as $r)
                  <option value="{{ $r }}">{{ $r }}</option>
                @endforeach
             </select>
            
            @error('role')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          
          
          <div class="text-left">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <a href="{{route('user.index')}}" type="reset" class="btn btn-md btn-secondary">Cancel</a>
          </div>
        </form>

      </div>
    </div>

  </div>
  </div>
  </div>
  </div>
@endsection