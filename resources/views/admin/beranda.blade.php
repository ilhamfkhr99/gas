@extends('layouts.main')
@section('title', 'beranda')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('beranda') }}">Dashboard</a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
{{-- <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
            <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                    <h3>Surat Masuk</h3>
                    <h5>{{ $surat->count() }}</h5>
                    </div>
                    <div class="icon">
                    <i class="ion ion-android-archive"></i>
                    </div>
                    <a href="{{ url('tu/surat-masuk') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                        <h3>Surat Proses</h3>
                        <h5>{{ $proses->count() }}</h5>
                        </div>
                        <div class="icon">
                        <i class="ion ion-load-d"></i>
                        </div>
                        <a href="{{ url('tu/surat-proses') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                        <h3>Surat ACC</h3>

                        <h5>{{ $acc->count() }}</h5>
                        </div>
                        <div class="icon">
                        <i class="ion ion-checkmark-round"></i>
                        </div>
                        <a href="{{ url('tu/surat-acc') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                        <h3>Surat Keluar</h3>
                        <h5>{{ $surat_keluar->count() }}</h5>
                        </div>
                        <div class="icon">
                        <i class="ion ion-share"></i>
                        </div>
                        <a href="{{ url('tu/surat-keluar') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
            </div>
            <!-- ./col -->
        </div>
      <!-- /.row -->
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section> --}}
@endsection
