
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


<style>
    body {
        background: #fafafa;
        font-family: 'Roboto', sans-serif;
    }

    .form-control, .btn {
        border-radius: 50px;
        outline: none !important;
    }
    .signup-form {
        width: 480px;
        margin: 0 auto;
        padding: 30px 0;
    }
    .signup-form form {
        border-radius: 5px;
        margin-bottom: 20px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 40px;
    }
    .signup-form a {
        color: #5cb85c;
    }
    .signup-form h2 {
        text-align: center;
        font-size: 34px;
        margin: 10px 0 15px;
    }
    .signup-form .hint-text {
        color: #999;
        text-align: center;
        margin-bottom: 20px;
    }
    .signup-form .form-group {
        margin-bottom: 20px;
    }
    .signup-form .btn {
        font-size: 18px;
        line-height: 26px;
        font-weight: bold;
        text-align: center;
    }
    .signup-btn {
        text-align: center;
        border-color: #5cb85c;
        transition: all 0.4s;
    }
    .signup-btn:hover {
        background: #5cb85c;
        opacity: 0.8;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light hide-nav-background-color">
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="fa fa-university fa-2x" aria-hidden="true">
                My University
            </i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<main class="container">

    @yield('content')

</main>
</body>
</html>
