<!-- TOPBAR -->
<header id="page-topbar">
    <div class="navbar-header d-flex justify-content-between align-items-center px-3" style="background-color: #FFFFFF; height: 70px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">

        <!-- LEFT: Logo + Title -->
        <div class="d-flex align-items-center gap-3">
            <!-- PAGE TITLE -->
            <div class="page-title-box">
                <h5 class="mb-0 fw-semibold text-dark">{{$title}}</h5>
            </div>
        </div>

        <!-- RIGHT: Settings + User -->
        <div class="d-flex align-items-center gap-3">
            <!-- Settings -->
            <button type="button" class="btn btn-light btn-sm rounded-circle shadow-sm" title="Settings">
                <i class="ri-settings-2-line"></i>
            </button>

            <!-- User Dropdown -->
            <div class="dropdown">
                <button class="btn btn-light btn-sm d-flex align-items-center gap-2 rounded-pill shadow-sm" data-bs-toggle="dropdown">
                    <img src="/assets/images/user.png" alt="user" class="rounded-circle" height="30" width="30">
                    <span class="d-none d-md-inline text-dark fw-medium">Hi, Admin</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Profil</a></li>
                    <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="#">Keluar</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
