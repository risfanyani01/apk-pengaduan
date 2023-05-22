@extends('admin.layouts.main')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-account"></i>
            </span> Akun
          </h3>
      </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                </div>
                                <table class="table table-responsive table-bordered table-striped" style="font-size: 14px">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">No</th>
                                        <th scope="col">Email</th>
                                        <th class="text-center" scope="col">Nama</th>
                                        <th class="text-center" scope="col">Role</th>
                                        <th class="text-center" scope="col">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @php
                                            $no = 1; 
                                        @endphp
                                        @forelse ($data as $item)
                                        <tr>
                                            <td class="text-center">{{$no++}}</td>
                                            <td>{{$item->email}}</td>
                                            <td class="text-center">{{$item->name}}</td>
                                            @if ($item->role == 'admin')
                                                <td class="bg-primary text-white text-center text-uppercase">{{$item->role}}</td>
                                            @else
                                                <td class="bg-warning text-white text-center text-uppercase">{{$item->role}}</td>
                                            @endif
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('user.delete',$item->id)}}" method="POST">
                                                <a href="{{route('user.edit',$item->id)}}" class="btn btn-sm btn-success fa fa-edit"><i class="mdi mdi-pencil"></i></a>
                                                </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="mdi mdi-delete"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                         <td colspan="3" class="text-center">
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