<!DOCTYPE html>
<html>
@include('admin.layouts.rc_admin.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('admin.layouts.rc_admin.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.layouts.rc_admin.aside_left')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @yield('content')

    </div>
    <!-- /.content-wrapper -->
    @include('admin.layouts.rc_admin.footer')

    <!-- Control Sidebar -->
    @include('admin.layouts.rc_admin.aside_rghit')
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
    @include('admin.layouts.rc_admin.js_src')
</body>
</html>