<!DOCTYPE html>
<html lang="en">

@include('admin/template/partials/head')
@include('sweetalert::alert')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin/template/partials/nav')
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
<<<<<<< HEAD
                <img src="{{ asset('assets/logo/smansaga.png') }}" alt="AdminLTE Logo" class="brand-image"
                    style="opacity: .8">
                <span class="brand-text font-weight">SIPUS SMANSAGA</span>
=======
                <img src="{{ asset('assets/logo/logo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">DIGILIB</span>
>>>>>>> 597f363cee2e3f8327955c0fd8a85b5afe9a9fc6
            </a>

            <!-- Sidebar -->
            @include('admin/template/partials/sidebar')
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('admin/template/partials/footer')

    </div>
    <!-- ./wrapper -->
    @include('admin/template/partials/scripts')
</body>

</html>
