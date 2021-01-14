
<!doctype html>
<html lang="en">
<head>
    <title>...</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="{{asset('css/carousel.css')}}">
    <script src = "{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src = "{{asset('js/jquery-3.5.1.min.js')}}"></script>
    @include('commons.styles')
    @yield('css')
</head>
<body>
@guest
    @include("layouts.navbar-guest");
@else
    @include("layouts.navbar");
@endguest

<main class="container">

    @yield('content')

</main>
@include('commons.scripts')
@yield('js')
<!-- End js -->
</body>
</html>
