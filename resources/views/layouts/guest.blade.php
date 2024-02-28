<!DOCTYPE html>

<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
  data-sidebar-image="none" data-preloader="disable">

<head>

  <meta charset="utf-8" />
  <title>{{ config('app.name', 'Sign In | - Admin Dashboard') }}</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Consultancy" name="description" />
  <meta content="csrf-token" name="{{ csrf_token() }}" />
  <meta content="Themesbrand" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- Layout config Js -->
  <script src="assets/js/layout.js"></script>
  <!-- Bootstrap Css -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
  <!-- custom Css-->
  <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

  <!-- auth-page wrapper -->
  <div class="auth-page-wrapper auth-bg-cover d-flex justify-content-center align-items-center min-vh-100 py-5">
    <div class="bg-overlay"></div>
    <!-- auth-page content -->

    {{ $slot }}

    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <p class="mb-0">&copy;
                <script>
                  document.write(new Date().getFullYear())
                </script>Education Consultancy<i class="mdi mdi-heart text-danger"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end Footer -->
  </div>
  <!-- end auth-page-wrapper -->

  <!-- JAVASCRIPT -->
  <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/simplebar/simplebar.min.js"></script>
  <script src="assets/libs/node-waves/waves.min.js"></script>
  <script src="assets/libs/feather-icons/feather.min.js"></script>
  <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
  <script src="assets/js/plugins.js"></script>

  <!-- password-addon init -->
  <script src="assets/js/pages/password-addon.init.js"></script>
</body>

</html>
