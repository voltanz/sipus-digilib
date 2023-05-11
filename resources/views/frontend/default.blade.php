<!DOCTYPE html>
<html lang="en">
@include('frontend.templates.partials.head')

<body>
    @include('frontend.templates.partials.nav')
    @yield('content')
</body>
@include('frontend.templates.partials.scripts')
@include('frontend.templates.partials.toast')

</html>