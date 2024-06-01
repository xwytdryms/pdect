<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Arc Control</div>
    </a>
  
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
  
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        PD Views
    </div>
    <li class="nav-item {{ Request::is('monitoringpd') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('monitoringpd') }}">
            <i class="fas fa-receipt"></i>
            <span>PD Monitoring</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('monitoringpa') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('monitoringpa') }}">
            <i class="fas fa-receipt"></i>
            <span>Arc Counter</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('manajemenperangkat') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('manajemen') }}">
            <i class="fas fa-receipt"></i>
            <span>Device Manager</span>
        </a>
    </li>
  
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  </ul>
  