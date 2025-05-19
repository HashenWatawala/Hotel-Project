<!DOCTYPE html>
<html lang="en">
    <head>
      <style type="text/css">
         label{
            display: inline-block;
            width: 200px;
         }
         input{
            width: 100%;
         }
      </style>
      <base href="/public">
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>keto</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- style css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Responsive-->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="images/fevicon.png" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
     </head>
<body>
    <header>
        <!-- header inner -->
        <div class="header">
           <div class="container">
              <div class="row">
                 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                       <div class="center-desk">
                          <div class="logo">
                             <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                       </button>
                       <div class="collapse navbar-collapse" id="navbarsExample04">
                          <ul class="navbar-nav mr-auto">
                             <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="room.html">Our room</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="gallery.html">Gallery</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="blog.html">Blog</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact us</a>
                             </li>
                             
                             


                             @if (Route::has('login'))
                             
                                 @auth
                                   <x-app-layout>

                                   </x-app-layout>
                                 @else
                                   <li class="nav-item" style="padding-right: 10px">
                                      <a class="btn btn-success" href={{ url('login') }}>Login</a>
                                   </li>
             
                                     @if (Route::has('register'))
                                      <li class="nav-item">
                                         <a class="btn btn-primary" href={{ url('register') }}>Register</a>
                                      </li>
                                     @endif
                                 @endauth
                             
                             @endif
                          </ul>
                       </div>
                    </nav>
                 </div>
              </div>
           </div>
        </div>
     </header>
     <div  class="our_room">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Our Room</h2>
                  <p>Lorem Ipsum available, but the majority have suffered </p>
               </div>
            </div>
         </div>
         <div class="row">
            
                
            
            <div class="col-md-4">
               <div id="serv_hover"  class="room">
                  <div class="room_img">
                     <figure><img style="padding: 20px" src="/room/{{$room->image}}" alt="#"/></figure>
                  </div>
                  <div class="bed_room">
                     <h3>{{$room->room_title}}</h3>
                     <p style="padding: 12px">{{$room->description}}</p>
                     <h4>Free Wifi : {{$room->wifi}}</h4>
                     <h4>Room Type : {{$room->room_type}}</h4>
                     <h3>Price : {{$room->price}}</h3>
                  
                  </div>
               </div>
            </div>
            <div class="col-md-8">
               <h1>Booking Room</h1>

               <form action="{{url('add_booking', $room->id)}}" method="post">
               <div>
                  <label for="">Name</label>
                  <input type="text" name="name">
               </div>

               <div>
                  <label for="">Email</label>
                  <input type="email" name="email">
               </div>

               <div>
                  <label for="">Phone</label>
                  <input type="number" name="phone">
               </div>

               <div>
                  <label for="">Start Date</label>
                  <input type="date" name="startDate" id="startDate">
               </div>

               <div>
                  <label for="">End Date</label>
                  <input type="date" name="endDate" id="endDate">
               </div>

               <div>
                  <label for=""></label>
                  <input type="submit" class="btn btn-primary" value="Book Room">
               </div>
            </form>
            </div>
      </div>
   </div>
     <footer>
        <div class="footer">
           <div class="container">
              <div class="row">
                 <div class=" col-md-4">
                    <h3>Contact US</h3>
                    <ul class="conta">
                       <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                       <li><i class="fa fa-mobile" aria-hidden="true"></i> +01 1234569540</li>
                       <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                    </ul>
                 </div>
                 <div class="col-md-4">
                    <h3>Menu Link</h3>
                    <ul class="link_menu">
                       <li class="active"><a href="#">Home</a></li>
                       <li><a href="about.html"> about</a></li>
                       <li><a href="room.html">Our Room</a></li>
                       <li><a href="gallery.html">Gallery</a></li>
                       <li><a href="blog.html">Blog</a></li>
                       <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                 </div>
                 <div class="col-md-4">
                    <h3>News letter</h3>
                    <form class="bottom_form">
                       <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                       <button class="sub_btn">subscribe</button>
                    </form>
                    <ul class="social_icon">
                       <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                       <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                       <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                       <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>
                 </div>
              </div>
           </div>
           <div class="copyright">
              <div class="container">
                 <div class="row">
                    <div class="col-md-10 offset-md-1">
                       
                       <p>
                       © 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a>
                       <br><br>
                       Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                       </p>

                    </div>
                 </div>
              </div>
           </div>
        </div>
     </footer>
     <script type="text/javascript">
     $(function(){
      var dtToday = new Date();

      var month = dtToday.getMonth() + 1;

      var day = dtToday.getDate();

      var year = dtToday.getFullYear();

      if(month < 10)
         month = '0' + month.toString();
      if(day < 10)
         day = '0' + day.toString();

      var maxDate = year + '_' + month + '_' + day;
      $('#startDate').attr('min', maxData);
      $('#endData').atrr('min', maxData);

     }) 
     </script>
     <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</body>
</html>