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
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Forums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Learning Paths</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blogs</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="#">Log Out</a></li>
                    </ul>
                </li>

                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">Login</a>--}}
                {{--</li>--}}




            </ul>
            {{--<form class="d-flex">--}}
                {{--<button class="btn btn-outline-success" type="submit">Register</button>--}}
            {{--</form>--}}
        </div>
    </div>
</nav>







