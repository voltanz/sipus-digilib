<!DOCTYPE html>
<html lang="en">
@include('frontend.templates.partials.head')

<body>
    @include('frontend.templates.partials.nav')
    @yield('content')
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</body>
@include('frontend.templates.partials.footer')
@include('frontend.templates.partials.scripts')
@include('frontend.templates.partials.toast')

</html>
