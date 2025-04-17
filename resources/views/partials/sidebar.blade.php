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
    </div>

    <div class="menu-items" style="padding: 0 20px;">
        <a href="{{ route('history') }}" class="menu-link {{ request()->routeIs('history') ? 'active' : '' }}">
            <i class="ri-history-line me-2"></i> <span>Histori</span>
        </a>
    </div>

    <div class="dropdown">
        <button class="menu-link dropdown-toggle" onclick="toggleDropdown('dataPaketDropdown')">
            <i class="ri-truck-line"></i> <span>Menu Layanan</span>
            <i class="ri-arrow-down-s-line" style="margin-left:auto;"></i>
        </button>
        <div class="dropdown-menu" id="dataPaketDropdown">
            <a href="{{ route('dataPengirim') }}" class="submenu-link">Data Pengirim</a>
            <a href="{{ route('tracking') }}" class="submenu-link">Tracking</a>
            <a href="{{ route('tarifHarga') }}" class="submenu-link">Tarif Harga</a>
        </div>
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
        width: 180px;
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

    .dropdown {
        position: relative;
        width: 180px;
    }

    .dropdown-toggle {
        cursor: pointer;
        border: none;
        background: none;
        outline: none;
    }

    .dropdown-menu {
    display: none;
    flex-direction: column;
    width: 180px; /* Biar selebar tombol utamanya */
    padding: 0;
    margin: 0;
    background-color: transparent;
    box-shadow: none;
    border: none;
}

.dropdown-menu.show {
    display: flex;
}

    .dropdown:hover .dropdown-menu {
        display: flex;
    }

    .submenu-link {
    padding: 12px 15px;
    border-radius: 8px;
    color: black;
    font-weight: 500;
    text-decoration: none;
    margin: 4px 0;
    transition: all 0.2s ease;
    width: 100%; /* Tambahan biar penuh */
    box-sizing: border-box; /* Supaya padding gak melebihi */
    }

    .submenu-link:hover {
        background-color: #dcdcdc;
        transform: translateX(5px);
        max-height:fit-content;
    }

    .submenu-link.active {
        background-color: white;
        color: black;
        font-weight: 600;
        box-shadow: inset 3px 0 0 #000;
    }
</style>
<script>
  function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        dropdown.classList.toggle('show');
    }
</script>
<!-- Remix Icon (CDN) -->
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
