<html>
    <head>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <style>
            *{margin:0px; padding: 0px;}
            body {
                font-family: "Poppins", sans-serif;
                font-weight: normal;
                font-style: normal;  
                }
                .row-header {
                    margin: 0px auto;
                    padding: 0px 0px; 
                }

                .row-content {
                    margin: 0px auto;
                    padding: 50px 0px;
                    border-bottom: 1px ridge;
                    min-height: 400px; 
                }
                  .navbar-scroll {
                    background-color: rgb(0,0,0);
                    opacity: 0.8
                  }
                
                .nav-link{font-family:  cursive, monospace;}
                
                .row-header
                {
                    margin:0px auto;
                    padding: 0px auto;
                }
                @media(max-width: 768px)
                {
                   #header1
                   {
                       font-size:  3em;
                   }
                   #header2
                   {
                       font-size: 1em;
                   }
                }
                .navbar-brand img{
                    height: 40px;
                    width: 80px;
                }
                /*jumbotron*/
                .jumbotron {
                    background-image: url("pic/main.jpg");
                    background-size: 100% 100%;
                    color: #b0bec5;   
                    padding: 90px 30px 70px 30px;
                    margin: 0px;
                    color: floralwhite;
                }
                .pic img{
                    margin-left: 110px;
                    margin-top: -210px;
                }
               
                /*service*/
                
                .service_area .single_service {
                    padding: 40px 30px;
                    background-color: #17a2b8;
                }  
                .service_area .single_service h3 {
                    font-size: 24px;
                    font-weight: 550px;
                    color: #fff;
                    margin-left: 66px;
                }
                
                .service_area .single_service p {
                    font-size: 16px;
                    font-weight: 400;
                    line-height: 28px;
                    color: #fff;
                    text-align: center;
                }
                @media (min-width: 768px) and (max-width: 991px){
                    .service_area .single_service {
                     padding: 40px 20px;
                    }
                    .service_area .single_service h3 {
                        font-size: 18px;
                    }
                    .single_service .btn-outline-light {
                        padding: 5px 10px;
                    }
                }
                .service_area .col-xl-4:nth-child(2) .single_service {
                    background: #5DB2FF;
                }
                .icon1{
                    height: 50px;
                    margin-left: 76px;
                    margin-bottom: 10px;
                }
                
                /*carousel*/
          
                .carousel {
                    position: relative;
                    width: 100%;
                }
                .carousel-item {  
                    height: 450px;
                }
                .carousel-item img{
                    min-height: 450px;    
                }
                .carousel-caption {
                    position: absolute;
                    background: rgba(0,0,0,0.4);
                    padding: 15px 10px;
                   
                }
                .carousel-control-prev,
                .carousel-control-next {
                    width: 5%;
                }
                @media (max-width: 768px)
                {
                    .carousel-item {
                        height: 300px;
                    }
                    .carousel-item img{
                        min-height: 300px;    
                    }
                }
                
                /***** Modal *****/
                
                .modal-content {
                    background: #3a3a3a;
                    border: 0;
                    text-align: left;
                }

                .modal-header {
                    padding: 25px 25px 15px 25px;
                    background: #333;
                    border: 0;  
                    color: #888;
                }

                .modal-header .close {
                    font-size: 36px;
                    color: #eee;
                    font-weight: 300;
                    text-shadow: none;
                    opacity: 1;
                    border:none;
                    outline: none;
                }

                .modal-title {
                    margin-bottom: 10px;
                    line-height: 30px;
                    color: #eee;
                }

                .modal-body {
                    padding: 25px 25px 30px 25px;
                    background: #3a3a3a;
                    text-align: left;
                    
                }
                button.btn {
                    width: 100%;
                    height: 50px;
                    margin: 0;
                    padding: 0 20px;
                    vertical-align: middle;
                    background: #fd625e;
                    border: 0;
                    font-family: 'Roboto', sans-serif;
                    font-size: 16px;
                    font-weight: 300;
                    line-height: 50px;
                    color: #fff;   
                }
                input[type="text"], input[type="email"],input[type="password"]
                {
                    height: 50px;
                    margin: 0;
                    padding: 0 20px;
                    vertical-align: middle;
                    background: #333;
                    border: none;
                    font-family:  cursive, sans-serif;
                    font-size: 16px;
                    font-weight: 300;
                    line-height: 50px;
                    color: floralwhite;
                }
                input[type="text"]:focus,input[type="email"]:focus, input[type="password"]:focus {
                    outline: none;
                    background: #444;
                    border:none; 
                    color: floralwhite;
                }
                button.btn{margin-top: 15px; margin-bottom: 10px; background: #3498DB ; color: #eee;}
                button.btn:hover { opacity: 0.6;background: #3498DB ; color: #eee; }
                .form-check-label span
                {
                    color:red;
                }
                .input-group-addon .fa {
                    font-size: 25px;
                }
                .social-btn .btn {
                    border: none;
                    margin: 10px 3px 0;
                    opacity: 1;
                }
                .social-btn .btn:hover {
                    opacity: 0.9;
                }
                .social-btn .btn-primary {
                    background: #507cc0;
                }
                .social-btn .btn-info {
                    background: #64ccf1;
                }
                .social-btn .btn-danger {
                    background: #df4930;
                }
                .welcome_Lifeline h2{
                    font-size: 18px;
                    font-weight: 400;
                    color: #1F1F1F;
                    margin-bottom: 40px;
                    position: relative;
                    z-index: 9;
                    padding-bottom: 9px;
                }
                .welcome_Lifeline h2:before {
                    content: "";
                    position: absolute;
                    left: 0;
                    bottom: 0;
                    height: 2px;
                    width: 55px;
                    background: #5DB2FF;
                }
                .welcome_Lifeline h3 {
                    font-weight: 500;
                    font-size: 36px;
                    margin-bottom: 10px;
                }
                @media (max-width: 767px) {
                    .welcome_Lifeline h2{
                        margin-top: 30px;
                    }
                    .welcome_Lifeline h3 {
                        font-size: 30px;
                    }
                    .welcome_Lifeline h3 br{
                        display: none;
                    }
                }
                .welcome_Lifeline p {
                    font-size: 16px;
                    color: #727272;
                    line-height: 28px;
                }
                .welcome_Lifeline ul {
                    margin-bottom: 40px;
                    margin-top: 25px;
                }
                .welcome_Lifeline ul li {
                    color: #727272;
                    font-size: 16px;
                    line-height: 28px;
                }
                .welcome_Lifeline ul li i {
                    margin-right: 10px;
                    color: #5DB2FF;
                    font-weight: 16px;
                }
                .welcome_thumb {
                    position: relative;
                }
                .welcome_thumb .img_1 {
                    left: 0;
                }
                .welcome_thumb .img_1 img {
                    width: 60%;
                    height: 60%;
                }
                @media (max-width: 767px) {
                    .welcome_thumb .img_1 img {
                        width: 100%;
                        height: auto;
                    }
                }
                .welcome_thumb .img_2 {
                    position: absolute;
                    bottom: -94px;
                    right: -37px;
                }
                @media (max-width: 767px) {
                   .welcome_thumb .img_2 {
                        position: absolute;
                        left: 0;
                        top: 0;
                        display: none;
                    }
                }

                @media (min-width: 768px) and (max-width: 991px) {
                    .welcome_thumb .img_2 {
                        position: absolute;
                        right: 0;
                        bottom: -40px;
                    }
                }


                .welcome_thumb .img_2 img {
                    width: 89%;
                }

                @media (min-width: 768px) and (max-width: 991px) {
                    .welcome_thumb .img_2 img {
                        width: 100%;
                    }
                }

        </style>
    </head>
    <body>
                        <!-- The Modal -->
                          <!-- Sign_up Modal -->
                          
                          <div class="modal fade" id="signup" tabindex="-1" role="dialog">
                              <div class="modal-dialog  modal-dialog-centered">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <div class="mr-auto">
                                              <p class="modal-title h3" id="signup-label">Sign up now</p>  
                                          </div>
                                          <div class="ml-auto">
                                              <button type="button" class="close" data-dismiss="modal">
                                                  <span>&times;</span><span class="sr-only">Close</span>
                                              </button>
                                          </div>
                                      </div>
                                      <div class="modal-body">
                                          <form role="form" action="" method="" class="signup" autocomplete="off">
                                              <div class="row form-group">        
                                                  <div class="col-6 col-sm-6 has-feedback">
                                                      <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required="">
                                                  </div>
                                                  <div class="col-6 col-sm-6">
                                                      <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
                                                  </div>
                                              </div>
                                              <div class="row form-group"> 
                                                  <div class=" col-xs-12 col-sm-12 ">
                                                      <input type="email" id="mail" Name="mail" class="form-control" placeholder="Email" required="">
                                                  </div>
                                              </div>
                                              <div class="row form-group "> 
                                                  <div class=" col-xs-12 col-sm-12 ">
                                                      <input type="Password" id="pswd" Name="pswd" class="form-control" placeholder="Password" required="">
                                                  </div>
                                              </div>
                                              <div class="row form-group "> 
                                                  <div class=" col-xs-12 col-sm-12 ">
                                                      <input type="Password" id="cpswd" Name="cpswd" class="form-control" placeholder="Confrim Password" required="">
                                                  </div>
                                              </div>
                                              <div class="row form-group "> 
                                                  <div class="form-check form-check-inline  col-xs-10 col-sm-10">
                                                      &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="checkbox" name="tnc" id="tnc" value="tnc" required="">
                                                      <label class="form-check-label" for="iti" >&nbsp;&nbsp;<span>I accept the Terms of Use & Privacy Policy.</span></label>
                                                  </div>
                                              </div>

                                              <button type="submit" class="btn">Sign me up!</button>
                                          </form>
                                          <p class="text-center text-muted small" style="margin-top: 15px;">have an account? <a href="#"data-toggle="modal" data-target="#signin" data-dismiss="modal">Sign in here!</a></p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                          <!-- Sign_up Modal End-->
                          
                          <!-- Sign_in Modal Start-->
                          
                          <div class="modal fade" id="signin" tabindex="-1" role="dialog">
                              <div class="modal-dialog  modal-dialog-centered">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <div class="mr-auto">
                                              <p class="modal-title h3" id="signin-label">Sign in</p>  
                                          </div>
                                          <div class="ml-auto">
                                              <button type="button" class="close" data-dismiss="modal">
                                                  <span>&times;</span><span class="sr-only">Close</span>
                                              </button>
                                          </div>
                                      </div>
                                      <div class="modal-body">
                                          <form role="form" action="" method="" class="signin" autocomplete="off">
                                              <div class="row form-group">    
                                                  <div class="input-group col-1 col-sm-1">
                                                    <span class="input-group-addon align-self-center"><i class="fa fa-user"></i></span>
                                                  </div>
                                                  <div class="col-11 col-sm-11">
                                                      <input type="text" class="form-control" name="username" id="username" placeholder="User Name" required="">
                                                  </div> 
                                              </div>
                                              <div class="row form-group "> 
                                                  <div class="input-group col-1 col-sm-1">
                                                    <span class="input-group-addon align-self-center"><i class="fa fa-lock"></i></span>
                                                  </div>
                                                  <div class=" col-11 col-sm-11 ">
                                                      <input type="Password" id="user_pswd" Name="user_pswd" class="form-control" placeholder="Password" required="">
                                                  </div>
                                              </div>
                                              <button type="submit" class="btn">Sign In</button>
                                              <div class="clearfix">
                                                  <label class="pull-left checkbox-inline"><input type="checkbox"><span style="color:red;">&nbsp;&nbsp;&nbsp;Remember me</span></label>
                                                  <a href="#" class="pull-right">Forgot Password?</a>
                                              </div>
                                               <p class="text-center" style="color:floralwhite; margin-bottom: 15px; margin-top: 5px;">Login with your social media account</p>
                                              <div class="text-center social-btn">
                                                  <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                                                  <a href="#" class="btn btn-info"><i class="fa fa-twitter"></i>&nbsp; Twitter</a>
                                                  <a href="#" class="btn btn-danger"><i class="fa fa-google"></i>&nbsp; Google</a>
                                              </div>
                                          </form>
                                          <p class="text-center text-muted small" style="margin-top: 15px;">Don't have an account? <a href="#"data-toggle="modal" data-target="#signup" data-dismiss="modal">Sign up here!</a></p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                          <!-- Sign_in Modal End-->

                        <!-- Modal End-->
                        
                     <!-- Navbar Start -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-fade fixed-top navbar-scroll">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="pic/logo/logo3.png" alt=""/> 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Clearence Event</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Resources
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Carfax</a>
                                <a class="dropdown-item" href="#">Carproof</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Omnivic</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="account" role="button" data-toggle="dropdown">
                                <span> Account </span> <i class="fa fa-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right ">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#signin">Sign In</a>
                                <a class="dropdown-item" id="signup" href="#" data-toggle="modal" data-target="#signup">Register</a>  
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
                        <!-- Navbar End -->
                        
                        <!-- Jumbotron Stated -->
           
        <header class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p class="display-3 text-md-left font-weight-normal" id="header1">LifeLine Care Center</p>
                   <br>
                   <p class="h1" id="header2">Known for our expertise. Chosen for our care</p>
                </div>
            </div>
        </div>
    </header>
       <!-- Jumbotron End -->
       
      <!-- Service Start -->
      <div class="service_area">
        <div class="">
            <div class="row no-gutters">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <img class="icon1" src="pic/service/monitor.png" alt=""/>
                        </div>
                        <h3>Hospitality</h3>
                        <p>We are engaged in providing services such as Online Bed Booking Facility.</p>
                        <center><a href="#" class="btn btn-outline-light" role="button">Book a Bed</a></center>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <img class="icon1" src="pic/service/call.png" alt=""/>
                        </div>
                        <h3>Emergency Care</h3>
                        <p class=" align-self-center">We are engaged in providing 24 X 7 hours ambulance services.</p>
                        <center> <a href="#" class="btn btn-outline-light" role="button">+10 672 356 3567</a></center>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <img class="icon1" src="pic/service/hospital.png" alt=""/>
                        </div>
                        <h3>Chamber Service</h3>
                        <p>We are engaged in providing services such as Online appointment </p>
                        <center><a href="#" class="btn btn-outline-light justify-content-center" role="button">Make an Appointment</a></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
       <!-- Service End -->

       <!-- Welcome to Life line-->
       <div class="lifeline_care my-5">
           <div class="container">
               <div class="row row-content ">
                   <div class="col-md-6 col-lg-6">
                       <div class="welcome_thumb">
                           <div class="img_1">
                               <img src="pic/Index/wel4.jpg" alt=""/>
                           </div>
                           <div class="img_2 d-none d-lg-flex">
                               <img src="pic/Index/wel2.png" alt=""/>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6 col-lg-6">
                       <div class="welcome_Lifeline">
                           <h2>Welcome to LifeLine Health Center</h2>
                           <h3>Best Care For Your <br>
                               Good Health</h3>
                           <p> Established in 2000, LifeLine Health Center, the flagship of Northen India 
                               started as a secondary care unit and gradually developed as a 
                               Tertiary Care Unit over the years. In our 20 years of journey, we 
                               have touched the lives of millions of patients of India and across India.</p>
                           <ul class=" list-unstyled">
                               <li> <i class="fa fa-check-circle-o"></i> 24 hours patient transport vehicle available.</li>
                               <li> <i class="fa fa-check-circle-o"></i> 24 hours ECG services including machine report.</li>
                               <li> <i class="fa fa-check-circle-o"></i> Free reliable quality medicines are available. </li>
                           </ul>
                           <a href="#" class="btn btn-outline-primary" role="button">Learn More</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- End of Welcome -->
              
       <!-- carousel Start -->

       <div id="carousel-start">
               <div id="magicCarousel" class="carousel slide" data-ride="carousel">

                   <!--    Carousel Indicators    -->
                   <ol class="carousel-indicators">
                       <li data-target="#magicCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#magicCarousel" data-slide-to="1"></li>
                       <li data-target="#magicCarousel" data-slide-to="2"></li>
                       <li data-target="#magicCarousel" data-slide-to="3"></li>
                   </ol>

                   <!--    Carousel Slider    -->
                   <div class="carousel-inner my-5 row-content" role="listbox">
                       <div class="carousel-item active">
                           <img src="pic/carousel/covid.webp" class="d-block w-100">                       
                           <div class="carousel-caption">  
                               <p>Due to this coronavirus is running out there… Our doctors are also walking after that damn virus</p>
                           </div> 
                       </div>

                       <div class="carousel-item">
                           <img src="pic/carousel/covid1.jpg" class="d-block w-100">
                           <div class="carousel-caption">
                               <p> COVID-19 is a disease caused by SARS-CoV-2 that can trigger what doctors call a respiratory tract infection. It can affect your upper respiratory tract (sinuses, nose, and throat) or lower respiratory tract.</p>
                           </div> 
                       </div>

                       <div class="carousel-item">
                           <img src="pic/carousel/covid2.jpg" class="d-block w-100">
                           <div class="carousel-caption">
                               <p>Nobody is exempt from life, but everyone can always find positive in everything in worst of the times. </p>
                           </div> 
                       </div>

                       <div class="carousel-item">
                           <img src="pic/carousel/covid3.jpg" class="d-block w-100">
                           <div class="carousel-caption">
                               <p>To keep the body in good health is a duty, otherwise we shall not be able to keep our mind strong and clear.</p>
                           </div> 
                       </div>

                       <!--     Carousel Controls     -->
                       <a href="#magicCarousel" class="carousel-control-prev" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon"></span>
                           <span class="sr-only">Previous</span>
                       </a>
                       <a href="#magicCarousel" class="carousel-control-next" role="button" data-slide="next">
                           <span class="carousel-control-next-icon"></span>
                           <span class="sr-only">Next</span>
                       </a>
                   </div>
               </div>
           </div>
       <!-- Carousel End -->
       
       <!-- Department -->
            
       <!-- DEpartment End -->
        <!-- Script -->
        <script src="jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>