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

    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "103820885559661");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
