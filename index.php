<html>
    <head>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <style>
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
            <div>
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
        <div class="lifeline_care">
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
        <div class="department" >
            <div class="container">
                <div class="row row-header ">
                    <div class="col-12">
                        <div class="text-center mb-55 department_header">
                            <h2 class="h2 font-weight-normal "> Our Department</h2>
                            <p> At our Health Center, you can experience the best and the most extensive range of diagnostic services in the state.</p>
                        </div>
                    </div>
                </div>
                <div class="row row-content">

                    <div class="col-sm-4 col-xl-4">
                        <div class="depart">
                            <div class="d_img">
                                <img src="pic/department/eye.jpg" alt=""/>
                            </div>
                            <div class="department_content">
                                <a href="#"><h3>Eye Care</h3></a>
                                <p>We have best Ophthalmology eye care Expert</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xl-4">
                        <div class="depart">
                            <div class="d_img">
                                <img src="pic/department/pt.jpg" alt=""/>
                            </div>
                            <div class="department_content">
                                <a href="#"> <h3>Physical Therapy</h3></a>
                                <p>We have best Physical Therapiest Expert</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xl-4">
                        <div class="depart">
                            <div class="d_img">

                                <img src="pic/department/covid.jpg" alt=""/>
                            </div>
                            <div class="department_content">
                                <a href="#"><h3>Covid-19 <span class=" badge badge-danger">New Department</span></h3></a>
                                <p>We Try our best to make India Covid free</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xl-4">
                        <div class="depart">
                            <div class="d_img">
                                <img src="pic/department/dental.jpg" alt=""/>
                            </div>
                            <div class="department_content">
                                <a href="#"><h3>Dentiest</h3></a>
                                <p>Our Health Center have Best Dental Expert</p>
                            </div>
                        </div>
                    </div>

                    <div class=" col-sm-4 col-xl-4">
                        <div class="depart">
                            <div class="d_img">
                                <img src="pic/department/skin.jpg" alt=""/>
                            </div>
                            <div class="department_content">
                                <a href="#"><h3>Skin Surgery</h3></a>
                                <p>Our Health Center have Best skin surgeon</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xl-4">
                        <div class="depart">
                            <div class="d_img">
                                <img src="pic/department/gynecology.jpg" alt=""/>
                            </div>
                            <div class="department_content">
                                <h3><a role="button" href="#">Gynecology</a></h3>
                                <p>we have highly trained Gynecologist with us</p>
                            </div>
                        </div>
                    </div>
                    <div class="offset-4 col-4 offset-4">
                        <a href="#" class="btn btn-outline-primary btn-block" role="button"> More </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Department End -->

        <!-- Feed Start-->

        <div id="carousel-start-1">
            <div class="feed-outer bg-dark">
                <div class="feed-header">
                    <h1 class="text-center">What People Say..</h1>
                </div>
                <div id="feed-carousel" class="carousel slide" data-ride="carousel">

                    <!--    Carousel Indicators    -->
                    <ol class="carousel-indicators">
                        <li data-target="#feed-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#feed-carousel" data-slide-to="1"></li>
                        <li data-target="#feed-carousel" data-slide-to="2"></li>
                    </ol>

                    <!--    Carousel Slider    -->
                    <div class="carousel-inner row-content" role="listbox">
                        <div class="carousel-item  offset-2 col-8  active">
                            <div class="feed_info text-center">
                                <div class="quote">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item  offset-2 col-8 ">
                            <div class="feed_info text-center">
                                <div class="quote">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item  offset-2 col-8 ">
                            <div class="feed_info text-center">
                                <div class="quote">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                        <!--     Carousel Controls     -->
                        <a href="#feed-carousel" class="carousel-control-prev" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a href="#feed-carousel" class="carousel-control-next" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feed End-->

        <!-- doctor start -->

        <div class="doctor bg-fade">
            <div class="container">
                <div class="row row-header">
                    <div class="col-12">
                        <div class="doctor_header text-center mb-55">
                            <h2 class="h2 font-weight-normal "> Our Expert</h2>
                            <p> At our Health Center, you can experience the best and the most Experience Doctor, who are Ready for You.</p>
                        </div>
                    </div>
                </div>
                <div class="row row-content">        
                    <div class="col-12 col-md-4">
                        <div class="doctor_img">
                            <div class="doctor_thumb">
                                <img src="pic/doctor/1.png" alt=""/>
                            </div>
                            <div class="doctor_content">
                                <h3>Dr Brick</h3>
                                <p>Surgeon</p>
                            </div>
                            <div class="dctr_sm offset-1">
                                <h5>
                                    <a href="#"><i class="fa fa-facebook offset-2"></i></a>
                                    <a href="#"><i class="fa fa-twitter offset-2"></i></a>
                                    <a href="#"><i class="fa fa-instagram offset-2"></i></a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="doctor_img">
                            <div class="doctor_thumb">
                                <img src="pic/doctor/7.png" alt=""/>
                            </div>
                            <div class="doctor_content">
                                <h3> Dr Plack</h3>
                                <p>Gynecologist</p>
                            </div>
                            <div class="dctr_sm offset-1">
                                <h5>
                                    <a href="#"><i class="fa fa-facebook offset-2"></i></a>
                                    <a href="#"><i class="fa fa-twitter offset-2"></i></a>
                                    <a href="#"><i class="fa fa-instagram offset-2"></i></a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="doctor_img">
                            <div class="doctor_thumb">
                                <img src="pic/doctor/2.png" alt=""/>
                            </div>
                            <div class="doctor_content">
                                <h3>Dr Ham</h3>
                                <p>Dentiest</p>
                            </div>
                            <div class="dctr_sm offset-1">
                                <h5>
                                    <a href="#"><i class="fa fa-facebook offset-2"></i></a>
                                    <a href="#"><i class="fa fa-twitter offset-2"></i></a>
                                    <a href="#"><i class="fa fa-instagram offset-2"></i></a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="offset-4 col-4 offset-4">
                        <a href="#" class="btn btn-outline-primary btn-block" role="button"> More </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- doctor End -->
        
        <!-- Footer -->
        <footer class="page-footer font-small pt-4">
            <div class="footer_bg">
                <div class="container text-center text-md-left footer-head">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1 footer-text">

                            <!-- Content -->
                            <img src="pic/logo/logo3.png" alt=""/>
                            <p>Established in 2000, LifeLine Health Center, the flagship of Northen
                                India started as a secondary care unit and gradually developed as 
                                a Tertiary Care Unit over the years. In our 20 years of journey, 
                                we have touched the lives of millions of patients of India and 
                                across India.</p>

                        </div>
                        <!-- Grid column -->

                        <hr class="clearfix w-100 d-md-none">

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mb-5 mt-4 footer-text">About</h5>

                            <ul class="list-unstyled  footer-link footer-text">
                                <li>
                                    <p class="sel">
                                        <a href="#" class="active" >Home</a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#!">Department</a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#!">Doctor</a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#!">Contact Us</a>
                                    </p>
                                </li>
                            </ul>

                        </div>
                        <hr class="clearfix w-100 d-md-none">

                        <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1 footer-link footer-text ">

                            <h5 class="font-weight-bold text-uppercase mb-5 mt-4 ">Address</h5>

                            <ul class="list-unstyled">
                                <li>
                                    <p>
                                        <i class="fa fa-home mr-3"></i>Nalli Gaya,Bihar,India</p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-envelope mr-3"></i> Lifeline@Care.com</p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
                                </li>
                            </ul>

                        </div>
                        <hr class="clearfix w-100 d-md-none">
                        <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

                            <h5 class="font-weight-bold text-uppercase mb-5 mt-4 footer-text">Follow Us</h5>

                            <a type="button" class="btn-floating col-2 col-sm-12">
                                <h1><i class="fa fa-facebook-f"></i></h1>
                            </a>
                            <a type="button" class="btn-floating col-2 col-sm-12">
                                <h1><i class="fa fa-twitter"></i></h1>
                            </a>
                            <a type="button" class="btn-floating col-2 col-sm-12">
                                <h1><i class="fa fa-google"></i></h1>
                            </a>
                            <a type="button" class="btn-floating col-2 col-sm-12">
                                <h1><i class="fa fa-instagram"></i></h1>
                            </a>
                        </div>
                    </div>
                </div>
            <div class="footer-copyright text-center py-3 footer-text">© 2000 Copyright
            </div>
            <!-- Copyright -->
            </div>
        </footer>
        <!-- Footer End -->
        
        <!-- Script -->
        <script src="jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>