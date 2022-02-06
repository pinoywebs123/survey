
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{URL::to('/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{URL::to('/assets/img/favicon.png')}}">
  <title>
    PHOTOTHERAPHY
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{URL::to('/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{URL::to('/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{URL::to('/assets/css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />
</head>

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-6 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Registration Form</h4>
                  <center>
                    
                  </center>
                </div>
              </div>
              <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @include('shared.notification')
                <form role="form" class="text-start" action="{{route('register_check')}}" method="POST">
                  @csrf
                 
                  <div class="row">

                    <div class="col-lg-4 col-md-4">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="first_name" value="{{old('first_name')}}" required>
                      </div>

                    </div>

                  <div class="col-lg-4 col-md-4">
                      <div class="input-group input-group-outline my-3">
                      <label class="form-label">Middle</label>
                      <input type="text" class="form-control" name="middle_initial" value="{{old('middle_initial')}}" required>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                      <div class="input-group input-group-outline my-3">
                      <label class="form-label">Last Name</label>
                      <input type="text" class="form-control" name="last_name" value="{{old('last_name')}}" required>
                    </div>
                  </div>


                  </div>

                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}" required>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                      <div class="input-group input-group-outline my-3">
                        <label class="form-label">Contact</label>
                        <input type="text" class="form-control" name="contact" value="{{old('contact')}}" required  maxlength="13">
                      </div>
                    </div>

                  </div>

                  <div class="row">

                    <div class="col-lg-4 col-md-4">
                      <select class="form-select my-3" required name="course" >
                        <option value="">Course</option>
                        <option value="BSIT">BSIT</option>
                        <option value="BSCS">BSCS</option>
                    </select>
                    </div>

                    <div class="col-lg-4 col-md-4">
                      <select class="form-select my-3" required name="year">
                        <option value="">Year Level</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                        <option value="VI">VI</option>
                    </select>
                    </div>

                    <div class="col-lg-4 col-md-4">
                      <select class="form-select my-3" required name="gender" >
                        <option value="">GENDER</option>
                        <option value="FEMALE">FEMALE</option>
                        <option value="MALE">MALE</option>
                    </select>
                    </div>
                    

                  </div>

                  <div class="form-group my-3">
                    <p>Do you have any psychiatric or medical conditions?</p>
                    <input type="radio" class="" name="medical_condition" value="YES" required> Yes
                    <input type="radio" class="" name="medical_condition" value="NO" required> No
                  </div>

                  <div class="form-group my-3">
                    <p>Are you currently on medication?</p>
                    <input type="radio" class="" name="current_medication" value="YES" required> Yes
                    <input type="radio" class="" name="current_medication" value="NO" required> No
                  </div>

                  <div class="form-group my-3">
                    <p>Are you currently undergoing psychotherapy or counselling?</p>
                    <input type="radio" class="" name="counselling" value="YES" required> Yes
                    <input type="radio" class="" name="counselling" value="NO" required> No
                  </div>

                  <div class="form-group my-3">
                    <p>Place of Origin:</p>
                    <input type="radio" class="" name="location" value="LUZON" required> LUZON
                    <input type="radio" class="" name="location" value="VISAYAS" required> VISAYAS
                    <input type="radio" class="" name="location" value="MINDANAO" required> MINDANAO
                  </div>
    
                  
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" required>
                  </div>
                   <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Repeat Password</label>
                    <input type="password" class="form-control" name="repeat_password" required>
                  </div>
                  
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Submit</button>
                    <a href="{{route('login')}}" class="btn bg-gradient-default">Login</a>
                  </div>
                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="{{URL::to('/assets/js/core/popper.min.js')}}"></script>
  <script src="{{URL::to('/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{URL::to('/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{URL::to('/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{URL::to('/assets/js/material-dashboard.min.js?v=3.0.0')}}"></script>

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
</body>

</html>