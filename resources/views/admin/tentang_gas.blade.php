@extends('layouts.main')
@section('title', 'Beranda')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Data Tentang Gas</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin/tentang-gas') }}">Data Tentang Gas</a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#tambah">
                            <i class="fas fa-user-plus mr-1"></i>Tambah
                        </button>
                        <table id="example1" class="table table-bordered table-striped mt-2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $nomer = 1;
                                @endphp
                                @foreach ($tentang as $row)
                                <tr>
                                    <td>{{ $nomer++ }}</td>
                                    <td>{{ $row->kategori }}</td>
                                    <td>{{ $row->deskripsi }}</td>
                                    <td>{{ $row->gambar }}</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#edit-{{ $row->id }}">
                                            <i class="fas fa-edit mr-1"></i>Edit
                                        </button>
                                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete-{{ $row->id }}">
                                            <i class="fas fa-trash mr-1"></i>Hapus
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        {{-- @include('sweetalert::alert') --}}
    </div>
</section>
@endsection
<div class="modal fade" id="tambah">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form class="form-horizontal" action="{{ url('add-tentang') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="name" class="form-label">Kategori</label>
                                {{-- <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}"> --}}
                                <select name="kategori" id="kategori" class="form-control">
                                    <option value="Toko">Toko</option>
                                    <option value="Pengantar">Pengantar</option>
                                    <option value="Pembeli">Pembeli</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi"  class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="gambar" name="gambar" value="{{ old('gambar') }}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{-- @foreach ($kendaraan as $row)
<div class="modal fade" id="edit-{{ $row->id }}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form class="form-horizontal" action="{{ url('edit-driver') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name" class="form-label">Nama Kendaraan</label>
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ $row->id }}">
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ $row->nama }}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach --}}
{{-- @foreach ($kendaraan as $row)
<div class="modal fade" id="delete-{{$row->id}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Yakin Data Dihapus ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
            <form action="{{url('admin/'.$row->id)}}" method="post" class="d-inline">
                @method('delete')
				@csrf
            <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endforeach --}}
