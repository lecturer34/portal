<style>
    .hide-nav-background-color{
        background: #fff !important;
    }
    .right-align-nav-items {
        margin-left: auto !important;
    }
    .navbar-nav>li>a {
        display: block;
        margin-right: 20px;
    }

    .register-form .btn {
        line-height: 26px;
        font-weight: bold;
        text-align: center;
    }
    .register-btn {
        text-align: center;
        border: none;
        border-radius: 50px;
        transition: all 0.4s;
    }
    .register-btn:hover {
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
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav right-align-nav-items mb-2 mb-lg-0">

                <li class="nav-item active">
                    <a class="nav-link" href="{{route("login")}}">Login</a>
                </li>

            </ul>
            <form class="d-flex register-form">
                <button type="submit" class="btn btn-danger btn-block register-btn">Sign Up</button>
            </form>
        </div>
    </div>
</nav>







