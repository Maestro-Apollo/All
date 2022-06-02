<?php
// $database = include('config.php');
// $nameErr = $emailErr = $companyErr = $roleErr = $tripErr = $travelErr = "";
// $nameform = $emailform = $company = $role = $trip = $travel = "";
// $newsletter = "";
// $newsletter = "";
// $DestinationErr = "";
// $Destination = $email = $company = $role = $trip = $travel = "";
// // define variables and set to empty values

// if(isset($_POST["corporateForm"]))
// {
//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         if (empty($_POST["FullName"])) {
//             $nameErr = "Name is required";
//         } else {
//             $nameform = $_POST['FullName'];
//         }
        
//         if (empty($_POST["Email"])) {
//             $emailErr = "Email is required";
//         } else {
//             $emailform = $_POST['Email'];
//         }

//         if (empty($_POST["CompanyName"])) {
//             $companyErr = "Company Name is required";
//         } else {
//             $company = $_POST['CompanyName'];
//         }

//         if (empty($_POST["role"])) {
//             $roleErr = "Role is required";
//         } else {
//             $role = $_POST['role'];
//         }

//         if (empty($_POST["totalTrips"])) {
//             $tripErr = "Total trips required";
//         } else {
//             $trip = $_POST['totalTrips'];
//         }

//         if (empty($_POST["TravelType"])) {
//             $travelErr = "Travel type is required";
//         } else {
//             $travel = $_POST['TravelType'];
//         }


//         if($nameform != "" && $emailform != "" && $company != "" && $role != "" && $trip != "" && $travel != "")
//         {
//             $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//             $name = "Corporate Business Class";
//             $headers .= "From:" . $database['EmailFrom'];
//             $email = $database['EmailTo'];
//             $message = '<html><body><table>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Full Name </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$nameform.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Email </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$emailform.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Company Name </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$company.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Role at the company </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$role.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Total trips per month </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$trip.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Type of travel </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$travel.'</td></tr>';
//             $message .= '</table></body></html>';
            
//             $to = $database['EmailTo'];
//             $subject = 'Query from : ' . $nameform;
            
//                 if (mail ($to, $subject, $message, $headers)) {
//                     // echo '<p>Your message has been sent!</p>';
//                     echo "<script>alert('Your email has been sent!');</script>";
//                 } else {
//                     // echo '<p>Something went wrong, go back and try again!</p>';
//                     echo "<script>alert('Something went wrong, go back and try again!');</script>";
//                 }
//         }
//     }
// }
// else if(isset($_POST["personalForm"]))
// {
//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         if (empty($_POST["Destination"])) {
//             $DestinationErr = "Destination is required";
//         } else {
//             $Destination = $_POST['Destination'];
//         }
//         $Adults = $_POST['Adults'];
//         $Children = $_POST['Children'];
//         $Infants = $_POST['Infants'];
//         $Pets = $_POST['Pets'];
//         $SeatClass = $_POST['SeatClass'];
//         $MilesPoints = $_POST['MilesPoints'];
//         $workTravel = $_POST['workTravel'];
//         $Currency = $_POST['Currency'];
//         $CurrencyValue = $_POST['CurrencyValue'];
//         $Website = $_POST['Website'];
//         $NoofStop = $_POST['NoofStop'];
//         $StopDuration = $_POST['StopDuration'];
//         $Details = $_POST['Details'];
//         $YourName = $_POST['YourName'];
//         $YourEmail = $_POST['YourEmail'];
        
//         if($Adults != "" && $Destination != "" && $Children != "" && $Infants != "" && $Pets != "" && $SeatClass != "" && $MilesPoints != "" && $workTravel != "" && $Currency != "" && $CurrencyValue != "" && $Website != "" && $NoofStop != "" && $StopDuration != "" && $Details != "" && $YourName != "" && $YourEmail != "")
//         {
//             $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//             $name = "Corporate Business Class";
//             $headers .= "From:" . $database['EmailFrom'];
//             $email = $database['EmailTo'];
//             $message = '<html><body><table>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Number of Destinations </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$Destination.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Adults </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$Adults.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Children </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$Children.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Infants </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$Infants.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Pets </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$Pets.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Seat Class </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$SeatClass.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Miles/Points </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$MilesPoints.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Are you traveling for work </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$workTravel.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Your best valid price for this trip </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$Currency.' - '.$CurrencyValue.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Link or Website </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$Website.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Max. Number of Stops </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$NoofStop.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Max. Duration of Stops </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$StopDuration.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Extra Information </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$Details.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Name </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$YourName.'</td></tr>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Email </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$YourEmail.'</td></tr>';
//             $message .= '</table></body></html>';
            
//             $to = $database['EmailTo'];
//             $subject = 'Query from : ' . $YourName;
            
//                 if (mail ($to, $subject, $message, $headers)) {
//                     // echo '<p>Your message has been sent!</p>';
//                     echo "<script>alert('Your email has been sent!');</script>";
//                 } else {
//                     // echo '<p>Something went wrong, go back and try again!</p>';
//                     echo "<script>alert('Something went wrong, go back and try again!');</script>";
//                 }
//         }
//     }
// }
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
    <style>
        .accordion {
            cursor: pointer;
            font-size: 12px;
            transition: 0.4s;
            font-weight: bold;
        }

        .active, .accordion:hover {
            background-color: #657cfe; 
        }

        .panel {
            /* padding: 0 18px; */
            display: none;
            
            /* background-color: white; */
            /* overflow: hidden; */
        }
        div.panel.show {
            display: block !important;
        }
        .panel p {
            font-size: 12px;
        }
        .border-bt {
            border-bottom: 1px solid #cccccc;
        }
        .border-lt {
            border-left: 1px solid #cccccc;
        }
        #corporateForm, #personalForm{
            padding: 15px;
        }
        /* Style the tab */
    </style>

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
            <a href="index.php" class="brand-logo"><img src="Images/logo-black.png" alt="" width="200"></a>
            <a href="index.php" class="sticky-logo"><img src="Images/logo-black.png" alt="" width="200"></a>
          <div class="ml-auto d-flex align-items-center">
            

