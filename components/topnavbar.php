<!-- Top Navbar -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

    <div class="text-center bg-primary navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="./"><img src="assets/images/d-logo-white.png" width="200px" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="./"><img src="assets/images/d-favicon.png" width="50px" alt="logo"/></a>
    </div>

    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src="assets/images/avatar.png" alt="profile"/>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="security">
                        <i class="mdi mdi-fingerprint text-primary"></i>
                        Security
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout">
                        <i class="mdi mdi-logout text-primary"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>