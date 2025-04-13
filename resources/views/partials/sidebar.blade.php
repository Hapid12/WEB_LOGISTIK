<!-- Sidebar -->
<div class="vertical-menu" style="background-color: gray; height: 100vh; width: 250px; position: fixed; overflow: hidden; box-shadow: 2px 0 8px rgba(0,0,0,0.15); transition: all 0.3s ease;">
    <!-- Logo -->
    <div class="navbar-brand-box text-center" style="padding: 20px 0; background-color: gray;">
        <a href="/index" class="logo logo-light">
            <img src="/assets/images/PT(sidebar).png" alt="logo-light" height="80" style="width: auto; border-radius: 8px; background-color: transparent;">
        </a>
    </div>

    <!-- Menu Items -->
    <div class="menu-items" style="padding: 0 20px;">
        <a href="{{ route('home') }}" class="menu-link {{ request()->routeIs('home') ? 'active' : '' }}">
            <i class="ri-home-4-line me-2"></i> <span>Home</span>
        </a>
        <a href="{{ route('dataPaket') }}" class="menu-link {{ request()->routeIs('dataPaket') ? 'active' : '' }}">
            <i class="ri-database-2-line me-2"></i> <span>Data Paket</span>
        </a>
        <a href="{{ route('trackingHistory') }}" class="menu-link {{ request()->routeIs('trackingHistory') ? 'active' : '' }}">
            <i class="ri-map-pin-line me-2"></i> <span>Tracking History</span>
        </a>
    </div>
</div>

<!-- CSS -->
<style>
    .menu-link {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 12px 15px;
        margin: 10px 0;
        border-radius: 8px;
        color: black;
        font-weight: 600;
        text-decoration: none;
        background-color: transparent;
        transition: all 0.3s ease;
    }

    .menu-link:hover {
        background-color: #dcdcdc;
        transform: translateX(5px);
    }

    .menu-link.active {
        background-color: white;
        color: black;
        box-shadow: inset 4px 0 0 #000;
    }
</style>

<!-- Remix Icon (CDN) -->
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
