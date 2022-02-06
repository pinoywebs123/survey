
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

        <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">User Survey: {{$find->first_name}} {{$find->last_name}}</h6>
                </div>
              </div>
              <div class="card-body px-0 pb-2">
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
               <h1 class="text-center">SECTION 4 ANSWER SURVEY</h1>
               <h3>Batch 1</h3>
        <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase ">Question</th>
                          <th class="text-uppercase ">Choices</th>
                          
                        </tr>
                      </thead>
                      <tbody>

                       @foreach($section4 as $sec)
                        <tr>

                          <td class="align-middle text-left text-sm">
                            <p>
                              <?php 
                                
                                
                                $str = $sec->question_name;
                                echo wordwrap($str,50,"<br>\n");
                               

                              ?>
                            </p>
                          </td>

                         
                             <td>

                                  @foreach($sec->questions as $key => $quest)
                                    
                                    <?php 
                                      $answer_result = \App\Answer::where('question_id',$sec->id)->where('user_id', Request::segment(2))->where('answer',$quest->id)->first();
                                      
                                      if($answer_result){
                                        ?>

                                          <input type="radio" value="{{$quest->id}}" class="question_list_id" data-question_id="{{$sec->id}}" checked> {{$quest->name}}
                                        <?php
                                      }else {

                                        ?>
                                        <input type="radio" value="{{$quest->id}}" class="question_list_id" data-question_id="{{$sec->id}}"> {{$quest->name}}
                                        <?php
                                      }
                                      
                                     
                                      

                                    ?>
                                    
                                    
                                  @endforeach

                                  
                              
                            </td>
                         

                         
                         

                        </tr>
                       
                        @endforeach
                       
                      </tbody>
              </table>


              <h3>Batch 2</h3>
        <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase ">Question</th>
                          <th class="text-uppercase ">Choices</th>
                          
                        </tr>
                      </thead>
                      <tbody>

                       @foreach($section4_batch2 as $sec)
                        <tr>

                          <td class="align-middle text-left text-sm">
                            <p>
                              <?php 
                                
                                
                                $str = $sec->question_name;
                                echo wordwrap($str,50,"<br>\n");
                               

                              ?>
                            </p>
                          </td>

                         
                             <td>

                                  @foreach($sec->questions as $key => $quest)
                                    
                                    <?php 
                                      $answer_result = \App\Answer::where('question_id',$sec->id)->where('user_id', Request::segment(2))->where('answer',$quest->id)->first();
                                      
                                      if($answer_result){
                                        ?>

                                          <input type="radio" value="{{$quest->id}}" class="question_list_id" data-question_id="{{$sec->id}}" checked> {{$quest->name}}
                                        <?php
                                      }else {

                                        ?>
                                        <input type="radio" value="{{$quest->id}}" class="question_list_id" data-question_id="{{$sec->id}}"> {{$quest->name}}
                                        <?php
                                      }
                                      
                                     
                                      

                                    ?>
                                    
                                    
                                  @endforeach

                                  
                              
                            </td>
                         

                         
                         

                        </tr>
                       
                        @endforeach
                       
                      </tbody>
              </table>


              <h3>Batch 3</h3>
        <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase ">Question</th>
                          <th class="text-uppercase ">Choices</th>
                          
                        </tr>
                      </thead>
                      <tbody>

                       @foreach($section4_batch3 as $sec)
                        <tr>

                          <td class="align-middle text-left text-sm">
                            <p>
                              <?php 
                                
                                
                                $str = $sec->question_name;
                                echo wordwrap($str,50,"<br>\n");
                               

                              ?>
                            </p>
                          </td>

                         
                             <td>

                                  @foreach($sec->questions as $key => $quest)
                                    
                                    <?php 
                                      $answer_result = \App\Answer::where('question_id',$sec->id)->where('user_id', Request::segment(2))->where('answer',$quest->id)->first();
                                      
                                      if($answer_result){
                                        ?>

                                          <input type="radio" value="{{$quest->id}}" class="question_list_id" data-question_id="{{$sec->id}}" checked> {{$quest->name}}
                                        <?php
                                      }else {

                                        ?>
                                        <input type="radio" value="{{$quest->id}}" class="question_list_id" data-question_id="{{$sec->id}}"> {{$quest->name}}
                                        <?php
                                      }
                                      
                                     
                                      

                                    ?>
                                    
                                    
                                  @endforeach

                                  
                              
                            </td>
                         

                         
                         

                        </tr>
                       
                        @endforeach
                       
                      </tbody>
              </table>

              <h3>Batch 4</h3>
        <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase ">Question</th>
                          <th class="text-uppercase ">Choices</th>
                          
                        </tr>
                      </thead>
                      <tbody>

                       @foreach($section4_batch4 as $sec)
                        <tr>

                          <td class="align-middle text-left text-sm">
                            <p>
                              <?php 
                                
                                
                                $str = $sec->question_name;
                                echo wordwrap($str,50,"<br>\n");
                               

                              ?>
                            </p>
                          </td>

                         
                             <td>

                                  @foreach($sec->questions as $key => $quest)
                                    
                                    <?php 
                                      $answer_result = \App\Answer::where('question_id',$sec->id)->where('user_id', Request::segment(2))->where('answer',$quest->id)->first();
                                      
                                      if($answer_result){
                                        ?>

                                          <input type="radio" value="{{$quest->id}}" class="question_list_id" data-question_id="{{$sec->id}}" checked> {{$quest->name}}
                                        <?php
                                      }else {

                                        ?>
                                        <input type="radio" value="{{$quest->id}}" class="question_list_id" data-question_id="{{$sec->id}}"> {{$quest->name}}
                                        <?php
                                      }
                                      
                                     
                                      

                                    ?>
                                    
                                    
                                  @endforeach

                                  
                              
                            </td>
                         

                         
                         

                        </tr>
                       
                        @endforeach
                       
                      </tbody>
              </table>

              <h3>Batch 5</h3>
        <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase ">Question</th>
                          <th class="text-uppercase ">Choices</th>
                          
                        </tr>
                      </thead>
                      <tbody>

                       @foreach($section4_batch5 as $sec)
                        <tr>

                          <td class="align-middle text-left text-sm">
                            <p>
                              <?php 
                                
                                
                                $str = $sec->question_name;
                                echo wordwrap($str,50,"<br>\n");
                               

                              ?>
                            </p>
                          </td>

                         
                             <td>

                                  @foreach($sec->questions as $key => $quest)
                                    
                                    <?php 
                                      $answer_result = \App\Answer::where('question_id',$sec->id)->where('user_id', Request::segment(2))->where('answer',$quest->id)->first();
                                      
                                      if($answer_result){
                                        ?>

                                          <input type="radio" value="{{$quest->id}}" class="question_list_id" data-question_id="{{$sec->id}}" checked> {{$quest->name}}
                                        <?php
                                      }else {

                                        ?>
                                        <input type="radio" value="{{$quest->id}}" class="question_list_id" data-question_id="{{$sec->id}}"> {{$quest->name}}
                                        <?php
                                      }
                                      
                                     
                                      

                                    ?>
                                    
                                    
                                  @endforeach

                                  
                              
                            </td>
                         

                         
                         

                        </tr>
                       
                        @endforeach
                       
                      </tbody>
              </table>

              </div>
            </div>
          </div>

      </div>
                   
        </div>



      <div class="row mt-4">
      </div>
      
      
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
      
      
    });
  </script>
   
</body>

</html>