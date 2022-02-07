
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{URL::to('/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{URL::to('/assets/img/favicon.png')}}">
  <title>
    Dashboard
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

  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>
   <style type="text/css">
    .product_align{
      padding-left: 25px !important;
    }
  </style>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      
    </div>
    {{Auth::user()->first_name}} {{Auth::user()->last_name}}
    <hr class="horizontal light mt-0 mb-2">

    @auth
       @include('shared.sidebar')
    @endauth
    
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        
        
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      
      <div class="row">

                    <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
                      <div class="card">
                        <div class="card-header p-3 pt-2">
                          <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                          </div>
                          <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Welcome </p>
                            <h4 class="mb-0">Introduction</h4>
                          </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                          <p class="mb-0">
                            Welcome to PhotoTherapy App! Did you know? Photographs have been used to be an important tool in counseling. We call it, PhotoTherapy! It uses photographs as part of psychotherapy, and research has shown that it does help in bridging the conscious to the unconscious where words do not or cannot go. In a sense, it's a tool of communication rather than art, although it can be both. Using photographs connects the past to the present, it can delve into the person's life and issues, and it aids in self-discovery and personal healing. Thus, this PhotoTherapy App aims to help depression and anxiety symptomatic persons to alleviate the symptoms by taking photographs using your mobile phone camera. Before proceeding, may I ask that you read the following instructions on using the App and answer the screening tools. Thank you and enjoy!
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
                      <div class="card">
                        <div class="card-header p-3 pt-2">
                          <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                          </div>
                          <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Welcome </p>
                            <h4 class="mb-0">How to Use this App:</h4>
                          </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                          <p class="mb-0">
                           This App is meant to be interactive. It is like a diary that will ask you to upload photos and images you take or someone else took for you, while other sections will prompt you to write personal responses
                          </p>

                          <p class="mb-0">
                            With your finger, tap the camera icon to upload a photo. Tap the "YOUR RESPONSE HERE" to write your response to the guide questions. You may respond in English or Filipino language. Moreover, you are requested not to do editing of your photographs. You can take as many shots as you would like and come up with the best among the rest to upload without editing the picture. However, you may change the hue of the photographs into coloured, black and white or sepia. Remember, this is not a creativity or art platform. This is about self-expression and self-discovery. You don't have to upload perfect pictures.
                          </p>

                          <p class="mb-0">
                            It is also essential that you don't make any environmental manipulation that could harm yourself or others, and you could not photograph harm to yourself or others. 
                          </p>

                          <p class="mb-0">
                            When you are done, you can scroll down and save. You can change photos or edit your responses anytime. This therapeutic plan includes eight (8) modules that you can finish for a month (2 modules per week) or less depending on your pacing. You can do more than two sessions a week, though. It is recommended that you first read what photos to upload before starting a session. Take pictures with your mobile phone camera any time of the day. If you can afford at least 15 minutes of your day, go through the session, follow the instructions, and answer the guide questions. All eight sessions have the same format of activity – photo upload, then open-ended questions. The difference is in the objectives for each session
                          </p>

                          <p class="mb-0">
                            However, you must give your full attention and intention to the work and be very honest about how you feel and what thoughts come to you as you go through the process. I encourage you to get into the plan and see if it works for you
                          </p>

                          <p class="mb-0">
                            Finally, a chatbox is provided. If you feel that the exercises are too much for you emotionally and it's not in any way helping you, the chatbox is for you to reach out for help. You will be directed to your mental health professional.
                          </p>
                          
                        </div>
                      </div>
                    </div>

                    

                   
                   
                   
        </div>



      <div class="row mt-4">
      </div>
      
      
    </div>
  </main>

  <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" id="order_title"></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       
       <form role="form" class="text-start" action="#" method="POST">
                  @csrf
                  <input type="hidden" name="user_id" id="user_id">
                  <select class="form-select" required name="user_type" id="user_type">
                      <option value="">Select User Type</option>
                      <option value="admin">Admin</option>
                      <option value="user">User</option>
                  </select>

                  <div class="input-group input-group-outline my-3">
                    
                    <input type="text" class="form-control" name="first_name" id="first_name">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    
                    <input type="text" class="form-control" name="middle_initial" id="middle_initial">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    
                    <input type="text" class="form-control" name="last_name" id="last_name">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    
                    <input type="email" class="form-control" name="email" id="email">
                  </div>
                  <div class="input-group input-group-outline my-3">
                   
                    <input type="text" class="form-control" name="username" id="username">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    
                    <input type="text" class="form-control" name="contact" id="contact">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password (Optional)</label>
                    <input type="text" class="form-control" name="password" id="password">
                  </div>
                   
                  
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Update</button>
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                  </div>
                 
                </form>
       
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        
      </div>

    </div>
  </div>
</div>
  
  <!--   Core JS Files   -->
  <script src="{{URL::to('/assets/js/core/popper.min.js')}}"></script>
  <script src="{{URL::to('/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{URL::to('/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{URL::to('/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{URL::to('/assets/js/plugins/chartjs.min.js')}}"></script>
  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{URL::to('/assets/js/material-dashboard.min.js?v=3.0.0')}}"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $(".edit_user").click(function(){
        var user_id = $(this).val();
        var url = '';
        var token = '{{Session::token()}}';
          $.ajax({
            method:'POST',
            url:url,
            data:{_token : token,user_id: user_id},
              success:function(data) {
                  console.log(data);
                  $("#user_type").val(data.role);
                  $("#first_name").val(data.first_name);
                  $("#last_name").val(data.last_name);
                  $("#middle_initial").val(data.middle_initial);
                  $("#email").val(data.email);
                  $("#username").val(data.username);
                  $("#contact").val(data.contact);
                  $("#user_id").val(data.id);
                 
              }
          });
        

        });
      
    });
  </script>
   
</body>

</html>