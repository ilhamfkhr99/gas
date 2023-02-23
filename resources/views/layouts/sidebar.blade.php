<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Surat Permohonan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('lte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                {{-- @php
                    $unit    = App\Models\Unit::select('id', 'unit')->where('id', Auth::user()->id_unit)->first();
                    $level   = App\Models\Level::select('id', 'level')->where('id', Auth::user()->id_level)->first();
                    $jabatan = App\Models\Jabatan::select('id', 'nama_jabatan')->where('id', Auth::user()->id_jabatan)->first();
                @endphp --}}
                    {{-- @if (Auth::user()->id_level == 2)
                    <a href="#" class="d-block">{{ Auth::user()->nama }} - {{ $level->level }}</a>
                    @elseif (Auth::user()->id_level == 4)
                        <a href="#" class="d-block">{{ Auth::user()->nama }} - {{ $jabatan->nama_jabatan }}</a>
                    @elseif (Auth::user()->id_level == 3)
                        <a href="#" class="d-block">{{ Auth::user()->nama }} - {{ $jabatan->nama_jabatan }}</a>
                    @elseif (Auth::user()->id_level == 5)
                        <a href="#" class="d-block">{{ Auth::user()->nama }} - {{ $level->level }}</a>
                    @else
                    <a href="#" class="d-block">{{ Auth::user()->nama }} - {{ $level->level }}</a>
                    <a href="#" class="d-block">{{ $jabatan->nama_jabatan }} {{ $unit->unit }}</a>
                    @endif --}}
                    <a href="#" class="d-block">{{ Auth::user()->name }} - {{ Auth::user()->level }}</a>
            </div>
        </div>

      <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    @if (Auth::check())
                        @if (Auth::user()->level == 'Admin')
                            <a href="{{ url('beranda') }}" class="nav-link {{ Request::is('beranda') ? 'active':'' }}">
                        @endif
                    @endif
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Beranda
                    </p>
                    </a>
                </li>
                @if (Auth::check())
                    @if (Auth::user()->level == 'Admin')
                    <li class="nav-item">
                        <a href="{{ url('data-beranda') }}" class="nav-link {{ Request::is('data-beranda') ? 'active':'' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Beranda
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('tentang-gas') }}" class="nav-link {{ Request::is('tentang-gas') ? 'active':'' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Tentang Gas
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/driver') }}" class="nav-link {{ Request::is('admin/driver') ? 'active':'' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Driver
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/unit') }}" class="nav-link {{ Request::is('admin/unit') ? 'active':'' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Unit
                        </p>
                        </a>
                    </li>
                    @endif
                @endif
                {{-- @php
                    $surat = App\Models\Surat::select('id')->first();
                @endphp --}}
                {{-- @if (Auth::user()->id_level != 5)
                <li class="nav-item {{ Request::is('pemohon/mengajukan') ? 'menu-open':'' }} || {{ Request::is('pemohon/jawaban-surat') ? 'menu-open':'' }}
                    || {{ Request::is('kabag/surat-masuk') ? 'menu-open':'' }} || {{ Request::is('kabag/surat-proses') ? 'menu-open':'' }} || {{ Request::is('kabag/jawaban-tu') ? 'menu-open':'' }}
                    || {{ Request::is('kabag/jawaban-direktur') ? 'menu-open':'' }} || {{ Request::is('kabag/konsep-tu/.$surat->id') ? 'menu-open':'' }}
                    || {{ Request::is('tu/surat-masuk') ? 'menu-open':'' }} || {{ Request::is('tu/surat-proses') ? 'menu-open':'' }} || {{ Request::is('tu/jawaban-kabag') ? 'menu-open':'' }}
                    || {{ Request::is('tu/jawaban-direktur') ? 'menu-open':'' }} || {{ Request::is('tu/konsep-direktur/'.$surat->id) ? 'menu-open':'' }}
                    || {{ Request::is('tu/konsep-kabag/.$surat->id') ? 'menu-open':'' }} || {{ Request::is('tu/surat-acc') ? 'menu-open':'' }}
                    || {{ Request::is('tu/detail-surat/.$surat->id') ? 'menu-open':'' }} || {{ Request::is('tu/surat-keluar') ? 'menu-open':'' }}
                    || {{ Request::is('direktur/surat-masuk') ? 'menu-open':'' }} || {{ Request::is('direktur/surat-proses') ? 'menu-open':'' }} || {{ Request::is('direktur/jawaban-tu') ? 'menu-open':'' }}
                    || {{ Request::is('direktur/surat-acc') ? 'menu-open':'' }} || {{ Request::is('direktur/detail-surat/.$surat->id') ? 'menu-open':'' }}" >
                    <a href="javascript:void(0);" class="nav-link {{ Request::is('pemohon/mengajukan') ? 'active':'' }} || {{ Request::is('pemohon/jawaban-surat') ? 'active':'' }}
                    || {{ Request::is('kabag/surat-masuk') ? 'active':'' }} || {{ Request::is('kabag/surat-proses') ? 'active':'' }} || {{ Request::is('kabag/jawaban-tu') ? 'active':'' }}
                    || {{ Request::is('kabag/jawaban-direktur') ? 'active':'' }} || {{ Request::is('kabag/konsep-tu/.$surat->id') ? 'active':'' }}
                    || {{ Request::is('tu/surat-masuk') ? 'active':'' }} || {{ Request::is('tu/surat-proses') ? 'active':'' }} || {{ Request::is('tu/jawaban-kabag') ? 'active':'' }}
                    || {{ Request::is('tu/jawaban-direktur') ? 'active':'' }} || {{ Request::is('tu/konsep-direktur/'.$surat->id) ? 'active':'' }}
                    || {{ Request::is('tu/konsep-kabag/.$surat->id') ? 'active':'' }} || {{ Request::is('tu/surat-acc') ? 'active':'' }}
                    || {{ Request::is('tu/detail-surat/.$surat->id') ? 'active':'' }} || {{ Request::is('tu/surat-keluar') ? 'active':'' }}
                    || {{ Request::is('direktur/surat-masuk') ? 'active':'' }} || {{ Request::is('direktur/surat-proses') ? 'active':'' }} || {{ Request::is('direktur/jawaban-tu') ? 'active':'' }}
                    || {{ Request::is('direktur/surat-acc') ? 'active':'' }} || {{ Request::is('direktur/detail-surat/.$surat->id') ? 'active':'' }}">
                        <i class="fas fa-inbox mr-2"></i>
                        <p>
                            Surat Permohonan<i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    @if (Auth::check())
                        @if (Auth::user()->id_level == 1)
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('pemohon/mengajukan') }}" class="nav-link {{ Request::is('pemohon/mengajukan') ? 'active':'' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Mengajukan Surat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('pemohon/jawaban-surat') }}" class="nav-link {{ Request::is('pemohon/jawaban-surat') ? 'active':'' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Jawaban Surat</p>
                                    </a>
                                </li>
                            </ul>
                        @endif
                        @if (Auth::user()->id_level == 4)
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('kabag/surat-masuk') }}" class="nav-link {{ Request::is('kabag/surat-masuk') ? 'active':'' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Surat Masuk</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('kabag/surat-proses') }}" class="nav-link {{ Request::is('kabag/surat-proses') ? 'active':'' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Surat Proses</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('kabag/jawaban-tu') }}" class="nav-link {{ Request::is('kabag/jawaban-tu') ? 'active':'' }}
                                                                                || {{ Request::is('kabag/konsep-tu/.$surat->id') ? 'active':'' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Jawaban TU</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('kabag/jawaban-direktur') }}" class="nav-link {{ Request::is('kabag/jawaban-direktur') ? 'active':'' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Surat ACC</p>
                                    </a>
                                </li>
                            </ul>
                        @endif
                        @if (Auth::user()->id_level == 3)
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('tu/surat-masuk') }}" class="nav-link {{ Request::is('tu/surat-masuk') ? 'active':'' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Surat Masuk</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('tu/surat-proses') }}" class="nav-link {{ Request::is('tu/surat-proses') ? 'active':'' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Surat Proses</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('tu/jawaban-kabag') }}" class="nav-link {{ Request::is('tu/jawaban-kabag') ? 'active':'' }}
                                                                                || {{ Request::is('tu/konsep-kabag/.$surat->id') ? 'active':'' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Jawaban Kabag</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('tu/jawaban-direktur') }}" class="nav-link {{ Request::is('tu/jawaban-direktur') ? 'active':'' }}
                                                                                    || {{ Request::is('tu/konsep-direktur/'.$surat->id) ? 'active':'' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Jawaban Direktur</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('tu/surat-acc') }}" class="nav-link {{ Request::is('tu/surat-acc') ? 'active':'' }}
                                                                                    || {{ Request::is('tu/detail-surat/.$surat->id') ? 'active':'' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Surat ACC</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('tu/surat-keluar') }}" class="nav-link {{ Request::is('tu/surat-keluar') ? 'active':'' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Surat Keluar</p>
                                    </a>
                                </li>
                            </ul>
                        @endif
                        @if (Auth::user()->id_level == 2)
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('direktur/surat-masuk') }}" class="nav-link {{ Request::is('direktur/surat-masuk') ? 'active':'' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Surat Masuk</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('direktur/surat-proses') }}" class="nav-link {{ Request::is('direktur/surat-proses') ? 'active':'' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Surat Proses</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('direktur/jawaban-tu') }}" class="nav-link {{ Request::is('direktur/jawaban-tu') ? 'active':'' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Jawaban TU</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('direktur/surat-acc') }}" class="nav-link {{ Request::is('direktur/surat-acc') ? 'active':'' }}
                                                                                            || {{ Request::is('direktur/detail-surat/.$surat->id') ? 'active':'' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Surat ACC</p>
                                    </a>
                                </li>
                            </ul>
                        @endif
                    @endif
                </li>
                @endif --}}
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="fas fa-lock mr-1"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