<div class="main-menu">
    <ul>
        <li class="current-menu-item"><a href="index.php" class="txt-blue">Home</a></li>
        <li class="current-menu-item"><a href="policy.php" class="txt-blue">Policy</a></li>
        <li class="current-menu-item d-none-desktop"><a href="#" data-target="#rtmodal-1" data-toggle="modal">Login</a></li>
    <!-- <li class="current-menu-item"><a href="#home">Home</a></li>
        <li><a href="trip-1.html">Trip package</a></li>
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
        <li> <a href="blog.html">Blog</a></li>-->
    
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
                        <span>Don’t have an account? <a href="#" class="open-creatac">Sign Up Now <i class="icofont-double-right"></i></a></span>
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

<section class="content-area mt-120 pos-rel welcome-section">
    <div class="testimonials-area">
        <div class="rt-shape-emenetns-1" style="background-image: url(assets/images/shape-elements/shape-4.png)" data-scrollax="properties: { translateY: '-140px' }"></div><!-- /.rt-shape-emenetns-1 -->
        <div class="left-circle rt-shape-emenetns-1" style="background-image: url(assets/images/shape-elements/shape-4.png)" data-scrollax="properties: { translateY: '140px' }"></div><!-- /.rt-shape-emenetns-1 -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto col-xl-9 text-center">
                <h4 class="rt-strong rt-mb-20"> Welcome </h4>
            </div>
            <div class="col-xl-9 mx-auto col-lg-10">
                <div class="flight-list-box rt-mb-30">
                    <div class="col-lg-12 rt-mb-30 rt-pt-30 rt-line-form flight-lable text-center">
                    <div class="tab">
                        <button class="tablinks rt-btn rt-rounded rt-rounded-1 rt-Bshadow-1 btn-grey1 active" onclick="openCity(event, 'corporate')">Corporate form</button>
                        <button class="tablinks rt-btn rt-rounded rt-rounded-1 rt-Bshadow-1 btn-grey1" id="btnPersonalClick" onclick="openCity(event, 'personal')">Personal form</button>
                    </div>
                        <!-- <label for="form-type"></label>
                        <select id="form-type" class="formType text-pink">
                            <option value="corporate">Corporate Travel</option>
                            <option value="personal">Personal Travel</option>
                        </select> -->
                    </div><!-- /.col-md-12 -->
                    <!-- <h4 class="f-size-24 text-capitalize rt-mb-30  rt-semiblod">Passenger Info</h4> -->
                    
                    <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="rt-form rt-line-form flight-lable rt-pr-160 rt-pl-160 formDisplay" id="corporate"> -->
                    <div class="rt-form rt-line-form flight-lable rt-pr-160 rt-pl-160 formDisplay" id="corporate">
                        <h6 class="text-333 rt-medium text-center">Please provide the following information to discuss your needs with us or to start an instant trial.</h6>
                        <br>
                        <div class="row">
                            <div class="col-md-12 rt-mb-30 ">
                                <label for="fst-name">Full Name</label>
                                <input type="text" class="form-control" id="fst-name" name="FullName" placeholder="Enter Your Full Name ">
                                <!-- <span class="text-danger"> <?php echo $nameErr;?></span> -->
                            </div><!-- /.col-md-12 -->
                           <div class="col-md-12 rt-mb-30 ">
                                <label for="work-email">Work Email</label>
                                <input type="email" class="form-control" id="work-email" name="Email" placeholder="Enter Your Email Address">
                                <!-- <span class="text-danger"> <?php echo $emailErr;?></span> -->
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-12 rt-mb-30 ">
                                <label for="company-name">Company Name</label>
                                <input type="text" class="form-control" id="company-name" name="CompanyName" placeholder="Enter Your Company Name ">
                                <!-- <span class="text-danger"> <?php echo $companyErr;?></span> -->
                            </div><!-- /.col-md-12 -->
                            <div class="col-lg-12 rt-mb-30">
                                <label for="role-company"></label>
                                <select id="role-company" name="role">
                                    <option disabled selected hidden>Role at the Company</option>
                                    <option value="executive">Executive - I make decisions for the company</option>
                                    <option value="manager">Manager - I make decisions for my team</option>
                                    <option value="traveler">Traveler - I make decisions for my own travel</option>
                                </select>
                                <!-- <span class="text-danger"> <?php echo $roleErr;?></span> -->
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-12 rt-mb-30">
                                <label for="travel-trips"></label>
                                <select id="travel-trips" name="totalTrips">
                                    <option disabled selected hidden>Total trips per month</option>
                                    <option value="0-5">0-5</option>
                                    <option value="6-10">6-10</option>
                                    <option value="11-50">11-50</option>
                                    <option value="51-100">51-100</option>
                                    <option value="100+">100+</option>
                                </select>
                                <!-- <span class="text-danger"> <?php echo $tripErr;?></span> -->
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-12 rt-mb-30">
                                <label for="travel-type"></label>
                                <select id="travel-type" name="TravelType">
                                    <option disabled selected hidden>Type of travel</option>
                                    <option value="simple">We mostly book short and simple trips</option>
                                    <option value="complex">We also book many international, complex or group trips</option>
                                </select>
                                <!-- <span class="text-danger"> <?php echo $travelErr;?></span> -->
                            </div><!-- /.col-md-12 -->
                            <div class="text-center col-md-12 rt-mb-30">
                                <input class="rt-btn rt-gradient pill rt-sm text-uppercase form-control btnHover" name="corporateForm" id="corporateForm" type="submit" value="Continue">
                            </div>
                        </div><!-- /.row -->
                    <!-- </form> -->
                    </div>
                    <div class="rt-form rt-line-form flight-lable rt-pr-30 rt-pl-30 formDisplay" id="personal">
                    <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="rt-form rt-line-form flight-lable rt-pr-30 rt-pl-30 formDisplay" id="personal"> -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 rt-mb-30">
                                    <h4>Summary</h4>
                                    <label for="Destination">Number of Destinations</label>
                                    <select id="Destination" name="Destination">
                                        <option disabled selected hidden>Please Select</option>
                                        <option value="1">1 Place (one-way or round-trip)</option>
                                        <?php  
                                            for ($x = 2; $x < 21; $x++) {
                                            ?>
                                                <option value="<?php echo $x; ?>"><?php echo $x; ?> Places</option>
                                            <?php
                                            }
                                        ?>  
                                        
                                    </select>
                                    <!-- <span class="text-danger"> <?php echo $roleErr;?></span> -->
                                </div><!-- /.col-md-12 -->
                                <div class="col-lg-3 rt-mb-30">
                                    <label for="Adults">Adults</label>
                                    <select id="Adults" name="Adults">
                                        <option value="0">0</option>
                                        <option value="1" selected>1</option>
                                        <?php  
                                            for ($x = 2; $x < 101; $x++) {
                                            ?>
                                                <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                            <?php
                                            }
                                        ?>  
                                        
                                    </select>
                                    <!-- <span class="text-danger"> <?php echo $roleErr;?></span> -->
                                </div><!-- /.col-md-3 -->
                                <div class="col-lg-3 rt-mb-30">
                                    <label for="Children">Children</label>
                                    <select id="Children" name="Children">
                                    <option value="0" selected>0</option>
                                        <?php  
                                            for ($x = 1; $x < 101; $x++) {
                                            ?>
                                                <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                            <?php
                                            }
                                        ?>  
                                        
                                    </select>
                                    <!-- <span class="text-danger"> <?php echo $roleErr;?></span> -->
                                </div><!-- /.col-md-3 -->
                                <div class="col-lg-3 rt-mb-30">
                                    <label for="Infants">Infants</label>
                                    <select id="Infants" name="Infants">
                                        <option value="0" selected>0</option>
                                        <?php  
                                            for ($x = 1; $x < 101; $x++) {
                                            ?>
                                                <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                            <?php
                                            }
                                        ?>  
                                        
                                    </select>
                                    <!-- <span class="text-danger"> <?php echo $roleErr;?></span> -->
                                </div><!-- /.col-md-3 -->
                                <div class="col-lg-3 rt-mb-30">
                                    <label for="Pets">Pets</label>
                                    <select id="Pets" name="Pets">
                                    <option value="0" selected>0</option>
                                        <?php  
                                            for ($x = 1; $x < 6; $x++) {
                                            ?>
                                                <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                            <?php
                                            }
                                        ?>  
                                        
                                    </select>
                                    <!-- <span class="text-danger"> <?php echo $roleErr;?></span> -->
                                </div><!-- /.col-md-12 -->
                                <div class="col-lg-12 rt-mb-30">
                                    <label for="seat-class"></label>
                                    <select id="seat-class" name="SeatClass">
                                        <option value="Economy">Economy</option>
                                        <option value="Business">Business</option>
                                        <option value="First">First</option>
                                    </select>
                                    <!-- <span class="text-danger"> <?php echo $roleErr;?></span> -->
                                </div><!-- /.col-md-12 -->
                                <div class="col-lg-12 rt-mb-30">
                                    <label for="miles"></label>
                                    <select id="miles" name="MilesPoints">
                                        <option value="No">No</option>
                                        <option value="I want to use my miles/points">I want to use my miles/points</option>
                                        <option value="I want to reach an elite status goal">I want to reach an elite status goal (advanced)</option>
                                    </select>
                                    <!-- <span class="text-danger"> <?php echo $roleErr;?></span> -->
                                </div><!-- /.col-md-12 -->
                                <div class="col-lg-12 rt-mb-30">
                                    <label>Are you traveling for work?</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="workTravel" id="workTravel" value="Yes">
                                        <label class="form-check-label" for="inlineRadio2s">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="workTravel" id="workTravels" value="No" checked>
                                        <label class="form-check-label" for="inlineRadio2ss">No</label>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-12">
                                    <h4>Guarantee</h4>
                                    <p>
                                    We guarantee to beat your quote by <u>more than our fee</u> otherwise our service is entirely <span class="text-blue">FREE.</span> If you don't receive the best value and service, you can even contact me directly.
                                    </p>
                                    <p>- Lauren, co-founder of TravelEagle</p>
                                    <p>What's the catch?</p>
                                </div> -->
                                <div class="col-lg-12">
                                    <h4>Quote</h4>
                                    <label>Your best valid price for this trip (total for all travelers)?</label>
                                    <div class="row">
                                        <div class="col-lg-2 rt-mb-30">
                                            <select id="currency" name="Currency">
                                                <option value="USD">USD</option>
                                                <option value="EUR">EUR</option>
                                                <option value="AUD">AUD</option>
                                                <option value="CAD">CAD</option>
                                                <option value="GBP">GBP</option>
                                                <option value="AED">AED</option>
                                                <option value="AFN">AFN</option>
                                                <option value="ALL">ALL</option>
                                                <option value="AMD">AMD</option>
                                                <option value="ANG">ANG</option>
                                                <option value="AOA">AOA</option>
                                                <option value="ARS">ARS</option>
                                                <option value="AWG">AWG</option>
                                                <option value="AZN">AZN</option>
                                                <option value="BAM">BAM</option>
                                                <option value="BBD">BBD</option>
                                                <option value="BDT">BDT</option>
                                                <option value="BGN">BGN</option>
                                                <option value="BHD">BHD</option>
                                                <option value="BIF">BIF</option>
                                                <option value="BMD">BMD</option>
                                                <option value="BND">BND</option><option value="BOB">BOB</option><option value="BRL">BRL</option><option value="BSD">BSD</option><option value="BTN">BTN</option><option value="BWP">BWP</option><option value="BYN">BYN</option><option value="BZD">BZD</option><option value="CDF">CDF</option><option value="CHF">CHF</option><option value="CLF">CLF</option><option value="CLP">CLP</option><option value="CNY">CNY</option><option value="COP">COP</option><option value="CRC">CRC</option><option value="CUP">CUP</option><option value="CVE">CVE</option><option value="CZK">CZK</option><option value="DJF">DJF</option><option value="DKK">DKK</option><option value="DOP">DOP</option><option value="DZD">DZD</option><option value="EGP">EGP</option><option value="ETB">ETB</option><option value="FJD">FJD</option><option value="FKP">FKP</option><option value="GEL">GEL</option><option value="GHS">GHS</option><option value="GIP">GIP</option><option value="GMD">GMD</option><option value="GNF">GNF</option><option value="GTQ">GTQ</option><option value="GYD">GYD</option><option value="HKD">HKD</option><option value="HNL">HNL</option><option value="HRK">HRK</option><option value="HTG">HTG</option><option value="HUF">HUF</option><option value="IDR">IDR</option><option value="IEP">IEP</option><option value="ILS">ILS</option><option value="INR">INR</option><option value="IQD">IQD</option><option value="IRR">IRR</option><option value="ISK">ISK</option><option value="JMD">JMD</option><option value="JOD">JOD</option><option value="JPY">JPY</option><option value="KES">KES</option><option value="KGS">KGS</option><option value="KHR">KHR</option><option value="KMF">KMF</option><option value="KPW">KPW</option><option value="KRW">KRW</option><option value="KWD">KWD</option><option value="KZT">KZT</option><option value="LAK">LAK</option><option value="LBP">LBP</option><option value="LKR">LKR</option><option value="LRD">LRD</option><option value="LSL">LSL</option><option value="LTL">LTL</option><option value="LVL">LVL</option><option value="LYD">LYD</option><option value="MAD">MAD</option><option value="MDL">MDL</option><option value="MGA">MGA</option><option value="MKD">MKD</option><option value="MMK">MMK</option><option value="MNT">MNT</option><option value="MOP">MOP</option><option value="MRO">MRO</option><option value="MUR">MUR</option><option value="MVR">MVR</option><option value="MWK">MWK</option><option value="MXN">MXN</option><option value="MYR">MYR</option><option value="MZN">MZN</option><option value="NAD">NAD</option><option value="NGN">NGN</option><option value="NIO">NIO</option><option value="NOK">NOK</option><option value="NPR">NPR</option><option value="NZD">NZD</option><option value="OMR">OMR</option><option value="PAB">PAB</option><option value="PEN">PEN</option><option value="PGK">PGK</option><option value="PHP">PHP</option><option value="PKR">PKR</option><option value="PLN">PLN</option><option value="PYG">PYG</option><option value="QAR">QAR</option><option value="RON">RON</option><option value="RSD">RSD</option><option value="RUB">RUB</option><option value="RWF">RWF</option><option value="SAR">SAR</option><option value="SBD">SBD</option><option value="SCR">SCR</option><option value="SDG">SDG</option><option value="SEK">SEK</option><option value="SGD">SGD</option><option value="SHP">SHP</option><option value="SLL">SLL</option><option value="SOS">SOS</option><option value="SRD">SRD</option><option value="STD">STD</option><option value="SVC">SVC</option><option value="SYP">SYP</option><option value="SZL">SZL</option><option value="THB">THB</option><option value="TJS">TJS</option><option value="TMT">TMT</option><option value="TND">TND</option><option value="TOP">TOP</option><option value="TRY">TRY</option><option value="TTD">TTD</option><option value="TWD">TWD</option><option value="TZS">TZS</option><option value="UAH">UAH</option><option value="UGX">UGX</option><option value="UYU">UYU</option><option value="UZS">UZS</option><option value="VEF">VEF</option><option value="VND">VND</option><option value="VUV">VUV</option><option value="WST">WST</option><option value="XAF">XAF</option><option value="XCD">XCD</option><option value="XDR">XDR</option><option value="XOF">XOF</option><option value="XPF">XPF</option><option value="YER">YER</option><option value="ZAR">ZAR</option><option value="ZMK">ZMK</option><option value="ZWL">ZWL</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-5 rt-mb-30">
                                            <input type="text" class="form-control" name="CurrencyValue" id="CurrencyValue" placeholder="e.g. 2500 (total)">
                                        </div><!-- /.col-md-5 -->
                                        <div class="col-lg-5 rt-mb-30">
                                            <input type="text" class="form-control" name="Website" id="Website" placeholder="e.g. link or website">
                                        </div><!-- /.col-md-5 -->
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6 rt-mb-30">
                                            <label for="NoofStop">Max. Number of Stops</label>
                                            <select id="NoofStop" name="NoofStop">
                                                <option value="Unlimited">Unlimited</option>
                                                <option value="3">3 Stops</option>
                                                <option value="2">2 Stops</option>
                                                <option value="1">1 Stop</option>
                                                <option value="0">Direct</option>
                                            </select>
                                        </div><!-- /.col-md-5 -->
                                        <div class="col-lg-6 rt-mb-30">
                                        <label for="StopDuration">Max. Duration of Stops</label>
                                            <select id="StopDuration" name="StopDuration">
                                                <option value="Unlimited">Unlimited</option>
                                                <option value="12">12 Hours</option>
                                                <option value="8">8 Hours</option>
                                                <option value="5">5 Hours</option>
                                                <option value="3">3 Hours</option>
                                            </select>
                                        </div><!-- /.col-md-5 -->
                                    </div>
                                </div>
                                <div class="col-lg-12 rt-mb-30">
                                    <h4>Details</h4>
                                    <ul>
                                        <li>What cities are you departing and visiting?</li>
                                        <li>What dates can you depart and return?</li>
                                        <li>Can you travel with carry-on bags only?</li>
                                    </ul>
                                    <textarea class="form-control" name="Details" id="Details" placeholder="Please answer the above questions and add any extra information"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6 rt-mb-30">
                                            <label for="YourName">Your Name</label>
                                            <input type="text" class="form-control rt-mt-10-n" id="YourName" name="YourName" placeholder="">
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-lg-6 rt-mb-30">
                                            <label for="YourEmail">Your Email</label>
                                            <input type="text" class="form-control rt-mt-10-n" id="YourEmail" name="YourEmail" placeholder="">
                                        </div><!-- /.col-md-6 -->
                                    </div>
                                </div>

                                <div class="text-center col-md-12 rt-mb-30">
                                    <input class="rt-btn rt-gradient pill rt-sm text-uppercase form-control btnHover" type="button" id="personalForm" name="personalForm" value="Create Your Trip Request">
                                </div>
                            </div><!-- /.row -->
                        </div>
                        <div class="col-lg-4 border-lt">
                            <div class="right-section-form">
                                <div class="col-md-12 rt-mb-30 border-bt">
                                    <!-- <p class="accordion">What is TravelEagle?</p>
                                    <div class="panel">
                                        <p>TravelEagle is a new breed of travel concierge. Our genuine travel experts work directly with customers. These experts have an extraordinary understanding of flights, hotels and loyalty programs.</p>
                                        <p>You can use TravelEagle by launching a trip request on this page. Our experts then review your request, ask necessary questions, and work as hard as they can to help you travel better for less.</p>
                                    </div>
                                    <p class="accordion">Who are the experts?</p>
                                    <div class="panel">
                                        <p>Our travel experts are technical people with a passion for travel. Over the years they have developed systems and strategies to help themselves and their customers travel better for less.</p>
                                        <p>In aggregate, the TravelEagle experts live on six continents and have visited more than 140 countries. They run secret travel forums, subscribe to all airline newsletters, and can recite airport codes like the alphabet.</p>
                                    </div> -->
                                    <p class="accordion">How do they find savings?</p>
                                    <div class="panel">
                                        <p>Our experts help you save time and money by applying their deep technical expertise and many years of experience to the best search algorithms on the planet. They also have many contacts at airlines, hotels and deal brokers.</p>
                                        <p>More than just experience, our experts work together to systemize their strategies so they can apply them to your travel plans and itineraries. They can search hundred of deal sources and try many tricks in very little time.</p>
                                    </div>
                                    <p class="accordion">What if I don't save?</p>
                                    <div class="panel">
                                        <p>If you provide a quote, you don't pay if you don't save; it's as simple as that and there's no funny business. We highly recommend providing a quote so you get our savings guarantee.</p>
                                        <p>As you configure your trip on this page, we show you our guarantee and the simple terms. We have worded these terms as simply as possible, so you can rely on them without fine print.</p>
                                    </div>
                                    <p class="accordion">Why does it work?</p>
                                    <div class="panel">
                                        <p>TravelEagle produces great results for one main reason: our experts are more obsessed with flights, hotels and loyalty programs than anyone else on the planet. They've also hand-built many thousands of complex itineraries.</p>
                                        <p>We've made this work for you with a business model that makes sense. We aren't dependent on commissions like travel agents, so we are 100% on your side and only charge our fee if we beat your quote by more than our fee.</p>
                                    </div>
                                </div>
                                <div class="col-md-12 rt-mb-30 border-bt">
                                    <p class="f-size-13">You will <span class="text-danger">NOT</span> be charged upfront. Only once we are sure we can meet our guarantee.</p>
                                </div>
                                <!-- <div class="col-md-12 rt-mb-30">
                                    <table class="f-size-12" style="width: 100%">
                                        <tr>
                                            <td>Base Finder's Fee</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2 People</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2 Destinations</td>
                                            <td></td>
                                        </tr>
                                        <tr class="border-bt">
                                            <td>Economy Class</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>USD Total</td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    <p class="f-size-12">USD per person per destination, but only if we meet our guarantee!</p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- </form> -->
                </div><!-- /.flight-list-box -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="manifesto-bt-img">
        <img src="Images/Artboard–26.png"/>
    </div>
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
            <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class=""> -->
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="input-group mb-5">
                            <div class="w-100">
                                <input type="email" class="form-control text-white f-size-14" placeholder="Enter your email" aria-describedby="button-addon2" name="newsletter2" id="newsletter2">
                            </div>
                            <div class="input-group-append">
                                <input class="btn" type="submit" id="newsletterWelcome" value="Subscribe Now" name="newsletterWelcome" />
                            </div>
                        </div><!-- end input gorup -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            <!-- </form> -->
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

                    Copyright © 2020.All Rights Reserved By <a href="index.php">Corporate Business Class</a>
                </div><!-- /.copy-text -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="rt-footer-social wow fade-in-bottom" data-wow-duration="1.5s">
                        <ul>
                            <li><a href="https://www.letsflycheaper.com/" class="text-white f-size-12">The Corporate division of <img src="Images/lfclogo.png" class="rt-ml-15" alt="cardimage" draggable="false"></a></li>
                           
                            
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
    // $(document).ready(function(){
        $("#personal").hide();
    //     $("#form-type").change(function(){
    //         var type = $("#form-type").val();
    //         if(type == "corporate")
    //         {
    //             $("#corporate").show();
    //             $("#personal").hide();
    //         }
    //         else {
    //             $("#corporate").hide();
    //             $("#personal").show();
    //         }
    //     });
    // });

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("formDisplay");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    if(!evt.currentTarget){
    document.getElementById('btnPersonalClick').className += " active";
  }
  else{
    evt.currentTarget.className += " active";
  }
}

