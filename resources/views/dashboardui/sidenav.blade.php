<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{asset('/img/brand/logo.png')}}" class="navbar-brand-img" alt="..." style="width: 80%;">
          <h5>Mahabir Automobiles</h5>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('home')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('viewJobs')}}" >
                <i class="fas fa-briefcase"></i>
                <span class="nav-link-text">Jobs</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('JobsApplied')}}">
                <i class="fas fa-envelope-open-text"></i>
                <span class="nav-link-text">Jobs Applied</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('viewProducts')}}">
                <i class="fab fa-product-hunt"></i>
                <span class="nav-link-text">Products</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('booking')}}">
              <i class="fas fa-book"></i>
                <span class="nav-link-text">Booking</span>
              </a>
            </li>
            
          
            <li class="nav-item">
              <a class="nav-link" href="{{route('Contact')}}">
                <i class="fas fa-phone-square"></i>
                <span class="nav-link-text">Contact</span>
              </a>
            </li>
            
            </li>
          </ul>
        
        </div>
      </div>
    </div>
  </nav>