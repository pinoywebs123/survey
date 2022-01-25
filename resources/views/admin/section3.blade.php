
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
      <h3>Batch 1</h3>
          
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
      $(".question_list_id").change(function(){

        var answer = $(this).val();
        var user_id = '{{Auth::id()}}';
        var url = '{{route("section2_batch1")}}';
        var question_id = $(this).attr("data-question_id");

        var token = '{{Session::token()}}';
          $.ajax({
            method:'POST',
            url:url,
            data:{_token : token,user_id: user_id, answer: answer, question_id: question_id},
              success:function(data) {
                  console.log(data);
                  $
                 
              }
          });
        

      });


      
      
    });
  </script>
   
</body>

</html>