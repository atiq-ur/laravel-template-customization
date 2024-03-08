<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    @include('backend.partials.styles')
    @yield('admin-styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed') }}">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
    </div>

    @include('backend.partials.nav')

    <!-- Main Sidebar Container -->
    @include('backend.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    @yield('page-content')
    <!-- /.content-wrapper -->

    @include('backend.partials.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('backend.partials.scripts')
@yield('admin-scripts')
</body>
</html>
