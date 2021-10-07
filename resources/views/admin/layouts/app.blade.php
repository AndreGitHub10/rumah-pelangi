<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <!-- Datatable -->

    <!-- <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}"> -->

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style type="text/css">
      .select2-selection__rendered {
          line-height: 31px !important;
      }
      .select2-container .select2-selection--single {
          height: 43px !important;
      }
      .select2-selection__arrow {
          height: 34px !important;
      }
    </style>

    @yield('css')    

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">
        @include('admin.layouts.navbar')
        @include('admin.layouts.sidebar')
        <div class="content-wrapper" style="min-height: 303px;">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?php echo ucfirst($db_active); ?></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="#"><?php echo ucfirst($db_active); ?></a>
                                </li>
                                <!-- tambah if kondisi -->
                                <li class="breadcrumb-item active">
                                    <a><?php echo ucfirst($sub_db_active); ?></a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <!-- <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <!-- <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script> -->
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="{{ asset('js/demo.js') }}"></script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Script Data Tables -->
    @yield('js')

    <script type="text/javascript">
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });
    </script>
    @include('sweetalert::alert')
</body>
</html>
