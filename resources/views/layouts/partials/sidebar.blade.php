<!-- resources/views/layouts/partials/sidebar.blade.php -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="{{ route('dashboard') }}" class="app-brand-link">
      <span class="app-brand-logo demo">
        <!-- Your logo SVG code here -->
      </span>
      <span class="app-brand-text demo menu-text fw-bold ms-2">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="bx bx-chevron-left d-block d-xl-none align-middle"></i>
    </a>
  </div>

  <div class="menu-divider mt-0"></div>
  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboards -->
    <li class="menu-item {{ request()->routeIs('dashboard') ? 'active open' : '' }}">
      <a href="{{ route('dashboard') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-smile"></i>
        <div class="text-truncate" data-i18n="Dashboards">Dashboard</div>
      </a>
    </li>

    <!-- Add other menu items as needed -->
    
    <!-- Authentication Links -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Authentication</span></li>
    <li class="menu-item">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="{{ route('logout') }}" 
           onclick="event.preventDefault(); this.closest('form').submit();" 
           class="menu-link">
          <i class="menu-icon tf-icons bx bx-power-off"></i>
          <div class="text-truncate">Log Out</div>
        </a>
      </form>
    </li>
  </ul>
</aside>