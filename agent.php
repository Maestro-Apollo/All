<?php
$database = include('config.php');
$newsletter1Err = "";
$newsletter1 = "";
// define variables and set to empty values

if(isset($_POST["newsletterAgent"]))
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["newsletter3"])) {
            $newsletter1Err = "Email is required";
        } else {
            $newsletter1 = $_POST['newsletter3'];
        }
    
        if($newsletter1 != "")
        {
            $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $name = "Corporate Business Class";
            $headers .= "From:" . $database['EmailFrom'];
            $email = $database['EmailTo'];
            $message = '<html><body><table>';
            $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Email </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$newsletter1.'</td></tr>';
            $message .= '</table></body></html>';
            
            $to = $database['EmailTo'];
            $subject = 'Newsletter query';
            
                if (mail ($to, $subject, $message, $headers)) {
                    // echo '<p>Your message has been sent!</p>';
                    echo "<script>alert('Your email has been sent!');</script>";
                    //header("location:index.html");
                } else {
                    // echo '<p>Something went wrong, go back and try again!</p>';
                    echo "<script>alert('Something went wrong, go back and try again!');</script>";
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
    <link rel="icon" type="image/png" href="Images/logo-favicon.png">
    <!-- ==================Start Css Link===================== -->
<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<!-- toastr css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" type="text/css" />
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

        <!-- <div class="top-header rt-light-text d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <ul class="text-center text-md-left top-message">
                            <li> <i class="icofont-headphone-alt"></i>Support</li>
                            <li><a href="mailto:info@emigrar.com "><i class="icofont-email"></i>info@emigrar.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="text-center text-md-right top-social">
                            <li><a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="fas fa-globe-americas"></i>Englishs</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">English</a>
                                    <a class="dropdown-item" href="#">French</a>
                                    <a class="dropdown-item" href="#">Trukis</a>
                                </div>
                            </li>
                            <li><a href="#"><i class="fas fa-briefcase"></i>My Trips</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#rtmodal-1"><i class="far fa-user-circle"></i>Sign in | Join</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>  -->

        <div class="main-header rt-sticky">
            <nav class="navbar">
                <div class="container">
                        <a href="index.php" class="brand-logo"><img src="Images/travel-02.png" alt="" width="250"></a>
                        <a href="index.php" class="sticky-logo"><img src="Images/travel-01.png" alt="" width="250"></a>
                        <div class="ml-auto d-flex align-items-center">
                        

<div class="main-menu">
    <ul>
        <li class="current-menu-item"><a href="index.php">Home</a></li>
        <li class="current-menu-item"><a href="policy.php" class="btn-hover-home">Policy</a></li>
        <li class="current-menu-item d-none-desktop"><a href="#" data-target="#rtmodal-1" data-toggle="modal">Login</a></li>
        <!-- <li><a href="agent.html">Policy</a></li> -->
        <!-- <li><a href="service-1.html">Services</a></li>
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
                        <span class="d-md-inline d-none"><a href="#" data-target="#rtmodal-1" data-toggle="modal" class="rt-btn btn-white1 btn-agent rt-rounded text-uppercase rt-Bshadow-1 rt-pt-10 rt-pb-10 rt-pl-35 rt-pr-35">Login</a></span>
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
                    <img src="Images/logo-black.png" alt="modal logo" width="200" draggable="false">
                    <h4>Login in to Corporate Business Class</h4>
                    <p>Log in to get in the moment updates on the things
                        that interest you.</p>
                </div><!-- /.rt-modal-headr -->
                <div class="rt-modal-headr rt-mb-20 two">
                    <img src="Images/logo-black.png" alt="modal logo" width="200" draggable="false">
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
                            </div><!-- ./form-group -->
                        </div>
                            <input type="submit" class="rt-btn rt-gradient pill d-block text-uppercase toastr-error-auth" value="Log In">
                    </form>
                    <div class="ac-register rt-mb-40">
                        <span>Don???t have an account? <a href="#" class="open-creatac">Sign Up Now <i class="icofont-double-right"></i></a></span>
                    </div><!-- /.ac-register -->
                </div><!-- /.rt-modal-input -->
                <div class="rt-modal-input two">
                    <form action="#" class="rt-form">
                        <input type="text" class="form-control pill rt-mb-15" placeholder="User name">
                        <input type="password" class="form-control pill rt-mb-15" placeholder="Enter your mail address">
                        <input type="password" class="form-control pill rt-mb-15" placeholder="Password">
                        <!-- <div class="form-group forgot-pass">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck333">
                                <label class="form-check-label" for="gridCheck333">
                                    I'd like to hear about promos, new products,and much more!
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck222">
                                <label class="form-check-label" for="gridCheck222">
                                    By clicking "Sign up" you agree to our Terms of Service and Privacy Policy
                                </label>
                            </div>
                        </div> -->
                            <input type="submit" class="rt-btn rt-gradient pill d-block text-uppercase toastr-error-auth" value="Log In">
                    </form>
                    <div class="ac-register rt-mb-40">
                        <span>Already have an account?<a href="#" class="open-loginac">LOGIN <i class="icofont-double-right"></i></a></span>

                    </div><!-- /.ac-register -->
                </div><!-- /.rt-modal-input -->
                <!-- <div class="rt-modal-footer">
                    <span>Or</span>
                    <h4>Sign Up with social media</h4>
                    <ul class="rt-social rt-circle-style2">
                
                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</div>









<!-- 
    ====== Services Start ==============
 -->
 
<div class="rt-breadcump rt-breadcump-height">
    <div class="rt-page-bg rtbgprefix-cover" style="background-image: url(Images/Artboard???31.jpg)"></div><!-- /.rt-page-bg -->
    <div class="container">
        <div class="row rt-breadcump-height">
            <div class="col-6">
                <div class="breadcrumbs-content">
                <h3>John Doe</h3>
                    <div class="breadcrumbs">
                        <span class="divider"><i class="icofont-home"></i></span>
                        <a href="index.php" title="Home">Home</a>
                        <!-- <span class="divider"><i class="icofont-simple-right"></i></span>
                        <a href="index.html" title="Home">Home</a> -->
                        <span class="divider"><i class="icofont-simple-right"></i></span>
                        Agent
                    
                    </div>
                    <!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-6 -->
            <div class="col-6">
                <div class="breadcrumbs-content text-right agent-img rt-pt-200">
                    <div class="agent-img-container">
                        <img src="Images/user.png">
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->

<section class="about-area">
    <div class="rt-design-elmnts rtbgprefix-contain"  style="background-image: url(assets/images/all-img/abt_vec_2.png)">

    </div><!-- /.rt-design-elmnts -->
    <div class="container">
        <div class="row">
            <div class="col-xl-9 offset-xl-3">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>My Short Story</span>
                        Know About Me
                    </h2><!-- /.rt-section-title -->
                    <p>
                        My aim is to make global corporate travel management more personalized and seamless. And we do this through a network
                        of exceptional local agencies that are not only leaders in their own respective markets, but who also meet the high
                        operating and service standards needed to become a Radius member. <br>
                        we specialize in vacation packages, escorted and independent tour packages, cruises,
                        honeymoons, weddings at foreign locations, and corporate travel. My staff is dedicated to
                        connecting my customers with amazing travel experiences around the world, all at a price that suits their needs. We
                        will happily work with you to plan your dream vacation or corporate trip that meets both your budget and experience
                        goals, whatever they may be!
                    </p>
                </div><!-- /.rt-section-title-wrapper -->
                <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                <div class="row">
    <div class="col-lg-3 col-md-4 mx-auto col-sm-6 text-center">
        <div class="counter-box-2 wow fadeInUp">
            <div class="counter-thumb rt-pt-17">
                <img src="Images/icons-01.png" alt="counter image" draggable="false">
            </div><!-- /.counter-thumb -->
            <h5 class="rt-pt-10"><span class="counter">10</span></h5>
            <h6>Years Experience</h6>
        </div><!-- /.counter-box-2 -->
    </div><!-- /.col-lg-3 -->
    <div class="col-lg-3 col-md-4 mx-auto col-sm-6 text-center">
        <div class="counter-box-2 wow fadeInUp" data-wow-duration="1.5s">
            <div class="counter-thumb rt-pt-17">
                <img src="Images/icons-02.png" alt="counter image" draggable="false">
            </div>
            <h5 class="rt-pt-10"><span class="counter">120</span></h5>
            <h6>Trips Done</h6>
        </div>
    </div><!-- /.col-lg-3 -->
    <div class="col-lg-3 col-md-4 mx-auto col-sm-6 text-center">
            <div class="counter-box-2 wow fadeInUp" data-wow-duration="2s">
                <div class="counter-thumb rt-pt-17">
                    <img src="Images/icons-01.png" alt="counter image" draggable="false">
                </div><!-- /.counter-thumb -->
                <h5 class="rt-pt-10"><span class="counter">10</span></h5>
                <h6>Years Experience</h6>
            </div><!-- /.counter-box-2 -->
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-3 col-md-4 mx-auto col-sm-6 text-center">
            <div class="counter-box-2 wow fadeInUp" data-wow-duration="2.5s">
                <div class="counter-thumb rt-pt-17">
                    <img src="Images/icons-02.png" alt="counter image" draggable="false">
                </div>
                <h5 class="rt-pt-10"><span class="counter">120</span></h5>
                <h6>Trips Done</h6>
            </div>
        </div><!-- /.col-lg-3 -->
</div><!-- /.row -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>


<!-- 

    ========= book area start ============
 -->
<div class="spacer-top"></div><!-- /.spacer-top -->
<section class="book-area">
    <div class="rt-design-elmnts rtbgprefix-contain" style="background-image: url(Images/travel_Artboard.png)">

    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>How We're Different</span>
                        Why Book With Us?
                    </h2>
                    <p>
                        OTA's (Online Travel Agents) have dominated the market for over 10 years giving consumers headaches for years by
                        attaching hidden fees, giving you a false sense of savings where there really is none due to the OTA agreements that are
                        in place to make sure these companies can never compete against each other, and the use of predictive analytics to boost
                        rates on your vacation based on how many times you search for a specific flight or click on a link.
                    </p>
                </div>
                <div class="section-title-spacer"></div>
                <div class="rt-single-icon-box wow fade-in-bottom">
                <div class="icon-thumb rt-mt-60">
                    <img src="assets/images/icons-image/box-icon-4.png" alt="box-icon" draggable="false">
                </div>
                <div class="iconbox-content">
                    <h5>Destination Experts</h5>
                    <ul>
                        <li>Caribbean</li>
                        <li>Europe</li>
                        <li>Latin America</li>
                        <li>USA/Mexico</li>
                        <li>Cruises/River Cruises</li>
                    </ul>
                </div>
            </div>
            <div class="rt-single-icon-box wow fade-in-bottom" data-wow-duration="1.5s">
                <div class="icon-thumb rt-mt-20">
                    <img src="assets\images\all-img\iconx-1.png" alt="box-icon" draggable="false">
                </div>
                <div class="iconbox-content">
                    <h5>Languages</h5>
                    <ul>
                        <li>English</li>
                        <li>German</li>
                    </ul>
                </div>
            </div>
            <div class="rt-single-icon-box wow fade-in-bottom" data-wow-duration="2s">
                <div class="icon-thumb rt-mt-60">
                    <img src="assets\images\counter-icons\counter_iocn_1.png" alt="box-icon" draggable="false">
                </div>
                <div class="iconbox-content">
                    <h5>Certifications</h5>
                    <ul>
                        <li>Sandals/Beaches Specials</li>
                        <li>Europe Specialist</li>
                        <li>Disney Specialist</li>
                        <li>Apple Vacations Specialist</li>
                        <li>AMResorts Specialist</li>
                    </ul>
                </div>
            </div>
            <div class="rt-single-icon-box wow fade-in-bottom" data-wow-duration="2.5s">
                <div class="icon-thumb rt-mt-20">
                    <img src="assets\images\all-img\iconx-2.png" alt="box-icon" draggable="false">
                </div>
                <div class="iconbox-content">
                    <h5>Travel Specialist</h5>
                    <ul>
                        <li>All Inclusive</li>
                        <li>Flexible Ind. Travel</li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>


<!-- 
    ============= Cta area start==========
 -->
 <div class="spacer-bottom"></div><!-- /.spacer-bottom -->
<section class="rt-cta-area">
    <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="cta-box-2 d-flex flex-column align-items-center justify-content-center bg-gradient-primary-agent">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="rt-section-title-wrapper text-white text-center">
                            <h2 class="rt-section-title">
                                <span>Save Time, Save Money</span>
                                Let???s Get Started
                            </h2><!-- /.rt-section-title -->
                            <p>We have the knowledge, experience, and expertise to take care of all your travel needs.
                                Sign up and we'll send the best deals to you </p>
                                <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                            <a href="welcome.php" class="rt-btn rt-light pill rt-xl rt-Bshadow-1 text-uppercase">Get Started</a>
                        </div><!-- /.rt-section-title-wrapper- -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.inner-content -->
        </div><!-- /.col-12 -->
    </div><!-- /.row -->
</div><!-- /.container -->


</section>


<!-- 
    ============= Testimonilas area start==========
 -->
<div class="spacer-top"></div><!-- /.spacer-top -->
<section class="testimonials-area" data-scrollax-parent="true">
    <!-- <div class="rt-shape-emenetns-1" style="background-image: url(assets/images/shape-elements/shape-4.png)"
        data-scrollax="properties: { translateY: '-140px' }"></div> -->
        <!-- /.rt-shape-emenetns-1 -->
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto text-center">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>testimonials</span>
                        What My Customers Say
                    </h2><!-- /.rt-section-title -->
                    <p>
                        We have many happy customers that have booked holidays with us.Some Impresions from my
                        Customers! Please read some of the lovely things my Customers say about us.
                    </p>
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="testimoninal-active-1">
    <div class="singleTbox-1 text-center active position-1" data-position="position-1">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url(assets/images/testimonials/t_1.png)"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
    <div class="singleTbox-1 text-center inactive position-2" data-position="position-2">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url(assets/images/testimonials/t_2.png)"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
    <div class="singleTbox-1 text-center inactive position-3" data-position="position-3">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url(assets/images/testimonials/t_3.png)"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
    <div class="singleTbox-1 text-center inactive position-4" data-position="position-4">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url(assets/images/testimonials/t_4.png)"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
    <div class="singleTbox-1 text-center inactive position-5" data-position="position-5">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url(assets/images/testimonials/t_5.png)"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
    <div class="singleTbox-1 text-center inactive position-6" data-position="position-6">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url(assets/images/testimonials/t_6.png)"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
    <div class="singleTbox-1 text-center inactive position-7" data-position="position-7">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url(assets/images/testimonials/t_7.png)"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
    <div class="singleTbox-1 text-center inactive position-8" data-position="position-8">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url(assets/images/testimonials/t_8.png)"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
    <div class="singleTbox-1 text-center inactive position-9" data-position="position-9">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url(assets/images/testimonials/t_9.png)"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
    <div class="singleTbox-1 text-center inactive position-10" data-position="position-10">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url(assets/images/testimonials/t_10.png)"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
</div><!-- /.testimoninal-active-1 -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
        <div class="rt-divider style-one rt-margin-top"></div><!-- /.divider -->
    </div><!-- /.containe -->
</section>



<!-- 
    ============= Brands area start==========
 -->

<div class="spacer-top"></div><!-- /.spacer-top -->
<section class="brands-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto text-center">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>Take a Look at My</span>
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
        <div class="footer-top rtbgprefix-cover" style="background-image: url(Images/Artboard???27.png);background-position: center top;">
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
                                    <input type="email" class="form-control text-white f-size-14" placeholder="Enter your email" aria-describedby="button-addon2" name="newsletter3">
                                </div>
                                <span class="text-danger"> <?php echo $newsletter1Err;?></span>
                                <div class="input-group-append">
                                    <input class="btn" type="submit" id="button-addon2" name="newsletterAgent" value="Subscribe Now" />
                                </div>
                            </div><!-- end input gorup -->
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
                <p class="text-white f-size-12 rt-mb-0">Seller of Travel # 2107058 </p>

                    Copyright ?? 2020.All Rights Reserved By <a href="index.php">Corporate Business Class</a>
                </div><!-- /.copy-text -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="rt-footer-social wow fade-in-bottom" data-wow-duration="1.5s">
                        <ul>
                            <li><a href="#" class="text-white f-size-12">The Corporate division of <img src="Images/lfclogo.png" class="rt-ml-15" alt="cardimage" draggable="false"></a></li>
                           
                            
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
<!-- toastr js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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

<script>
    $(document).ready(function(){
        $('.toastr-error-auth').click(function() {
            // $('#rtmodal-1').modal('hide');
            toastr.success('Authentication Error<br/>', '', {
                    showMethod: "fadeIn",
                    positionClass: 'toast-top-right',
                    timeOut: 5000,
                    allowHtml: true,
                    iconClass: 'toast-error-new',
                    autoDismiss: true,
                    tapToDismiss: true,
                });
        });
    });
</script>
</body>

</html>









