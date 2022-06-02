<?php
$database = include('config.php');
$newsletterErr = "";
$newsletter = "";
if(isset($_POST["newsletterIndex"]))
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["newsletter1"])) {
            $newsletterErr = "Email is required";
        } else {
            $newsletter = $_POST['newsletter1'];
        }
    
        if($newsletter != "")
        {
            $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $name = "Corporate Business Class";
            $email = $database['EmailTo'];
            $message = '<html><body><table>';
            $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Email </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$newsletter.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Email </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$email.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Company Name </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$company.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Role at the company </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$role.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Total trips per month </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$trip.'</td></tr>';
            // $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Type of travel </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$travel.'</td></tr>';
            $message .= '</table></body></html>';
            
            $to = $database['EmailTo'];
            $subject = 'Newsletter query';
            
                if (mail ($to, $subject, $message, $headers)) {
                    echo '<p>Your message has been sent!</p>';
                    //header("location:index.html");
                } else {
                    echo '<p>Something went wrong, go back and try again!</p>';
                    //header("location:index.html");
                }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Corporate Business Class</title>
    <link rel="icon" type="image/png" href="Images/travel-03.png">
    <!-- ==================Start Css Link===================== -->
<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300i,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/datepicker.min.css">
<link rel="stylesheet" href="assets/css/OverlayScrollbars.min.css">
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/icofont.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/slick.css">
<link rel="stylesheet" href="assets/css/slick-theme.css">
<link rel="stylesheet" href="assets/css/slider-range.css">
<link rel="stylesheet" href="assets/css/select2.min.css">
<link rel="stylesheet" href="assets/css/tippy.css">
<link rel="stylesheet" href="assets/css/app.css">
<!-- ==================End Css Link===================== -->




    <!--[if lt IE 9]>
<script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>


<body>


  <!-- 
        ================== Header Area Start===================
     -->
    
  <div class="rt-preloder">
    <div class="preloder-box">
        <img src="assets/images/all-img/preloder.svg" alt="preloder image" draggable="false">
    </div><!-- /.preloder-box -->
</div><!-- /.rt-preloder -->

  <header class="rt-site-header  rt-fixed-top white-menu">
    <!-- <div class="top-header d-none d-md-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <ul class="text-center text-md-left top-message">
                    <li> <i class="icofont-headphone-alt"></i>Support</li>
                    <li><a href="mailto:info@emigrar.com "><i class="icofont-email"></i>info@emigrar.com</a></li>
                </ul>
            </div> -->
            <!-- end top header single -->
            <!-- <div class="col-md-6">
                <ul class="text-center text-md-right top-social">
                    <li><a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe-americas"></i>Englishs</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">English</a>
                            <a class="dropdown-item" href="#">French</a>
                            <a class="dropdown-item" href="#">Trukis</a>
                        </div>
                        </li>
                    <li><a href="#"><i class="fas fa-briefcase"></i>My Trips</a></li>
                    <li><a href="#" data-target="#rtmodal-1" data-toggle="modal"><i class="far fa-user-circle"></i>Sign in | Join</a></li>
                </ul>
            </div> -->
            <!-- end top header single -->
        <!-- </div>
    </div>
</div>  -->
<!-- end top header -->


    <div class="main-header rt-sticky">
      <nav class="navbar">
        <div class="container">
          <a href="index.php" class="brand-logo"><img src="Images/travel-01.png" alt="" width="250"></a>
          <a href="index.php" class="sticky-logo"><img src="Images/travel-01.png" alt="" width="250"></a>
          <div class="ml-auto d-flex align-items-center">
            

<div class="main-menu">
    <ul>
        <li class="current-menu-item"><a href="index.php">Home</a></li>
        <li class="current-menu-item d-none-desktop"><a href="agent.php">Agent</a></li>
        <!-- <li><a href="trip-1.html">Trip package</a></li>
        <li><a href="service-1.html">Services</a></li>
        <li class="menu-item-has-children"><a href="#">Pages</a>
            <ul class="sub-menu">
                <li class="menu-item-has-children"><a href="#">Home Pages</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Home One</a></li>
                        <li><a href="index-02.html">Home Two</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Hotel Pages</a>
                    <ul class="sub-menu">
                        <li><a href="hotel-1.html">Hotel One</a></li>
                        <li><a href="hotel-2.html">Hotel Two</a></li>
                        <li><a href="hotel-3.html">Hotel Three</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Flight Pages</a>
                    <ul class="sub-menu">
                        <li><a href="flight-1.html">Flight One</a></li>
                        <li><a href="flight-details.html">Flight Two</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">train Pages</a>
                    <ul class="sub-menu">
                        <li><a href="train-1.html">train One</a></li>
                        <li><a href="train-2.html">train Two</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">trip Pages</a>
                    <ul class="sub-menu">
                        <li><a href="trip-1.html">trip One</a></li>
                        <li><a href="trip-2.html">trip Two</a></li>
                        <li><a href="trip-3.html">trip Three</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">car Pages</a>
                    <ul class="sub-menu">
                        <li><a href="car-1.html">car One</a></li>
                        <li><a href="car-2.html">car Two</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">blog Pages</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">blog</a></li>
                        <li><a href="blog-grid.html">blog-grid</a></li>
                        <li><a href="single-blog.html">blog-single 1</a></li>
                        <li><a href="singleblog-lsidebar.html">blog-single 2</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Others Pages</a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About</a></li>
                        <li><a href="service-1.html">service</a></li>
                        <li><a href="afflite.html">afflite</a></li>
                        <li><a href="help.html">help</a></li>
                        <li><a href="how-work.html">how-work</a></li>
                        <li><a href="contact.html">contact</a></li>
                        <li><a href="404.html">404</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li> <a href="blog.html">Blog</a></li> -->
    
    </ul>
    <div class="mobile-menu">
        <div class="menu-click">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div><!-- end main menu -->
            <div class="rt-nav-tolls d-flex align-items-center">
    <span class="d-md-inline d-none"><a href="agent.php" class="rt-btn btn-white1 btn-agent rt-rounded text-uppercase rt-Bshadow-1 rt-pt-10 rt-pb-10 rt-pl-35 rt-pr-35">Agent</a></span>
</div>
    
          </div>
        </div>
      </nav>
    </div><!-- /.bootom-header -->

  </header>


<!-- Modal -->
<div class="modal fade" id="rtmodal-1" tabindex="-1" role="dialog" aria-labelledby="rtmodal-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered rt-lgoinmodal " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="rt-modal-headr rt-mb-20 one">
                    <img src="assets/images/logo/Logo-icon.png" alt="modal logo" draggable="false">
                    <h4>Login in to Emigrar</h4>
                    <p>Log in to get in the moment updates on the things
                        that interest you.</p>
                </div><!-- /.rt-modal-headr -->
                <div class="rt-modal-headr rt-mb-20 two">
                    <img src="assets/images/logo/Logo-icon.png" alt="modal logo" draggable="false">
                    <h4>Create your Account</h4>
                    <p>Log in to get in the moment updates on the things
                        that interest you.</p>
                </div><!-- /.rt-modal-headr -->
                <div class="rt-modal-input one">
                    <form action="#" class="rt-form">
                        <input type="text" class="form-control pill rt-mb-15" placeholder="User name">
                        <input type="password" class="form-control pill rt-mb-15" placeholder="Password">
                        <div class="form-group forgot-pass">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheckss">
                                <label class="form-check-label" for="gridCheckss">
                                     Remember Password
                                </label>
                            </div><!-- ./orm-group -->
                        </div>
                            <input type="submit" class="rt-btn rt-gradient pill d-block text-uppercase " value="Log In">
                    </form>
                    <div class="ac-register">
                        <span>Don’t have an account? <a href="#" class="open-creatac">Sign Up Now <i class="icofont-double-right"></i></a></span>
                    </div><!-- /.ac-register -->
                </div><!-- /.rt-modal-input -->
                <div class="rt-modal-input two">
                    <form action="#" class="rt-form">
                        <input type="text" class="form-control pill rt-mb-15" placeholder="User name">
                        <input type="password" class="form-control pill rt-mb-15" placeholder="Enter your mail address">
                        <input type="password" class="form-control pill rt-mb-15" placeholder="Password">
                        <div class="form-group forgot-pass">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck333">
                                <label class="form-check-label" for="gridCheck333">
                                    I'd like to hear about promos, new products,and much more!
                                </label>
                            </div><!-- ./orm-group -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck222">
                                <label class="form-check-label" for="gridCheck222">
                                    By clicking "Sign up" you agree to our Terms of Service and Privacy Policy
                                </label>
                            </div><!-- ./orm-group -->
                        </div>
                            <input type="submit" class="rt-btn rt-gradient pill d-block text-uppercase " value="Log In">
                    </form>
                    <div class="ac-register">
                        <span>Already have an account?<a href="#">LOGIN <i class="icofont-double-right"></i></a></span>

                    </div><!-- /.ac-register -->
                </div><!-- /.rt-modal-input -->
                <div class="rt-modal-footer">
                    <span>Or</span>
                    <h4>Sign Up with social media</h4>
                    <ul class="rt-social rt-circle-style2">
                
                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                    </ul>
                </div><!-- /.rt-modal-footer -->
            </div>
        </div>
    </div>
</div>





<!-- 
    !============= Banner Area Start ===========!
 -->


<section class="rt-banner-area">
    <div class="single-rt-banner rt-banner-height" style="background-image: url(Images/Artboard–3.png)">
        <div class="container">
            <div class="row rt-banner-height align-items-center">
                <div class="col-lg-9">
                    <div class="rt-banner-content">
                        <h1 class="wow fade-in-bottom rt-mt-40" data-wow-duration="1s" data-wow-delay="0.5s">
                            Explore <br>
                            The World!
                        </h1>
                        <p class="wow fade-in-top rt-mt-30">
                           <strong>TravelEagle</strong> combines the latest technology and <br/>human expertise to book the best travel for your team.<br/>
                           We manage travel for 10K+ people from 4K+ companies.
                        </p>
                    
        <!-- <div class="rt-banner-searchbox standard-search wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="1s">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane show active" id="rt-item_a_first" role="tabpanel" aria-labelledby="rt-item_a_first">
                    <form action="#">
                        <div class="rt-radio-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">One-way</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline2" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Round-trip</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline3" name="customRadioInline3" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline3">Multi-city</label>
                            </div>
                            <div class="dropdown form-check-inline rt-searchlink mr-md-5">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    1 Adult
                                </a>
            
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Room one</a>
                                    <a class="dropdown-item" href="#">Room two</a>
                                    <a class="dropdown-item" href="#">Room three</a>
                                </div>
                            </div> -->
                            <!-- ./dropdown -->
                            <!-- <div class="dropdown form-check-inline rt-searchlink">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Economy
                                </a>
            
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                    <a class="dropdown-item" href="#">Room one</a>
                                    <a class="dropdown-item" href="#">Room two</a>
                                    <a class="dropdown-item" href="#">Room three</a>
                                </div>
                            </div> -->
                            <!-- ./dropdown -->
                        <!-- </div> -->
                        <!-- /.radio-group -->
                        <!-- <div class="rt-input-group">
                            <div class="single-input  col-rt-in-3">
                                <select class="rt-selectactive banner-select" name="from" style="width: 100%">
                                    <option value="1">from</option>
                                    <option value="2">Alaska</option>
                                    <option value="3">Bahamas</option>
                                    <option value="4">Bermuda</option>
                                    <option value="5">Canada</option>
                                    <option value="6">Caribbean</option>
                                    <option value="7">Europe</option>
                                    <option value="8">Hawaii</option>
                                </select>
                                <span class="input-iconbadge"><img src="assets/images/icons-image/s_icon_1.png" alt="" draggable="false"></span>
                            </div> -->
                            <!-- /.single-input -->
                            <!-- <div class="single-input  col-rt-in-3">
                                <select class="rt-selectactive banner-select" name="to" style="width: 100%">
                                    <option value="1">To</option>
                                    <option value="2">Alaska</option>
                                    <option value="3">Bahamas</option>
                                    <option value="4">Bermuda</option>
                                    <option value="5">Canada</option>
                                    <option value="6">Caribbean</option>
                                    <option value="7">Europe</option>
                                    <option value="8">Hawaii</option>
                                </select>
                                <span class="input-iconbadge"><img src="assets/images/icons-image/s_icon_2.png" alt="" draggable="false"></span>
                            </div> -->
                            <!-- /.single-input -->
                            <!-- <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart">
                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                            </div> -->
                            <!-- /.single-input -->
                            <!-- <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control rt-date-picker has-icon" placeholder="Return">
                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                            </div> -->
                            <!-- /.single-input -->
                            <!-- <div class="single-input  col-rt-in-1">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </div> -->
                            <!-- /.single-input -->
                        <!-- </div> -->
                        <!-- /.rt-input-group -->
                    <!-- </form> -->
                    <!-- ./ form -->
                <!-- </div>
                <div class="tab-pane  rtIncative" id="rt-item_a_second" role="tabpanel" aria-labelledby="rt-item_a_second">
                    <form action="#">
                        <div class="rt-radio-group">
                            <div class="dropdown form-check-inline rt-searchlink">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink24" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Guestes per room
                                </a>
                        
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink24">
                                    <a class="dropdown-item" href="#">Room one</a>
                                    <a class="dropdown-item" href="#">Room two</a>
                                    <a class="dropdown-item" href="#">Room three</a>
                                </div>
                            </div> -->
                            <!-- ./dropdown -->
                        <!-- </div> -->
                        <!-- /.radio-group -->
                        <!-- <div class="rt-input-group">
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control" placeholder="destination">
                               
                            </div> -->
                            <!-- /.single-input -->
                            <!-- <div class="single-input  col-rt-in-3">
                               <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart">
                               <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                            </div> -->
                            <!-- /.single-input -->
                            <!-- <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control rt-date-picker has-icon" placeholder="Return">
                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                            </div> -->
                            <!-- /.single-input -->
                            <!-- <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control" placeholder="keywords(optional)">
                            </div> -->
                            <!-- /.single-input -->
                            <!-- <div class="single-input  col-rt-in-1">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </div> -->
                            <!-- /.single-input -->
                        <!-- </div> -->
                        <!-- /.rt-input-group -->
                    <!-- </form> -->
                    <!-- ./ form -->
                <!-- </div>
                <div class="tab-pane  rtIncative" id="rt-item_a_third" role="tabpanel" aria-labelledby="rt-item_a_third">
                    <form action="#">
                    
                    <div class="rt-input-group">
                        <div class="single-input  col-rt-in-3">
                            <input type="text" class="form-control" placeholder="destination">
                        </div> -->
                        <!-- /.single-input -->
                        <!-- <div class="single-input  col-rt-in-3">
                            <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart">
                            <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                        </div> -->
                        <!-- /.single-input -->
                        <!-- <div class="single-input  col-rt-in-3">
                            <input type="text" class="form-control rt-date-picker has-icon" placeholder="Return">
                            <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                        </div> -->
                        <!-- /.single-input -->
                        <!-- <div class="single-input  col-rt-in-3">
                            <input type="text" class="form-control" placeholder="keywords(optional)">
                        </div> -->
                        <!-- /.single-input -->
                        <!-- <div class="single-input  col-rt-in-1">
                            <button type="submit"><i class="icofont-search"></i></button>
                        </div> -->
                        <!-- /.single-input -->
                    <!-- </div> -->
                    <!-- /.rt-input-group -->
                    <!-- </form> -->
                    <!-- ./ form -->
                <!-- </div>
                <div class="tab-pane  rtIncative" id="rt-item_a_four" role="tabpanel" aria-labelledby="rt-item_a_four">
                    <form action="#">
                    <div class="rt-input-group">
                        <div class="single-input  col-rt-in-3">
                            <select class="rt-selectactive banner-select" name="from" style="width: 100%">
                                <option value="1">from</option>
                                <option value="2">Alaska</option>
                                <option value="3">Bahamas</option>
                                <option value="4">Bermuda</option>
                                <option value="5">Canada</option>
                                <option value="6">Caribbean</option>
                                <option value="7">Europe</option>
                                <option value="8">Hawaii</option>
                            </select>
                        </div> -->
                        <!-- /.single-input -->
                        <!-- <div class="single-input  col-rt-in-3">
                            <select class="rt-selectactive banner-select" name="to" style="width: 100%">
                                <option value="1">To</option>
                                <option value="2">Alaska</option>
                                <option value="3">Bahamas</option>
                                <option value="4">Bermuda</option>
                                <option value="5">Canada</option>
                                <option value="6">Caribbean</option>
                                <option value="7">Europe</option>
                                <option value="8">Hawaii</option>
                            </select>
                        </div> -->
                        <!-- /.single-input -->
                        <!-- <div class="single-input  col-rt-in-3">
                            <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart">
                            <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                        </div> -->
                        <!-- /.single-input -->
                        <!-- <div class="single-input  col-rt-in-3">
                            <input type="text" class="form-control" placeholder="train no( opt)">
                        </div> -->
                        <!-- /.single-input -->
                        <!-- <div class="single-input  col-rt-in-1">
                            <button type="submit"><i class="icofont-search"></i></button>
                        </div> -->
                        <!-- /.single-input -->
                    <!-- </div> -->
                    <!-- /.rt-input-group -->
                    <!-- </form> -->
                    <!-- ./ form -->
                <!-- </div>
            </div>
        </div> -->
        <!-- /.rt-banner-searchbox -->

    
        <!-- <ul class="nav serachnavs wow fade-in-bottom" id="rtMultiTab" role="tablist" data-wow-duration="1.5s" data-wow-delay="1.5s">
            <li class="nav-item">
                <a class="nav-link active" id="first-tab" data-target="#rt-item_b_first" data-secondary="#rt-item_a_first"
                    data-toggle="tab" href="#first" role="tab" aria-controls="first-tab" aria-selected="false">
                    <i class="icofont-airplane"></i>
                    <span>Flights</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive" id="second-tab" data-target="#rt-item_b_second" data-secondary="#rt-item_a_second"
                    data-toggle="tab" href="#second" role="tab" aria-controls="second-tab" aria-selected="true">
        
                    <i class="icofont-hotel"></i>
                    <span>Hotels</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive" id="third-tab" data-target="#rt-item_b_thrid" data-secondary="#rt-item_a_third"
                    data-toggle="tab" href="#third" role="tab" aria-controls="third-tab" aria-selected="false">
                    <i class="icofont-car-alt-4"></i>
                    <span>Cars</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive" id="four-tab" data-target="#rt-item_b_four" data-secondary="#rt-item_a_four"
                    data-toggle="tab" href="#four" role="tab" aria-controls="four-tab" aria-selected="false">
                    <i class="icofont-train-line"></i>
                    <span>Trains</span>
                </a>
            </li>
        </ul> -->
        <div class="d-flex align-items-center">
            <span class="d-md-inline rt-mb-50">
                <!-- <a href="" class="rt-btn rt-rounded rt-rounded-1 rt-Bshadow-1 btn-blue3">Learn More</a> -->
                <a href="welcome.php" class="rt-btn rt-rounded rt-rounded-1 rt-Bshadow-1 btn-blue4 text-center getstarted-btn btn-mt-30-sm">Get Started Here</a>
                <h6 class="rt-mt-12 f-size-12"><a href="welcome.php#personal" class="btn-hover-blue">Not a company? Book a personal trip here.</a></h6>
            </span>
        </div>

                    </div><!-- end banner content -->
                </div><!-- end column -->
            </div><!-- end row -->
            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-30-n pos-rel">
                        <img src="Images/Artboard–23.png" style="width: 100%; height: 200px;">
                        <span class="d-md-inline d-none getstarted-btn" style="position: absolute;top: 58px; left: 40%;">
                            <a href="welcome.php" class="rt-btn rt-rounded rt-rounded-1 rt-Bshadow-1 btn-white1">Get Started Here</a>
                            <p class="text-white">Get Started Now and enjoy the benefits</p>
                        </span>
                    </div>
                </div>
            </div> -->
        </div><!-- end container -->
    </div><!-- end single rt banner -->
</section>

<!-- <div class="spacer-top"></div> -->
<!-- 
    ========= Counter Start ========================
 -->
<div class="counter-area">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-4 col-md-6 col-12">
                <div class="media counter-box-1 align-items-center wow fadeInUp">
                    <img src="Images/Artboard–10.png" alt="counter_iocn" draggable="false">
                    <div class="media-body">
                        <h5>Partners Served</h5>
                        <h6><span class="counter">1,00</span><span>+</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 col-12" >
                <div class="media counter-box-1 align-items-center wow fadeInUp" data-wow-duration="1.5s">
                    <img src="Images/Artboard–11.png" alt="counter_iocn" draggable="false">
                    <div class="media-body">
                        <h5>Trusted Members</h5>
                        <h6><span class="counter">2000</span><span>+</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="media counter-box-1 align-items-center wow fadeInUp" data-wow-duration="2s">
                <img src="Images/Artboard–12.png" alt="counter_iocn" draggable="false">
                    <div class="media-body">
                        <h5>Happy Customers</h5>
                        <h6><span class="counter">10000</span><span>+</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
    
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.counter -->

<!-- 
    ===========Services Area start==========
 -->
<section class="emigr-services-area rtbgprefix-contain" style="background-image: url(assets/images/backgrounds/dotbg.png)">
    <div class="spacer-bottom"></div><!-- /.spacer-bottom -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center mx-auto">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>Join our Community</span>
                        How It Works
                    </h2><!-- /.rt-section-title -->
                    <!-- <p>Our thoughtful team of knowledgeable experts are here to take care of every need,
                        from the second you contact us to when you return</p> -->
                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row">
            <div class="col-lg-4 col-md-6 mx-auto text-center">
                <div class="services-box-1 wow fade-in-bottom how-it-works-section">
                    <div class="services-thumb">
                        <img src="Images/Artboard–6.png" alt="" draggable="false" width="90">
                    </div><!-- /.services-thumb -->
                    <h4>Register your team</h4>
                    <p>No contracts, no sign-up fees. Once registered, your team can offload all travel management work to TravelEagle.</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 mx-auto text-center">
                <div class="services-box-1 wow fade-in-bottom how-it-works-section" data-wow-duration="1.5s">
                    <div class="services-thumb">
                        <img src="Images/Artboard–7.png" alt="" draggable="false" width="90">
                    </div><!-- /.services-thumb -->
                    <h4>We manage your travel</h4>
                    <p>We don't just book your travel, we optimize for price, convenience, comfort, loyalty benefits, upgrades and more.</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 mx-auto text-center">
                <div class="services-box-1 wow fade-in-bottom how-it-works-section" data-wow-duration="2s">
                    <div class="services-thumb">
                    <img src="Images/Artboard–8.png" alt="" draggable="false" width="90">
                    </div><!-- /.services-thumb -->
                    <h4>Travel Better for less</h4>
                    <p>Our experts are the best travel hackers on the planet. You will travel better for less effort, time and money.</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <!-- <div class="spacer-bottom"></div> -->
    <!-- /.spacer-bottm -->
</section>

<!-- 
    =============why choose us area start==========
 -->

 <div class="play-video rtbgprefix-full bg-hide-md video-section-3 h-250" style="background-image: url(Images/Artboard–13.png); height: 525px;">
 </div>
 <section class="rt-cta-area mt-280 video-section-3">
    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center rt-pt-70 rt-pb-60 rt-pl-70 rt-pr-20" style="background:url(Images/Artboard–22.png) no-repeat; background-position: center; border-radius: 10px;box-shadow: 23px 18px 28px -9px rgba(170,170,170,1);">
                        <div class="row">
                            <div class="col-md-12 text-center rt-mb-30">
                                <h4><strong>Why choose us?</strong></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="display-inline">
                                    <div class="w-110">
                                        <img src="Images/Artboard–15.png" />
                                    </div>
                                    <div>
                                        <p><strong>A Complete Solution</strong></p>
                                        <p>We search, book, analyze and report on everything: flights, hotels, cars and more.</p>
                                    </div>
                                </div>
                                 <div class="display-inline">
                                    <div class="w-110">
                                        <img src="Images/Artboard–17.png" />
                                    </div>
                                    <div>
                                        <p><strong>Global 24/7 Support</strong></p>
                                        <p>We have genuine technical experts on five continents providing real-time support.</p>
                                    </div>
                                </div>
                                 <div class="display-inline">
                                    <div class="w-110">
                                        <img src="Images/Artboard–19.png" />
                                    </div>
                                    <div>
                                        <p><strong>Miles & Upgrades</strong></p>
                                        <p>We proactively maximize your loyalty benefits for every trip and transaction.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="display-inline">
                                    <div class="w-110">
                                        <img src="Images/Artboard–16.png"/>
                                    </div>
                                    <div>
                                        <p><strong>Maximum Savings</strong></p>
                                        <p>We use deep technical analysis to regularly beat retail prices, guaranteed!</p>
                                    </div>
                                </div>
                                 <div class="display-inline">
                                    <div class="w-110">
                                        <img src="Images/Artboard–18.png"/>
                                    </div>
                                    <div>
                                        <p><strong>One-Click Amendments</strong></p>
                                        <p>We handle all changes and cancellations. No more calls to airlines or hotels.</p>
                                    </div>
                                </div>
                                 <div class="display-inline">
                                    <div class="w-110">
                                        <img src="Images/Artboard–20.png"/>
                                    </div>
                                    <div>
                                        <p><strong>Web, Email & Phone</strong></p>
                                        <p>We manage your travel on our cloud-based platform, also over email and phone.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <img src="Images/Artboard–29.png" style="width: 60%" />
                                </div>
                            </div>
                        </div>
                    </div><!-- /.inner-content -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    
    </section>

<!-- 
    ============= video area start==========
 -->

 <div class="play-video rtbgprefix-full bg-hide-md video-section-4 h-350" style="background-image: url(Images/Artboard–14.png); height: 700px;">
</div>
<div class="video-inner-section rtbgprefix-full bg-hide-md video-section-4 mt-250">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="play-video-box rtbgprefix-cover" style="background-image: url(Images/Artboard–23.png)">
                    <div class="text-center mx-auto text-white">
                            <div class="rt-section-title-wrapper">
                                <h5 class="rt-section-title">
                                    <span>Save Time, Save Money</span>
                                    New Standard in Corporate Level
                                </h3><!-- /.rt-section-title -->
                                <!-- <p>Our thoughtful team of knowledgeable experts are here to take care of every need,
                                    from the second you contact us to when you return</p> -->
                            </div><!-- /.rt-section-title-wrapper- -->
                        </div><!-- /.col-lg-12 -->
                    <!-- <h2 class="rt-section-title">
                            <span>Save Time, Save Money</span>
                            New Standard in Corporate Level
                        </h2> -->
                        <!-- /.rt-section-title -->
                        <div class="text-center mt-5">
                                <span class="d-md-inline d-none">
                                    <a href="" class="rt-btn rt-rounded rt-rounded-1 rt-Bshadow-1 btn-blue2">Join for Free</a>
                                    <a href="" class="rt-btn rt-video-light playVideo"></a>
                                </span>
                            </div>
                    
                </div><!-- /.play-video-box -->
            </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>

<div class="spacer-top"></div><!-- /.spacer-top -->

<!-- 
    ============= Testimonilas area start==========
 -->
 <section class="testimonials-area" data-scrollax-parent="true">
        <div class="rt-shape-emenetns-1" style="background-image: url(assets/images/shape-elements/shape-4.png); transform:  rotate(-170deg)"
            data-scrollax="properties: { translateY: '-140px' }"></div><!-- /.rt-shape-emenetns-1 -->
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto text-center">
                    <div class="rt-section-title-wrapper">
                        <h2 class="rt-section-title text-blue1 f-size-40">
                            <!-- <span>testimonials</span> -->
                            What Our Customers Say
                        </h2><!-- /.rt-section-title -->
                        <!-- <p>
                            We have many happy customers that have booked holidays with us.Some Impresions from our
                            Customers! Please read some of the lovely things our Customers say about us.
                        </p> -->
                    </div><!-- /.rt-section-title-wrapper -->
                </div><!-- /.col-lg-9 -->
            </div><!-- /.row -->
            <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="testimoninal-active-1">
                        <div class="row">
                            <div class="col-lg-6 text-right">
                                <img src="Images/Artboard–30.png" width="350" style="padding-right: 10px"/>
                            </div>
                            <div class="col-lg-6 rt-pr-200">
                                <p class="f-size-14 rt-pb-20 rt-mt-60">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut...</p>
                                <p class="f-size-15 rt-mb-0"><strong class="text-blue1">Catherine Arnold</strong></p>
                                <p class="f-size-13 l-spacing-4"><strong class="text-blue1">CEO - PANOPLY</strong></p>
                            </div>
                        </div>
                        <img src="Images/Artboard–9.png" class="mt-200 v-hidden-sm">
                    </div><!-- /.testimoninal-active-1 -->
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
            <!-- <div class="rt-divider style-one rt-margin-top"></div> -->
            <!-- /.divider -->
        </div><!-- /.containe -->
    </section>

    <div class="rtbgprefix-full bg-hide-md video-section-4" style="background-image: url(Images/Artboard–28.png); height: 300px;">
    </div>
    <section class="rt-cta-area mt-200 video-section-3 manifesto-section pos-rel">
    
            <div class="container">
                <div class="text-center text-white rt-mb-40">
                    <h3><strong>Manifesto</strong></h3>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="rt-pt-70 rt-pb-60 rt-pl-80 rt-pr-80 rt-ml-60 rt-mr-60" style="background-color: #ffffff; border-radius: 10px;box-shadow: 0 5px 10px 0 rgba(55, 94, 246, .2);">
                            <div class="text-center">
                                <div class="manifesto-img">
                                    <img src="Images/demostration-01.png" height="70" />
                                </div>
                            </div>
                            <div>
                                <p>Travel is complex. But where there is complexity, there is great hidden value.</p>
                                <p>Business travelers get access to more of this hidden value than leisure travelers. They spend more money and travel more often, which is fuel for opportunity. Airline and hotel loyalty programs are designed specifically for these frequent travelers.</p>
                                <p>With so many opportunities to save and travel better, you would expect to see many corporate travel managers delivering exceptional value. But you don’t.</p>
                                <p>No other corporate travel manager guarantees savings over retail.</p>
                                <p>They also do not help with credit card rewards, loyalty benefits, airline miles, hotel points, visa requirements, localized emergency support or airport lounge access.</p>
                                <p>The industry is in this state because corporate travel managers rely on hidden commissions and cannot afford to help in situations that do not pay commissions.</p>
                                <p>For example, if Kayak has the best price for an itinerary, but Kayak will not pay commissions, a travel manager will not offer the Kayak price. Instead, they will provide a higher price from a source that will pay commissions.</p>
                                <p>The same applies to expertise. Even if customers can benefit from credit card rewards, loyalty programs, and elite status, a travel manager will not build expertise in these areas because they do not pay commissions. It is an unfortunate situation.</p>
                                <p>At TravelEagle, we are solving this by being transparent with fees. We focus purely on becoming genuine experts in travel and maximizing the value we deliver to you.</p>
                                <div class="text-center rt-mt-30">
                                    <a href="welcome.php" class="rt-btn rt-rounded rt-rounded-1 rt-Bshadow-1 btn-blue1">Get Started</a>
                                </div>
                            </div>
                        </div><!-- /.inner-content -->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="manifesto-bt-img">
                <img src="Images/Artboard–26.png"/>
            </div>
        </section>
        

<!-- 
    ============Deal Area Start===============
 -->


 <!-- <section class="deal-area   rtbgprefix-full bg-hide-md" style="background-image: url(assets/images/backgrounds/bgshapes_1.png)">
    <div class="container-fluid p-0">
       <div class="deal-carosel-active owl-carousel">
            <div class="row single-deal-carosel align-items-center">
                <div class="col-lg-5">
                    <div class="deal-bg" style="background-image: url(assets/images/all-img/deal-bg.jpg)">
                        <div class="inner-content">
                            <h4 data-animation="fadeInDown" data-duration=".2s" data-delay=".4s">14 Day Classic Tour of Thailand & Beaches</h4>
                            <p data-animation="fade-in-bottom" data-duration=".2s" data-delay=".4s">Grab a promo code for extra savings up to 75% on discounted hotels!</p>
                        </div> -->
                    <!-- </div> -->
                <!-- </div> -->
                <!-- <div class="col-lg-7">
                    <div class="rt-section-title-wrapper text-white" data-animation="fadeIn" data-duration=".4s" >
                        <h2 class="rt-section-title">
                            <span>Take a Look at Our</span>
                            Today's Top Deals
                        </h2> -->
                        <!-- /.rt-section-title -->
                        <!-- <p>Find great experiences, trips, and activities at fantastic prices around the globe.</p>
                        <div class="section-title-spacer"></div> -->
                        <!-- /.section-title-spacer -->
                        <!-- <div class="deal-bottom-content">
                            <div class="rating-box">
                                <span class="d-block">EXCELLENT</span>
                                <span class="d-block"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>  of 205 Reviews</span>
                                <span class="d-block">Reviewed by Kim - Denmark</span>
                            </div> -->
                            <!-- /.rating-box -->
                            <!-- <div class="section-title-spacer"></div> -->
                            <!-- /.section-title-spacer -->
                            <!-- <h4>Thailand Tours and Holidays 2018/2019</h4>
                            <p>
                                Thailand is the perfect destination for those who love to spend time outdoors. You can soak up the
                                sunshine on the beautiful beaches of Phuket, or head to the North of the country to Chiang Mai for adventure and
                                outdoor
                                activities like water rafting and trekking. Of course, not to be missed is Bangkok, where you can tour its
                                floating
                                markets or lavish Grand Palace.
                            </p>
                            <div class="rt-button-group">
                                <a href="#" class="rt-btn rt-gradient rt-rounded rt-Bshadow-2">Read More</a>
                                <a href="#" class="rt-btn rt-outline-gradientL rt-rounded">Help Me Plan My Trip</a>
                            </div>
                        </div> -->
                        <!-- /.deal-bottom-content -->
                    <!-- </div> -->
                    <!-- /.rt-section-title-wrapper -->
                <!-- </div> -->
                <!-- /.col-md-6 -->
            <!-- </div> -->
            <!-- /.row -->
            <!-- <div class="row single-deal-carosel align-items-center">
                <div class="col-lg-5">
                    <div class="deal-bg" style="background-image: url(assets/images/all-img/deal-bg.jpg)">
                        <div class="inner-content">
                            <h4 data-animation="fadeInDown" data-duration=".2s" data-delay=".4s">14 Day Classic Tour of Thailand & Beaches</h4>
                            <p data-animation="fade-in-bottom" data-duration=".2s" data-delay=".4s">Grab a promo code for extra savings up to 75% on discounted hotels!</p>
                        </div> -->
                        <!-- /.inner-content -->
                    <!-- </div> -->
                    <!-- /.deal-bg -->
                <!-- </div> -->
                <!-- /.col-md-6 -->
                <!-- <div class="col-lg-7">
                    <div class="rt-section-title-wrapper text-white" data-animation="fadeIn" data-duration=".4s" >
                        <h2 class="rt-section-title">
                            <span>Take a Look at Our</span>
                            Today's Top Deals
                        </h2> -->
                        <!-- /.rt-section-title -->
                        <!-- <p>Find great experiences, trips, and activities at fantastic prices around the globe.</p>
                        <div class="section-title-spacer"></div> -->
                        <!-- /.section-title-spacer -->
                        <!-- <div class="deal-bottom-content">
                            <div class="rating-box">
                                <span class="d-block">EXCELLENT</span>
                                <span class="d-block"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>  of 205 Reviews</span>
                                <span class="d-block">Reviewed by Kim - Denmark</span>
                            </div> -->
                            <!-- /.rating-box -->
                            <!-- <div class="section-title-spacer"></div> -->
                            <!-- /.section-title-spacer -->
                            <!-- <h4>Thailand Tours and Holidays 2018/2019</h4>
                            <p>
                                Thailand is the perfect destination for those who love to spend time outdoors. You can soak up the
                                sunshine on the beautiful beaches of Phuket, or head to the North of the country to Chiang Mai for adventure and
                                outdoor
                                activities like water rafting and trekking. Of course, not to be missed is Bangkok, where you can tour its
                                floating
                                markets or lavish Grand Palace.
                            </p>
                            <div class="rt-button-group">
                                <a href="#" class="rt-btn rt-gradient rt-rounded rt-Bshadow-2">Read More</a>
                                <a href="#" class="rt-btn rt-outline-gradientL rt-rounded">Help Me Plan My Trip</a>
                            </div>
                        </div> -->
                        <!-- /.deal-bottom-content -->
                    <!-- </div> -->
                    <!-- /.rt-section-title-wrapper -->
                <!-- </div> -->
                <!-- /.col-md-6 -->
            <!-- </div> -->
            <!-- /.row -->
            <!-- <div class="row single-deal-carosel align-items-center">
                <div class="col-lg-5">
                    <div class="deal-bg" style="background-image: url(assets/images/all-img/deal-bg.jpg)">
                        <div class="inner-content">
                            <h4 data-animation="fadeInDown" data-duration=".2s" data-delay=".4s">14 Day Classic Tour of Thailand & Beaches</h4>
                            <p data-animation="fade-in-bottom" data-duration=".2s" data-delay=".4s">Grab a promo code for extra savings up to 75% on discounted hotels!</p>
                        </div> -->
                        <!-- /.inner-content -->
                    <!-- </div> -->
                    <!-- /.deal-bg -->
                <!-- </div> -->
                <!-- /.col-md-6 -->
                <!-- <div class="col-lg-7">
                    <div class="rt-section-title-wrapper text-white" data-animation="fadeIn" data-duration=".4s" >
                        <h2 class="rt-section-title">
                            <span>Take a Look at Our</span>
                            Today's Top Deals
                        </h2> -->
                        <!-- /.rt-section-title -->
                        <!-- <p>Find great experiences, trips, and activities at fantastic prices around the globe.</p> -->
                        <!-- <div class="section-title-spacer"></div> -->
                        <!-- /.section-title-spacer -->
                        <!-- <div class="deal-bottom-content">
                            <div class="rating-box">
                                <span class="d-block">EXCELLENT</span>
                                <span class="d-block"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>  of 205 Reviews</span>
                                <span class="d-block">Reviewed by Kim - Denmark</span>
                            </div> -->
                            <!-- /.rating-box -->
                            <!-- <div class="section-title-spacer"></div> -->
                            <!-- /.section-title-spacer -->
                            <!-- <h4>Thailand Tours and Holidays 2018/2019</h4>
                            <p>
                                Thailand is the perfect destination for those who love to spend time outdoors. You can soak up the
                                sunshine on the beautiful beaches of Phuket, or head to the North of the country to Chiang Mai for adventure and
                                outdoor
                                activities like water rafting and trekking. Of course, not to be missed is Bangkok, where you can tour its
                                floating
                                markets or lavish Grand Palace.
                            </p>
                            <div class="rt-button-group">
                                <a href="#" class="rt-btn rt-gradient rt-rounded rt-Bshadow-2">Read More</a>
                                <a href="#" class="rt-btn rt-outline-gradientL rt-rounded">Help Me Plan My Trip</a>
                            </div> -->
                        <!-- </div> -->
                        <!-- /.deal-bottom-content -->
                    <!-- </div> -->
                    <!-- /.rt-section-title-wrapper -->
                <!-- </div> -->
                <!-- /.col-md-6 -->
            <!-- </div> -->
            <!-- /.row -->
       <!-- </div> -->
       <!-- /.deal-carosel-active -->
    <!-- </div> -->
    <!-- /.container -->
 <!-- </section> -->
<!-- 
    ========works start==========
 -->
<!-- <div class="spacer-top"></div>
 <section class="works-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 text-center mx-auto text-center">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>Here's How It Works</span>
                        Getting Started? It’s Simple
                    </h2>
                    <p>Prepare For Your Trip.Find out all you need to know before you go.Traveling is as unique as you are. And there is no one
                    package that fits all. That's why we offer customized travel packages.</p>
                </div>
            </div>
        </div>
        <div class="section-title-spacer"></div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom">
                    <div class="services-thumb">
                        <img src="assets/images/service-icons/s_icon_4.png" alt="service-icons" draggable="false">
                    </div>
                    <span class="inner-counter"></span>
                    <h4>Search</h4>
                    <p>Over 1,200,000 Hotels, Apartments
                        and Hostels</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom" data-wow-duration="1s">
                    <div class="services-thumb">
                        <img src="assets/images/service-icons/s_icon_5.png" alt="service-icons" draggable="false">
                    </div>
                    <span class="inner-counter"></span>
                    <h4>Compare & Book</h4>
                    <p>By price, location, rating
                        and more.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom" data-wow-duration="1.5s">
                    <div class="services-thumb">
                        <img src="assets/images/service-icons/s_icon_6.png" alt="service-icons" draggable="false">
                    </div>
                    <span class="inner-counter"></span>
                    <h4>Get travel insurance</h4>
                    <p>Buy comprehensive cover for
                        your next trips</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom" data-wow-duration="2s">
                    <div class="services-thumb">
                        <img src="assets/images/service-icons/s_icon_7.png" alt="service-icons" draggable="false">
                    </div>
                    <span class="inner-counter"></span>
                    <h4>Book a room</h4>
                    <p>By finding the best price for
                        your ideal hotel.</p>
                </div>
            </div>
            <div class="col-12 text-center mt-4">
                <a href="#" class="rt-btn rt-gradient text-uppercase rt-sm rt-rounded rt-Bshadow-2">Tour the world</a>
            </div>
        </div>
    </div>
 </section> -->
<!-- 
    ============ Portfolio Start===============
 -->
<!-- <div class="spacer-top"></div> -->
<!-- /.spacer-top -->
<!-- <section class="portfolio-area rt-section-padding rtbgprefix-full bg-hide-md gradinet-bg-md" style="background-image: url(assets/images/backgrounds/portfoliobg.png)">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 text-center mx-auto text-center">
                <div class="rt-section-title-wrapper text-white">
                    <h2 class="rt-section-title">
                        <span>Take a Look at Our</span>
                        Recommended Hotels
                    </h2>
                    <p>We've made a list of suggested activities based on your interests.Browse through our most popular
                    Hotels!Our Featured Tours can help you find the trip that's perfect for you!.</p>
                </div>
            </div>
        </div>
        <div class="section-title-spacer"></div>
        <div class="row">
            <div class="col-12">
                <ul class="filter-list">
                    <li data-filter="*" class="active ">New York</li>
                    <li data-filter=".cat-1">London</li>
                    <li data-filter=".cat-2">Paris</li>
                    <li data-filter=".cat-3">Hong Kong</li>
                    <li data-filter=".cat-4">Bangkok</li>
                    <li data-filter=".cat-5">Singapore</li>
                    <li data-filter=".cat-5">Tokyo</li>
                </ul>
            </div>
        </div>
        <div class="row grid">
            <div class="col-lg-4 col-md-6 grid-item cat-1 cat-5 cat-4">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url(assets/images/portfolio/port-1.jpg)">
                    <div class="rt-overlay"></div>
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div>
                    <div class="inner-content text-white">
                        <h6>The Millenium Hilton New York</h6>
                        <p> <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>4.5 / 5 (473 reviews)</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item cat-2 cat-3 cat-5">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url(assets/images/portfolio/port-2.jpg)" data-wow-duration="1s">
                    <div class="rt-overlay"></div>
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div>
                    <div class="inner-content text-white">
                        <h6>The Millenium Hilton New York</h6>
                        <p> <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>4.5 / 5 (473 reviews)</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item cat-1 cat-4">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url(assets/images/portfolio/port-3.jpg)" data-wow-duration="1.3s">
                    <div class="rt-overlay"></div>
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div>
                    <div class="inner-content text-white">
                        <h6>The Millenium Hilton New York</h6>
                        <p> <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>4.5 / 5 (473 reviews)</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item cat-4 cat-3 cat-5">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url(assets/images/portfolio/port-4.jpg)" data-wow-duration="1.6s">
                    <div class="rt-overlay"></div>
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div>
                    <div class="inner-content text-white">
                        <h6>The Millenium Hilton New York</h6>
                        <p> <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>4.5 / 5 (473 reviews)</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item cat-1 cat-5">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url(assets/images/portfolio/port-5.jpg)" data-wow-duration="1.9s">
                    <div class="rt-overlay"></div>
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div>
                    <div class="inner-content text-white">
                        <h6>The Millenium Hilton New York</h6>
                        <p> <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>4.5 / 5 (473 reviews)</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item cat-3 cat-5">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url(assets/images/portfolio/port-6.jpg)" data-wow-duration="2.2s">
                    <div class="rt-overlay"></div>
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div>
                    <div class="inner-content text-white">
                        <h6>The Millenium Hilton New York</h6>
                        <p> <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>4.5 / 5 (473 reviews)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mt-4">
                <a href="#" class="rt-btn rt-gradient text-uppercase rt-sm rt-rounded rt-Bshadow-1">browse more</a>
            </div>
        </div>
    </div>
</section> -->

<!-- 
    ======== Flight deals start======
 -->

<!-- <div class="spacer-top"></div> -->
<!-- /.spacer-top -->

<!-- <section class="flight-dela-area" data-scrollax-parent="true">
    <div class="rt-shape-emenetns-1" style="background-image: url(assets/images/shape-elements/shape_1.png)"
        data-scrollax="properties: { translateY: '340px' }"></div>
    <div class="rt-shape-emenetns-2" style="background-image: url(assets/images/shape-elements/shape-2.png)"
        data-scrollax="properties: { translateX: '-140px' }"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-10 mx-auto text-center">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>Explore Top Destinations</span>
                        Top Round-trip Flight Deals
                    </h2>
                    <p>
                        Get inspired, find the best deals and start an unforgettable journeya.Looking for the best
                        flight deals
                        for your next
                        trip? Find the top Emigrar deals that are updated daily to book the cheapest
                        flight up to 55% off the average price.
                    </p>
                </div>
            </div>
        </div>
        <div class="section-title-spacer">
        <div class="row">
            <div class="col-xl-8 col-lg-10">
                <div class="row">
                    <div class="col-md-6">
                        <a class="flight-box wow fade-in-bottom" data-wow-duration="1s" data-wow-delay=".02s" href="#" style="background-image: url(assets/images/flights/flt_1.jpg)">
                            <div class="rt-inner-overlay color_1"></div>
                            <div class="trip-to">
                                <span>
                                    Trip to
                                </span>
                                <span>
                                    Peru
                                </span>
                            </div>
                            <div class="trip-form">
                                <span>7 days</span>
                                <span>$4570</span>
                            </div>
                        </a>
                    </div>
                    <div class=" col-md-6">
                        <a class="flight-box wow fade-in-bottom" href="#" data-wow-duration="1.3s" data-wow-delay=".04s" style="background-image: url(assets/images/flights/flt_2.jpg)">
                            <div class="rt-inner-overlay color_2"></div>
                            <div class="trip-to">
                                <span>
                                    Trip to
                                </span>
                                <span>
                                    Peru
                                </span>
                            </div>
                            <div class="trip-form">
                                <span>7 days</span>
                                <span>$4570</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="flight-box wow fade-in-bottom" data-wow-duration="1.6s" data-wow-delay=".06s" href="#" style="background-image: url(assets/images/flights/flt_3.jpg)">
                            <div class="rt-inner-overlay color_3"></div>
                            <div class="trip-to">
                                <span>
                                    Trip to
                                </span>
                                <span>
                                    Peru
                                </span>
                            </div>
                            <div class="trip-form">
                                <span>7 days</span>
                                <span>$4570</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="flight-box wow fade-in-bottom" data-wow-duration="1.9s" data-wow-delay=".08s" href="#" style="background-image: url(assets/images/flights/flt_4.jpg)">
                            <div class="rt-inner-overlay color_4"></div>
                            <div class="trip-to">
                                <span>
                                    Trip to
                                </span>
                                <span>
                                    Peru
                                </span>
                            </div>
                            <div class="trip-form">
                                <span>7 days</span>
                                <span>$4570</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="flight-box wow fade-in-bottom" data-wow-duration="2.2s" data-wow-delay=".010s" href="#" style="background-image: url(assets/images/flights/flt_5.jpg)">
                            <div class="rt-inner-overlay color_5"></div>
                            <div class="trip-to">
                                <span>
                                    Trip to
                                </span>
                                <span>
                                    Peru
                                </span>
                            </div>
                            <div class="trip-form">
                                <span>7 days</span>
                                <span>$4570</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="flight-box wow fade-in-bottom" data-wow-duration="2.6s" data-wow-delay=".12s" href="#" style="background-image: url(assets/images/flights/flt_6.jpg)">
                            <div class="rt-inner-overlay color_6"></div>
                            <div class="trip-to">
                                <span>
                                    Trip to
                                </span>
                                <span>
                                    Peru
                                </span>
                            </div>
                            <div class="trip-form">
                                <span>7 days</span>
                                <span>$4570</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <a href="#" class="rt-btn rt-gradient rt-sm text-uppercase rt-rounded rt-Bshadow-2">browse more</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- 
    ====== call to action======
 -->

<!-- <div class="spacer-top"></div> -->
<!-- /.spacer-top -->


<!-- 
    =======app area strat=========
 -->

<!-- <div class="spacer-top"></div> -->
<!-- /.spacer-top -->


<!-- <section class="app-area rtbgprefix-cover" style="background-image: url(assets/images/backgrounds/app_bg.png)"
    data-scrollax-parent="true">
    <div class="rt-shape-elements-1 rtbgprefix-contain"
        style="background-image: url(assets/images/shape-elements/shape-3.png)"
        data-scrollax="properties: { translateY: '50px' }"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center text-lg-left">
                <img src="assets/images/all-img/app-mbl.png" alt="mockup image" draggable="false" class="wow fade-in-left" data-wow-duration="1s" data-wow-delay="0.2s">
            </div>
            <div class="col-lg-7">
                <div class="rt-section-title-wrapper">
                    <div class="wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="0.6s">
                        <h2 class="rt-section-title">
                            <span>Itineraries that impress.</span>
                            Download App
                        </h2>
                        <p>
                            All your travel plans, in one place.You handle the booking.Access reservations, maps, and
                            more on your favorite device!View trending destinations. Discover popular trips. Listen to
                            your heart. Experience the world.Find or create your perfect trip. Meet fellow travellers.
                            Experience different cultures. Create unforgettable memories.Keep up-to-date with
                            active trips, view your favourites, visit previous adventures. Managing a trip has never
                            been easier.
                        
                        </p>
                        <br>
                        <p>
                            Download the Emigrar app and join our ever-growing community of passionate
                            travellers. Find lasting friendships, discover new adventures and create unforgettable
                            memories.
                        </p>
                    </div>
                    <div class="rt-button-group mt-5 wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="0.9s">
                        <a href="#" class="rt-btn rt-app-parimary rt-rounded">
                            <div class="app-thumb">
                                <i class="fab fa-google-play"></i>
                            </div>
                            <div class="app-text">
                                <span>GET IT ON</span>
                                <span>Appstore</span>
                            </div>
                        </a>
                        <a href="#" class="rt-btn rt-app-secondary rt-rounded">
                            <div class="app-thumb">
                                <i class="fab fa-apple"></i>
                            </div>
                            <div class="app-text">
                                <span>GET IT ON</span>
                                <span>Appstore</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->




<!-- 
    ============= Brands area start==========
 -->


<div class="spacer-top"></div>
<!-- /.spacer-top -->
<section class="brands-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto text-center">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>Take a Look at Our</span>
                        Trusted Partners
                    </h2><!-- /.rt-section-title -->
                    <p>
                        We are committed to being the best partner.Emigrar believes in being your trusted partner and
                        earning that trust through
                        confidence and performance in service and support.
                    </p>
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <ul class="rt-border-brands">
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block">
            <img src="assets/images/brands/brands-1.png" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="1s">
            <img src="assets/images/brands/brands-2.png" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="1.5s">
            <img src="assets/images/brands/brands-3.png" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="2s"> 
            <img src="assets/images/brands/brands-4.png" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="2.5s">
            <img src="assets/images/brands/brands-4.png" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="3s">
            <img src="assets/images/brands/brands-3.png" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="3.5s">
            <img src="assets/images/brands/brands-2.png" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="4s">
            <img src="assets/images/brands/brands-1.png" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
</ul><!-- /.rt-border-brands -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.containe -->
</section>
<!-- 
    !============= Footer Area Start ===========!
 -->
<section class="rt-site-footer" data-scrollax-parent="true">
    <!-- <div class="rt-shape-emenetns-1" style="background-image: url(assets/images/shape-elements/shape-4.png)" data-scrollax="properties: { translateY: '340px' }"></div> -->
    <!-- /.rt-shape-emenetns-1 -->   
    <div class="footer-top rtbgprefix-cover" style="background-image: url(Images/Artboard–27.png);background-position: center top;">
        <div class="footer-subscripbe-box wow fade-in-bottom">
           <div class="container">
               <div class="row">
                   <div class="col-xl-8 col-lg-10 mx-auto text-center">
                        <div class="rt-section-title-wrapper text-white">
                            <h2 class="rt-section-title f-size-50">
                                <span class="text-blue2">Newsletter</span>
                        
                                Get The Latest news
                            </h2><!-- /.rt-section-title -->
                            <p class="f-size-14 rt-pl-50 rt-pr-50">
                                Get the latest travel inspirations and deals from Emigrar semimonthly with your email. You can
                                unsubscribe at any time. Your privacy & personal information will be treated.
                            </p>
                        </div><!-- /.rt-section-title-wrapper -->
                   </div><!-- /.col-lg-7 -->
               </div><!-- /.row -->
            <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                         <div class="input-group mb-5">
                            <div class="w-100">
                                <input type="email" class="form-control text-white f-size-14" name="newsletter1" placeholder="Enter your email">
                            </div>
                            <span class="text-danger"> <?php echo $newsletterErr;?></span>
                            <div class="input-group-append">
                                <input class="btn" type="submit" name="newsletterIndex" value="Subscribe Now"/>
                            </div>
                        </div>
                        <!-- <div class="input-group mb-5">
                            <input type="text" class="form-control text-white f-size-14" name="newsletter1" placeholder="Enter your email address">
                            <div class="input-group-append">
                                <input class="btn" type="submit" name="newsletterIndex" value="Subscribe Now"/>
                            </div>
                        </div> -->
                        <!-- end input gorup -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </form>
               <!-- <div class="rt-dot-divider"></div> -->
               <!-- /.rt-dot-divider -->
           </div><!-- /.container -->
        </div><!-- /.footer-subscripbe-box -->
        <!-- <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="rt-single-widget wow fade-in-bottom" data-wow-duration="1s">
                        <h3 class="rt-footer-title">Company Info</h3>
                        <ul class="rt-usefulllinks">
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                            <li>
                                <a href="#">Authenticity Guarantee</a>
                            </li>
                            <li>
                                <a href="#">Customer Reviews</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Business License</a>
                            </li>
                            
                        </ul>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="rt-single-widget wow fade-in-bottom" data-wow-duration="1.5s">
                        <h3 class="rt-footer-title">Work With Us</h3>
                        <ul class="rt-usefulllinks">
                            <li><a href="#">Become Partner</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Become Affiliate</a></li>
                            <li><a href="#">Associations</a></li>
                            <li><a href="#">Advertise with us</a></li>
                            <li><a href="#">Retirement Plan</a></li>
                            <li><a href="#">Travel APIs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="rt-single-widget wow fade-in-bottom" data-wow-duration="2s">
                        <h3 class="rt-footer-title">
                            My Account
                        </h3>
                        <ul class="rt-usefulllinks">
                        
                            <li><a href="#">Manage Your Account</a></li>
                            <li><a href="#">Build your own trip</a></li>
                            <li><a href="#">Order Sttatus</a></li>
                            <li><a href="#">Booking Guide</a></li>
                            <li><a href="#">Travel Insurance & Safety Guide</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="rt-single-widget wow fade-in-bottom" data-wow-duration="2.5s">
                        <h3 class="rt-footer-title">
                            Plan Your Trip
                        </h3>
                        <ul class="rt-usefulllinks">
                            <li><a href="#">Special Offers</a></li>
                            <li><a href="#">Hotels</a></li>
                            <li><a href="#">Flights</a></li>
                            <li><a href="#">Tour Packages</a></li>
                            <li><a href="#">Accommodations</a></li>
                            <li><a href="#">Transportation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
    </div><!-- /.footer-top -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                <div class="copy-text wow fade-in-bottom" data-wow-duration="1s">
                    Copyright © 2020.All Rights Reserved By <a href="index.php">Corporate Business Class</a>
                </div><!-- /.copy-text -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="rt-footer-social wow fade-in-bottom" data-wow-duration="1.5s">
                        <ul>
                            <li><a href="#"><img src="assets/images/brands/card-1.png" alt="cardimage" draggable="false"></a></li>
                            <li><a href="#"><img src="assets/images/brands/card-2.png" alt="cardimage" draggable="false"></a></li>
                            <li><a href="#"><img src="assets/images/brands/card-3.png" alt="cardimage" draggable="false"></a></li>
                            <li><a href="#"><img src="assets/images/brands/card-4.png" alt="cardimage" draggable="false"></a></li>
                            <li><a href="#"><img src="assets/images/brands/card-5.png" alt="cardimage" draggable="false"></a></li>
                            
                        </ul>
                    </div><!-- /.rt-footer-social -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
</section>



<!-- ==================Start Js Link===================== -->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/instafeed.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.scrollUp.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/jquery.overlayScrollbars.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/slider-range.js"></script>
<script src="assets/js/vivus.min.js"></script>
<script src="assets/js/tippy.all.min.js"></script>
<script src="assets/js/app.js"></script>

<!-- ==================End Js Link===================== -->

<!-- <script>
    $(document).ready(function(){
        function load_stuff()
        {
            var email = ($('#newsletter1').val()).serialize();
            debugger;
            $.ajax({
            url:"newsletter.php",
            method:"POST",
            data:email,
            success:function(data)
                {
                   alert("Email Sent");
                }
            })
        } 
    });
</script> -->

</body>

</html>









