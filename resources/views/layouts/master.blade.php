
<!doctype html>
<html lang="en">
<head>
    <title>...</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src = "{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <style>
        body {
            padding-top: 5rem;
        }
    </style>
</head>
<body>






{{--@include("layouts.navbar");--}}
{{--{{ Breadcrumbs::render('department', $department) }}--}}
<main class="container">

    @yield('content')

</main>

</body>
</html>
