<!DOCTYPE html>
<html lang="en">
@include('frontend.templates.partials.head')

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-dark" role="status" style="width: 3rem; height: 3rem"></div>
    </div>
    <!-- Spinner End -->
    @include('frontend.templates.partials.nav')
    @yield('content')
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</body>
@include('frontend.templates.partials.footer')
@include('frontend.templates.partials.scripts')
@include('frontend.templates.partials.toast')

</html>
