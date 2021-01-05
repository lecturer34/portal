
<!doctype html>
<html lang="en">
<head>
    <title>...</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src = "{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src = "{{asset('js/jquery-3.5.1.min.js')}}"></script>
</head>
<body>
@include("layouts.navbar");
<main class="container">

    @yield('content')

</main>
</body>
</html>
