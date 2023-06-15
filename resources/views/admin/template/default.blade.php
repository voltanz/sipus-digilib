<!DOCTYPE html>
<html lang="en">

@include('admin.template.partials.head')
@include('sweetalert::alert')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('admin/template/partials/nav')
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="index3.html" class="brand-link">

                <img src="{{ asset('assets/logo/smansaga.png') }}" alt="smansaga.png" class="brand-image"
                    style="opacity: .8">
                <span class="brand-text font-weight">SIPUS SMANSAGA</span>

            </a>

            @include('admin/template/partials/sidebar')
        </aside>

        <div class="content-wrapper">
            <section class="content">
                @yield('content')
            </section>
        </div>
        @include('admin/template/partials/footer')
    </div>
    @include('admin/template/partials/scripts')
</body>
</html>