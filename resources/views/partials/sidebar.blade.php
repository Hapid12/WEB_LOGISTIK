<div class="vertical-menu" style="background-color: gray">
    <!-- LOGO -->
    <div class="navbar-brand-box text-center" style="background-color: gray">
    
        <a href="/index" class="logo logo-light">
            <span class="logo-lg">
                <img src="/assets/images/PT(sidebar).png" alt="logo-light" height="90" style="width: auto;">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn"
        id="vertical-menu-btn">
        <i class="ri-menu-2-line align-middle"></i>
    </button>


    
    <div class="mx-3" style="margin-top: 30px;">
        <a href="{{ route('home') }}" 
           style="display: block; width: 100%; text-align: center; border: 2px solid white; border-radius: 8px; padding: 10px; color: black; font-weight: bold; background-color: transparent;">
            Home
        </a>
    </div>
    <br>
    
    <div class="mx-3">
        <a href="{{ route('dataPaket') }}" 
           style="display: block; width: 100%; text-align: center; border: 2px solid white; border-radius: 8px; padding: 10px; color: black; font-weight: bold; background-color: transparent;">
            Data Paket
        </a>
    </div>
    <br>
    
    <div class="mx-3">
        <a href="{{ route('trackingHistory') }}" 
           style="display: block; width: 100%; text-align: center; border: 2px solid white; border-radius: 8px; padding: 10px; color: black; font-weight: bold; background-color: transparent;">
            Tracking History
        </a>
    </div>
    <br>
    
    
</div>          
</div>