$(document).ready(function() {
    debugger;
    var currentPage = document.location.href.substr(0); //get current page url
   var url = currentPage.split('?');
   if(url[1] == "personal")
   {
    $('#btnPersonalClick').trigger('click', ['self', 'personal']);
   }
});
    // var acc = document.getElementsByClassName("accordion");
    // var i;

    // for (i = 0; i < acc.length; i++) {
    // acc[i].addEventListener("click", function() {
    //     this.classList.toggle("active");
    //     var panel = this.nextElementSibling;
    //     debugger;
    //     if (panel.style.display === "block") {
    //     panel.style.display = "none";
    //     } else {
    //     panel.style.display = "block";
    //     }
    // });
    // }

    var acc = document.getElementsByClassName("accordion");
var panel = document.getElementsByClassName('panel');

for (var i = 0; i < acc.length; i++) {
    acc[i].onclick = function() {
        var setClasses = !this.classList.contains('active');
        setClass(acc, 'active', 'remove');
        setClass(panel, 'show', 'remove');

        if (setClasses) {
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        }
    }
}

function setClass(els, className, fnName) {
    for (var i = 0; i < els.length; i++) {
        els[i].classList[fnName](className);
    }
}

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

    $(document).ready(function(){
        $('#newsletterWelcome').click(function() 
        {
            var email = $('#newsletter2').val();
            var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            if(email != null && email != "")
            {
                if(expr.test(email) == true)
                {
                    $.ajax({
                    url:"mail.php",
                    method:"POST",
                    data:{email: email},
                    success:function(response)
                        {
                            $('#newsletter2').val("");
                            toastr.success('Email sent!!<br/>', '', {
                                showMethod: "fadeIn",
                                positionClass: 'toast-top-right',
                                timeOut: 5000,
                                allowHtml: true,
                                iconClass: 'toast-success-new',
                                autoDismiss: true,
                                tapToDismiss: true,
                            });
                        }
                    })
                }
                else{
                    toastr.success('Please enter valid email <br/>', '', {
                    showMethod: "fadeIn",
                    positionClass: 'toast-top-right',
                    timeOut: 5000,
                    allowHtml: true,
                    iconClass: 'toast-error-new',
                    autoDismiss: true,
                    tapToDismiss: true,
                });
                }
            }
           else {
            toastr.success('No email Entered! <br/>', '', {
                    showMethod: "fadeIn",
                    positionClass: 'toast-top-right',
                    timeOut: 5000,
                    allowHtml: true,
                    iconClass: 'toast-error-new',
                    autoDismiss: true,
                    tapToDismiss: true,
                });
           }
        });

        $('#corporateForm').click(function() 
        {
            var fullName = $('#fst-name').val();
            var workEmail = $('#work-email').val();
            var companyName = $('#company-name').val();
            var roleCompany = $('#role-company').val();
            var travelTrips = $('#travel-trips').val();
            var travelType = $('#travel-type').val();
            var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            if(fullName != null && fullName != "")
            {
                if(workEmail != null && workEmail != "")
                {
                    if(expr.test(workEmail) == true)
                    {
                        if(companyName != null && companyName != "")
                        {
                            if(roleCompany != null && roleCompany != "")
                            {
                                if(travelTrips != null && travelTrips != "")
                                {
                                    if(travelType != null && travelType != "")
                                    {
                                        $.ajax({
                                        url:"corporateForm.php",
                                        method:"POST",
                                        data:{fullName: fullName, workEmail: workEmail, companyName: companyName, roleCompany: roleCompany, travelTrips: travelTrips, travelType: travelType},
                                        success:function(response)
                                            {
                                                $('#fst-name').val("");
                                                $('#work-email').val("");
                                                $('#company-name').val("");
                                                $('#role-company').val("");
                                                $('#travel-trips').val("");
                                                $('#travel-type').val("");
                                                toastr.success('Email sent!!<br/>', '', {
                                                    showMethod: "fadeIn",
                                                    positionClass: 'toast-top-right',
                                                    timeOut: 5000,
                                                    allowHtml: true,
                                                    iconClass: 'toast-success-new',
                                                    autoDismiss: true,
                                                    tapToDismiss: true,
                                                });
                                            }
                                        })
                                    }
                                    else
                                    {
                                        toastr.success('Please enter Travel type <br/>', '', {
                                        showMethod: "fadeIn",
                                        positionClass: 'toast-top-right',
                                        timeOut: 5000,
                                        allowHtml: true,
                                        iconClass: 'toast-error-new',
                                        autoDismiss: true,
                                        tapToDismiss: true,
                                        });
                                    }
                                }
                                else
                                {
                                    toastr.success('Please enter Travel trips <br/>', '', {
                                    showMethod: "fadeIn",
                                    positionClass: 'toast-top-right',
                                    timeOut: 5000,
                                    allowHtml: true,
                                    iconClass: 'toast-error-new',
                                    autoDismiss: true,
                                    tapToDismiss: true,
                                    });
                                }
                            }
                            else
                            {
                                toastr.success('Please enter Role <br/>', '', {
                                    showMethod: "fadeIn",
                                    positionClass: 'toast-top-right',
                                    timeOut: 5000,
                                    allowHtml: true,
                                    iconClass: 'toast-error-new',
                                    autoDismiss: true,
                                    tapToDismiss: true,
                                    });
                            }
                        }
                        else
                        {
                            toastr.success('Please enter Company Name <br/>', '', {
                                    showMethod: "fadeIn",
                                    positionClass: 'toast-top-right',
                                    timeOut: 5000,
                                    allowHtml: true,
                                    iconClass: 'toast-error-new',
                                    autoDismiss: true,
                                    tapToDismiss: true,
                                    });
                        }
                    }
                    else
                    {
                        toastr.success('Please enter valid Email <br/>', '', {
                        showMethod: "fadeIn",
                        positionClass: 'toast-top-right',
                        timeOut: 5000,
                        allowHtml: true,
                        iconClass: 'toast-error-new',
                        autoDismiss: true,
                        tapToDismiss: true,
                        });
                    }
                }
                else
                {
                    toastr.success('Please enter Email <br/>', '', {
                    showMethod: "fadeIn",
                    positionClass: 'toast-top-right',
                    timeOut: 5000,
                    allowHtml: true,
                    iconClass: 'toast-error-new',
                    autoDismiss: true,
                    tapToDismiss: true,
                    });
                }
            }
           else 
           {
            toastr.success('Please enter Full Name <br/>', '', {
                    showMethod: "fadeIn",
                    positionClass: 'toast-top-right',
                    timeOut: 5000,
                    allowHtml: true,
                    iconClass: 'toast-error-new',
                    autoDismiss: true,
                    tapToDismiss: true,
                });
           }
        });

        $('#personalForm').click(function() 
        {
            var Destination = $('#Destination').val();
            var Adults = $('#Adults').val();
            var Children = $('#Children').val();
            var Infants = $('#Infants').val();
            var Pets = $('#Pets').val();
            var seatClass = $('#seat-class').val();
            var miles = $('#miles').val();
            var workTravel = $('input[name=workTravel]:checked').val();
            var currency = $('#currency').val();
            var CurrencyValue = $('#CurrencyValue').val();
            var Website = $('#Website').val();
            var NoofStop = $('#NoofStop').val();
            var StopDuration = $('#StopDuration').val();
            var Details = $('#Details').val();
            var YourName = $('#YourName').val();
            var YourEmail = $('#YourEmail').val();
            var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;


            if(Destination != null && Destination != "")
            {
                if(Adults != null && Adults != "")
                {
                    if(Children != null && Children != "")
                    {
                        if(Infants != null && Infants != "")
                        {
                            if(Pets != null && Pets != "")
                            {
                                if(seatClass != null && seatClass != "")
                                {
                                    if(miles != null && miles != "")
                                    {
                                        if(workTravel != null && workTravel != "")
                                        {
                                            if(currency != null && currency != "")
                                            {
                                                if(CurrencyValue != null && CurrencyValue != "")
                                                {
                                                    if(Website != null && Website != "")
                                                    {
                                                        if(NoofStop != null && NoofStop != "")
                                                        {
                                                            if(StopDuration != null && StopDuration != "")
                                                            {
                                                                if(Details != null && Details != "")
                                                                {
                                                                    if(YourName != null && YourName != "")
                                                                    {
                                                                        if(YourEmail != null && YourEmail != "")
                                                                        {
                                                                            if(expr.test(YourEmail) == true)
                                                                            {
                                                                                $.ajax({
                                                                                url:"personalForm.php",
                                                                                method:"POST",
                                                                                data:{Destination: Destination, Adults: Adults, Children: Children, Infants: Infants, Pets: Pets, seatClass: seatClass, miles: miles, workTravel: workTravel, currency: currency, CurrencyValue: CurrencyValue, Website: Website, NoofStop: NoofStop, StopDuration: StopDuration, Details: Details, YourName: YourName, YourEmail: YourEmail},
                                                                                success:function(response)
                                                                                    {
                                                                                        $('#Destination').val("");
                                                                                        $('#Adults').val("");
                                                                                        $('#Children').val("");
                                                                                        $('#Infants').val("");
                                                                                        $('#Pets').val("");
                                                                                        $('#seat-class').val("");
                                                                                        $('#miles').val("");
                                                                                        $('#workTravel').val("");
                                                                                        $('#currency').val("");
                                                                                        $('#CurrencyValue').val("");
                                                                                        $('#Website').val("");
                                                                                        $('#NoofStop').val("");
                                                                                        $('#StopDuration').val("");
                                                                                        $('#Details').val("");
                                                                                        $('#YourName').val("");
                                                                                        $('#YourEmail').val("");
                                                                                        toastr.success('Email sent!!<br/>', '', {
                                                                                            showMethod: "fadeIn",
                                                                                            positionClass: 'toast-top-right',
                                                                                            timeOut: 5000,
                                                                                            allowHtml: true,
                                                                                            iconClass: 'toast-success-new',
                                                                                            autoDismiss: true,
                                                                                            tapToDismiss: true,
                                                                                        });
                                                                                    }
                                                                                })
                                                                            }
                                                                            else
                                                                            {
                                                                                toastr.success('Please enter valid Email <br/>', '', {
                                                                                showMethod: "fadeIn",
                                                                                positionClass: 'toast-top-right',
                                                                                timeOut: 5000,
                                                                                allowHtml: true,
                                                                                iconClass: 'toast-error-new',
                                                                                autoDismiss: true,
                                                                                tapToDismiss: true,
                                                                                });
                                                                            }
                                                                        }
                                                                        else
                                                                        {
                                                                            toastr.success('Please enter Email <br/>', '', {
                                                                            showMethod: "fadeIn",
                                                                            positionClass: 'toast-top-right',
                                                                            timeOut: 5000,
                                                                            allowHtml: true,
                                                                            iconClass: 'toast-error-new',
                                                                            autoDismiss: true,
                                                                            tapToDismiss: true,
                                                                            });
                                                                        }
                                                                    }
                                                                    else
                                                                    {
                                                                        toastr.success('Please enter Your Name <br/>', '', {
                                                                            showMethod: "fadeIn",
                                                                            positionClass: 'toast-top-right',
                                                                            timeOut: 5000,
                                                                            allowHtml: true,
                                                                            iconClass: 'toast-error-new',
                                                                            autoDismiss: true,
                                                                            tapToDismiss: true,
                                                                            });
                                                                    }
                                                                }
                                                                else
                                                                {
                                                                    toastr.success('Please enter Details <br/>', '', {
                                                                            showMethod: "fadeIn",
                                                                            positionClass: 'toast-top-right',
                                                                            timeOut: 5000,
                                                                            allowHtml: true,
                                                                            iconClass: 'toast-error-new',
                                                                            autoDismiss: true,
                                                                            tapToDismiss: true,
                                                                            });
                                                                }
                                                            }
                                                            else
                                                            {
                                                                toastr.success('Please enter Max. Duration of Stops <br/>', '', {
                                                                            showMethod: "fadeIn",
                                                                            positionClass: 'toast-top-right',
                                                                            timeOut: 5000,
                                                                            allowHtml: true,
                                                                            iconClass: 'toast-error-new',
                                                                            autoDismiss: true,
                                                                            tapToDismiss: true,
                                                                            });
                                                            }
                                                        }
                                                        else
                                                        {
                                                            toastr.success('Please enter Max. Number of Stops <br/>', '', {
                                                                            showMethod: "fadeIn",
                                                                            positionClass: 'toast-top-right',
                                                                            timeOut: 5000,
                                                                            allowHtml: true,
                                                                            iconClass: 'toast-error-new',
                                                                            autoDismiss: true,
                                                                            tapToDismiss: true,
                                                                            });
                                                        }
                                                    }
                                                    else
                                                    {
                                                        toastr.success('Please enter Website <br/>', '', {
                                                                            showMethod: "fadeIn",
                                                                            positionClass: 'toast-top-right',
                                                                            timeOut: 5000,
                                                                            allowHtml: true,
                                                                            iconClass: 'toast-error-new',
                                                                            autoDismiss: true,
                                                                            tapToDismiss: true,
                                                                            });
                                                    }
                                                }
                                                else
                                                {
                                                    toastr.success('Please enter Price for Quote <br/>', '', {
                                                                            showMethod: "fadeIn",
                                                                            positionClass: 'toast-top-right',
                                                                            timeOut: 5000,
                                                                            allowHtml: true,
                                                                            iconClass: 'toast-error-new',
                                                                            autoDismiss: true,
                                                                            tapToDismiss: true,
                                                                            });
                                                }
                                            }
                                            else
                                            {
                                                toastr.success('Please enter Currency Unit <br/>', '', {
                                                                            showMethod: "fadeIn",
                                                                            positionClass: 'toast-top-right',
                                                                            timeOut: 5000,
                                                                            allowHtml: true,
                                                                            iconClass: 'toast-error-new',
                                                                            autoDismiss: true,
                                                                            tapToDismiss: true,
                                                                            });
                                            }
                                        }
                                        else
                                        {
                                            toastr.success('Please enter Are you travel for work?<br/>', '', {
                                                                            showMethod: "fadeIn",
                                                                            positionClass: 'toast-top-right',
                                                                            timeOut: 5000,
                                                                            allowHtml: true,
                                                                            iconClass: 'toast-error-new',
                                                                            autoDismiss: true,
                                                                            tapToDismiss: true,
                                                                            });
                                        }
                                    }
                                    else
                                    {
                                        toastr.success('Please enter Miles <br/>', '', {
                                        showMethod: "fadeIn",
                                        positionClass: 'toast-top-right',
                                        timeOut: 5000,
                                        allowHtml: true,
                                        iconClass: 'toast-error-new',
                                        autoDismiss: true,
                                        tapToDismiss: true,
                                        });
                                    }
                                }
                                else
                                {
                                    toastr.success('Please select Seat Class <br/>', '', {
                                    showMethod: "fadeIn",
                                    positionClass: 'toast-top-right',
                                    timeOut: 5000,
                                    allowHtml: true,
                                    iconClass: 'toast-error-new',
                                    autoDismiss: true,
                                    tapToDismiss: true,
                                    });
                                }
                            }
                            else
                            {
                                toastr.success('Please enter Pets value <br/>', '', {
                                    showMethod: "fadeIn",
                                    positionClass: 'toast-top-right',
                                    timeOut: 5000,
                                    allowHtml: true,
                                    iconClass: 'toast-error-new',
                                    autoDismiss: true,
                                    tapToDismiss: true,
                                    });
                            }
                        }
                        else
                        {
                            toastr.success('Please enter Infant value <br/>', '', {
                                    showMethod: "fadeIn",
                                    positionClass: 'toast-top-right',
                                    timeOut: 5000,
                                    allowHtml: true,
                                    iconClass: 'toast-error-new',
                                    autoDismiss: true,
                                    tapToDismiss: true,
                                    });
                        }
                    }
                    else
                    {
                        toastr.success('Please enter Children value <br/>', '', {
                        showMethod: "fadeIn",
                        positionClass: 'toast-top-right',
                        timeOut: 5000,
                        allowHtml: true,
                        iconClass: 'toast-error-new',
                        autoDismiss: true,
                        tapToDismiss: true,
                        });
                    }
                }
                else
                {
                    toastr.success('Please enter Adults value <br/>', '', {
                    showMethod: "fadeIn",
                    positionClass: 'toast-top-right',
                    timeOut: 5000,
                    allowHtml: true,
                    iconClass: 'toast-error-new',
                    autoDismiss: true,
                    tapToDismiss: true,
                    });
                }
            }
           else 
           {
            toastr.success('Please enter Destination <br/>', '', {
                    showMethod: "fadeIn",
                    positionClass: 'toast-top-right',
                    timeOut: 5000,
                    allowHtml: true,
                    iconClass: 'toast-error-new',
                    autoDismiss: true,
                    tapToDismiss: true,
                });
           }
        });
    });

</script>
</body>

</html>








