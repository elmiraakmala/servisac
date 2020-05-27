  <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="far fa-snowflake"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Fresh <sup>Air</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{url('/home')}}">
          <i class="fas fa-campground"></i>
          <span>Home</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="{{url('/about')}}">
          <i class="fab fa-centos"></i>
          <span>About Us</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Interface
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-chalkboard"></i>
          <span>Master Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           <!--  <h6 class="collapse-header">Custom Components:</h6> -->
            <a class="collapse-item" href="{{url('/customermodel')}}">Customer</a>
            @if(Auth::user()->role == 'admin')
            <a class="collapse-item" href="{{url('/pegawaimodel')}}">Pegawai</a>
            @endif
          </div>
        </div>
      </li>

     <li class="nav-item">
        <a class="nav-link" href="{{url('/ordermodel')}}">
          <i class="fas fa-cart-plus"></i>
          <span>Order</span></a>
      </li>

     
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->