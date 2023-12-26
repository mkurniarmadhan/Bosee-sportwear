<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>Dashboard -</title>

    <!-- Favicons -->
    <link href="{{ asset('admin/assets') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('admin/assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin/assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('admin/assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('admin/assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('admin/assets') }}/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('admin/assets') }}/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('admin/assets') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
    {{-- <link href="{{ asset('admin/assets') }}/vendor/simple-datatables/style.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />


    <!-- Template Main CSS File -->
    <link href="{{ asset('admin/assets') }}/css/style.css" rel="stylesheet">

    <!-- =======================================================

  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">

                <span class="d-none d-lg-block">BOSEE </span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->


        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->


                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">

                        <span class="d-none d-md-block dropdown-toggle ps-2">ADMIN</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>ADMINISTRATOR</h6>

                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Keluar</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link " href="{{ route('dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nv" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Menu </span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content {{ Route::is('produk', 'order') ? 'collapse' : '' }} "
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('produk.index') }}">
                            <i class="bi bi-circle"></i><span>Data Produk</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('order.index') }}">
                            <i class="bi bi-circle"></i><span>Data Order</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Forms Nav -->

        </ul>

    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">

        {{ $slot }}

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>BOSEE</span></strong>. All Rights Reserved
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/assets/') }}/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('admin/assets/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin/assets/') }}/vendor/chart.js/chart.umd.js"></script>
    <script src="{{ asset('admin/assets/') }}/vendor/echarts/echarts.min.js"></script>
    {{-- <script src="{{ asset('admin/assets/') }}/vendor/simple-datatables/simple-datatables.js"></script> --}}
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <script src="{{ asset('admin/assets/') }}/vendor/quill/quill.min.js"></script>
    <script src="{{ asset('admin/assets/') }}/vendor/tinymce/tinymce.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('admin/assets/') }}/js/main.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</body>

</html>
