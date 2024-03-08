<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
  data-sidebar-image="none" data-preloader="disable">

<head>

  <meta charset="utf-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Education Consultancy" name="description" />
  <meta content="Themesbrand" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

  <!-- Layout config Js -->
  <script src="{{ asset('assets/js/layout.js') }}"></script>
  <!-- Bootstrap Css -->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- Toastr Css -->
  <link href="{{ asset('assets/css/toastr.css') }}" rel="stylesheet" type="text/css" />

  <!-- Nepali DatePicker Css -->
  <link href="{{ asset('assets/css/nepaliDatePicker.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- Filepond css -->
  <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
  <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
    rel="stylesheet" />

  <!-- App Css-->
  <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- Icons Css -->
  <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- custom Css-->
  <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

  <!-- Begin page -->
  <div id="layout-wrapper">

    @include('layouts.partials.header')

    <!-- removeNotificationModal -->
    @include('layouts.partials.notification-modal')
    <!-- /.modal -->
    <!-- ========== App Menu ========== -->
    @include('layouts.partials.sidebar')
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

      {{ $slot }}

      <!-- End Page-content -->

      @include('layouts.partials.footer')

    </div>
    <!-- end main content-->

  </div>
  <!-- END layout-wrapper -->



  <!--start back-to-top-->
  <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
  </button>
  <!--end back-to-top-->

  <!--preloader-->
  @include('layouts.partials.preloader')

  <div class="customizer-setting d-none d-md-block">
    <div class="btn-info rounded-pill btn btn-icon btn-lg p-2 shadow-lg" data-bs-toggle="offcanvas"
      data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
      <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
    </div>
  </div>

  <!-- Theme Settings -->

  @include('layouts.partials.theme-setting')

  <!-- JAVASCRIPT -->
  <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
  <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
  <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
  <script src="{{ asset('assets/js/plugins.js') }}"></script>
  <script src="{{ asset('assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/libs/toastr/toastr.min.js') }}"></script>
  <script src="{{ asset('assets/libs/nepalidatepicker/jquery.nepaliDatePicker.min.js') }}"></script>

  <!--apexcharts-->
  <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

  <!-- projects js -->
  <script src="{{ asset('assets/js/pages/dashboard-projects.init.js') }}"></script>

  <!-- filepond js -->
  <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
  <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

  <!-- App js -->
  <script src="{{ asset('assets/js/app.js') }}"></script>

  <!-- Custom js -->
  <script type="module" src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
