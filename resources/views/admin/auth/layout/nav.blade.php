<!-- Collapse -->
<div class="collapse navbar-collapse" id="sidenav-collapse-main">
    <!-- Collapse header -->
    <div class="navbar-collapse-header d-md-none">
        <div class="row">
            <div class="col-6 collapse-brand">
                <a href="./index.html">
                    <img src="./assets/img/brand/blue.png">
                </a>
            </div>
            <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                    aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Form -->
    <form class="mt-4 mb-3 d-md-none">
        <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended px-0"
                placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <span class="fa fa-search"></span>
                </div>
            </div>
        </div>
    </form>
    <!-- Navigation -->
    <ul class="navbar-nav">
        <li class="nav-item  active ">
            <a class="nav-link  active " href="{{ url('/admin') }}">
                <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin.programming.index') }}">
                <i class="ni ni-planet text-blue"></i> Programming
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin.tag.index') }}">
                <i class="ni ni-pin-3 text-orange"></i> Tags
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin.article.index') }}">
                <i class="ni ni-single-02 text-yellow"></i> Articles
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="./examples/tables.html">
                <i class="ni ni-bullet-list-67 text-red"></i> Tables
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./examples/login.html">
                <i class="ni ni-key-25 text-info"></i> Login
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i> Register
            </a>
        </li>
    </ul>
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Documentation</h6>
    <!-- Navigation -->

</div>
