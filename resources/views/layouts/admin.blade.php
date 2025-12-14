<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Karang Taruna - Admin</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16"
          href="{{ asset('backend/adminmart-master/assets/images/favicon.png') }}">

    <!-- CSS Adminmart -->
    <link href="{{ asset('backend/adminmart-master/assets/libs/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/adminmart-master/dist/css/style.min.css') }}" rel="stylesheet">

    <!-- Feather icons sudah di dalam custom js -->
     
    <!-- <style>
    /* Warna tombol menu sidebar yang sedang aktif */
    .sidebar-link.active,
    .sidebar-link.selected {
        background: #09B8A7 !important; /*ganti warna sesuai keinginan */
        color: #ffffff !important;
        border-radius: 10px;
    }

    /* Warna icon saat sidebar aktif **/
    .sidebar-link.active i,
    .sidebar-link.selected i {
        color: #ffffff !important;
    }

    / Hover efek /
    .sidebar-item:hover .sidebar-link:not(.active) {
        background: #09B8A7; /* efek hover lembut */
        border-radius: 10px;
        color: #09B8A7;
    }

    /* Warna icon saat hover */
    .sidebar-item:hover .sidebar-link:not(.active) i {
        color: #09B8A7;
    }
</style>-->

</head>

<body>
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>

<div id="main-wrapper" data-theme="light" data-layout="vertical"
     data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed"
     data-boxed-layout="full">

    <!-- TOPBAR -->
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md">
            <div class="navbar-header" data-logobg="skin6">
                <a class="nav-toggler d-block d-md-none" href="javascript:void(0)">
                    <i class="ti-menu ti-close"></i>
                </a>
                <div class="navbar-brand">
                    <a href="{{ route('admin.beranda') }}">
                        <b class="54">
                            <img src="{{ asset('backend/adminmart-master/assets/images/54.png') }}"
                                 alt="logo" class="dark-logo"
                                 style="width: 45px; height: auto; object-fit: contain;" /><!--GANTI LOGO(gambar) UBAH TEKS 54.PNG DISINI YAWW-->
                        </b>
                        <span class="logo-text">
                            <span class="font-weight-bold" style="color: #6475E8;">E-KarTar</span><!--GANTI TEKS/WARNA DISINI YAWW-->

                    </a>
                </div>
                <a class="topbartoggler d-block d-md-none" href="javascript:void(0)"
                   data-toggle="collapse" data-target="#navbarSupportedContent"
                   aria-controls="navbarSupportedContent" aria-expanded="false"
                   aria-label="Toggle navigation">
                    <i class="ti-more"></i>
                </a>
            </div>

            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                    <li class="nav-item d-none d-md-block">
                        <span class="nav-link">Dashboard E-KarTar</span>
                    </li>
                </ul>
                <ul class="navbar-nav float-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('backend/adminmart-master/assets/images/users/juju.jpg') }}"
                                 alt="user" class="rounded-circle" width="40"><!--GANTI LOGO(gambar) UBAH TEKS juju.jpg DISINI YAWW-->
                            <span class="ml-2 d-none d-lg-inline-block">
                                <span class="text-dark">{{ Auth::user()->name ?? 'Admin' }}</span>
                                <i data-feather="chevron-down" class="svg-icon"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd">
                            <!--<a class="dropdown-item" href="javascript:void(0)">
                                <i data-feather="user" class="svg-icon mr-2 ml-1"></i> Profil GANTI TEKS/ICON DISINI YAWW
                            </a>-->
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">
                                    <i data-feather="power" class="svg-icon mr-2 ml-1"></i> Logout
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END TOPBAR -->

    <!-- SIDEBAR -->
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <div class="scroll-sidebar">
            <nav class="sidebar-nav">
                <ul id="sidebarnav">

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.beranda') }}">
                            <i data-feather="home" class="feather-icon"></i><!--GANTI TEKS/ICON DISINI YAWW-->
                            <span class="hide-menu">Beranda</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.anggota.index') }}">
                            <i data-feather="users" class="feather-icon"></i><!--GANTI TEKS/ICON DISINI YAWW-->
                            <span class="hide-menu">Anggota</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.kegiatan.index') }}">
                            <i data-feather="calendar" class="feather-icon"></i><!--GANTI TEKS/ICON DISINI YAWW-->
                            <span class="hide-menu">Kegiatan</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.keuangan.index') }}">
                            <i data-feather="dollar-sign" class="feather-icon"></i><!--GANTI TEKS/ICON DISINI YAWW-->
                            <span class="hide-menu">Keuangan</span>
                        </a>
                    </li>

                    <!-- <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.laporan.index') }}">
                            <i data-feather="file-text" class="feather-icon"></i>
                            <span class="hide-menu">Laporan</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.berita.index') }}">
                            <i data-feather="message-square" class="feather-icon"></i>
                            <span class="hide-menu">Berita</span>
                        </a>
                    </li> -->

                </ul>
            </nav>
        </div>
    </aside>
    <!-- END SIDEBAR -->

    <!-- PAGE WRAPPER -->
    <div class="page-wrapper">
        <div class="container-fluid pt-4">
            @yield('content')
        </div>
        <footer class="footer text-center text-muted">
            &copy; {{ date('Y') }} Karang Taruna
        </footer>
    </div>
    <!-- END PAGE WRAPPER -->

</div>

<script src="{{ asset('backend/adminmart-master/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('backend/adminmart-master/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('backend/adminmart-master/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/adminmart-master/dist/js/app-style-switcher.js') }}"></script>
<script src="{{ asset('backend/adminmart-master/dist/js/feather.min.js') }}"></script>
<script src="{{ asset('backend/adminmart-master/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('backend/adminmart-master/dist/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('backend/adminmart-master/dist/js/custom.min.js') }}"></script>

<script>
    $(".preloader").fadeOut();
</script>
</body>
</html>
