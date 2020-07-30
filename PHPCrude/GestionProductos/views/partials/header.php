<form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
    <div class="px-9"></div>
</form>
<ul class="navbar-nav align-items-center ml-auto ml-md-0">
    <li class="nav-item dropdown">
        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle" style="background-color: #5e72e4">
                    <img alt="" src="/CrudPHP/PHPCrude/GestionProductos/assets/img/user.png" />
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm font-weight-bold"><?php echo $_SESSION['user']['NAME'] ?></span>
                </div>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="#!" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="/CrudPHP/PHPCrude/GestionProductos/php/logout.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
            </a>
        </div>
    </li>
</ul>