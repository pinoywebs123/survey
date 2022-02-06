
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
      <h3>Section 3 Questions Set</h3>
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
       <ul>
         @foreach($section3 as $sec)
            <tr>

                <td class="align-middle text-left text-sm">
                    <h3>Objectives:</h3>
                    <p>{{$sec->objectives}}</p>
                </td>

                  <td class="align-middle text-left text-sm">
                    <h3>Instructions:</h3>
                    <p>{{$sec->instructions}}</p>
                  </td>
                       

              </tr>
              <form method="POST" action="{{route('section3_upload_image')}}"  enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" >
                <input type="hidden" name="section_id" value="{{$sec->id }}">
                <input type="submit" value="Upload">
              </form>
              @if( $sec->image != null )
                <img src="{{url('/images/')}}/{{$sec->image->image}}">
              @endif  
              <ol>
                @foreach($sec->questions as $quest)
                  <li>{{$quest->question_name}}</li>
                  <?php 
                        $answer_result = \App\AnswerThree::where('question_id',$quest->id)->where('user_id', Auth::id())->first();
                                    
                            if($answer_result){
                                ?>

                                <input type="text" name="answer" data-section_id="{{$quest->section_three_id }}" data-question_id="{{$quest->id}}" size="60" class="get_answer" value="{{$answer_result->answer}}">
                                      <?php
                            }else {

                            ?>
                            <input type="text" name="answer" data-section_id="{{$quest->section_three_id }}" data-question_id="{{$quest->id}}" size="60" class="get_answer">
                                      <?php
                                    }
                                    
                                   
                                    

                  ?>
                  
                @endforeach
              </ol>
                
                     
          @endforeach
       </ul>   
      
      
    </div>
  </main>

  
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

      var token = '{{Session::token()}}';
      var url = '{{route("section2_batch1")}}';
      var url2 = '{{route("section3_check")}}';
      var user_id = '{{Auth::id()}}';

      $(".question_list_id").change(function(){

        var answer = $(this).val();
        
        
        var question_id = $(this).attr("data-question_id");

        
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

      $(".get_answer").blur(function(){
          var section_id = $(this).attr("data-section_id");
          var question_id = $(this).attr("data-question_id");
          var answer = $(this).val();

          $.ajax({
            method:'POST',
            url:url2,
            data:{_token : token,user_id: user_id, answer: answer, question_id: question_id,section_id: section_id},
              success:function(data) {
                  console.log(data);
                  
                 
              }
          });
      });


      
      
    });
  </script>
   
</body>

</html>