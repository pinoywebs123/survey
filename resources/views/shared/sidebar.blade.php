<div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        
        @if(Auth::user()->hasRole('ADMIN'))

          <li class="nav-item">
          <a class="nav-link text-white {{Request::segment(1) == 'home-admin' ? 'active bg-gradient-primary': ''}}" href="{{route('home_admin')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">account_circle</i>
            </div>
            <span class="nav-link-text ms-1">HOME ADMIN</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white {{Request::segment(1) == 'users-list' ? 'active bg-gradient-primary': ''}}" href="{{route('users_list')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">account_circle</i>
            </div>
            <span class="nav-link-text ms-1">USERS</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white {{Request::segment(1) == 'admin-message' ? 'active bg-gradient-primary': ''}}" href="{{route('admin_message')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">account_circle</i>
            </div>
            <span class="nav-link-text ms-1">MESSAGE</span>
          </a>
        </li>


        @endif

        @if(Auth::user()->hasRole('USER'))
        <li class="nav-item">
          <a class="nav-link text-white {{Request::segment(1) == 'users' ? 'active bg-gradient-primary': ''}}" href="{{route('users')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">account_circle</i>
            </div>
            <span class="nav-link-text ms-1">HOME</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white {{Request::segment(1) == 'section2' ? 'active bg-gradient-primary': ''}}" href="{{route('section2')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">account_circle</i>
            </div>
            <span class="nav-link-text ms-1">Section 2</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white {{Request::segment(1) == 'section3' ? 'active bg-gradient-primary': ''}}" href="{{route('section3')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">account_circle</i>
            </div>
            <span class="nav-link-text ms-1">Section 3</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white {{Request::segment(1) == 'section4' ? 'active bg-gradient-primary': ''}}" href="{{route('section4')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">account_circle</i>
            </div>
            <span class="nav-link-text ms-1">Section 4</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white {{Request::segment(1) == 'message' ? 'active bg-gradient-primary': ''}}" href="{{route('message')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">account_circle</i>
            </div>
            <span class="nav-link-text ms-1">MESSAGE</span>
          </a>
        </li>


        @endif
        

         <li class="nav-item">
          <a class="nav-link text-white " href="{{route('logout')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">power_settings_new</i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
    
      
      </ul>

    </div>
