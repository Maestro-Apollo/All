<?php
// $database = include('config.php');
// $newsletter1Err = "";
// $newsletter1 = "";
// // define variables and set to empty values

// if(isset($_POST["newsletterPolicy"]))
// {
//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         if (empty($_POST["newsletter4"])) {
//             $newsletter1Err = "Email is required";
//         } else {
//             $newsletter1 = $_POST['newsletter4'];
//         }
    
//         if($newsletter1 != "")
//         {
//             $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//             $name = "Corporate Business Class";
//             $headers .= "From:" . $database['EmailFrom'];
//             $email = $database['EmailTo'];
//             $message = '<html><body><table>';
//             $message .= '<tr><td style="width:50%;padding-left:10px;padding-right:10px;">Email </td><td style="width:50%;padding-left:10px;padding-right:10px;">'.$newsletter1.'</td></tr>';
//             $message .= '</table></body></html>';
            
//             $to = $database['EmailTo'];
//             $subject = 'Newsletter query';
            
//                 if (mail ($to, $subject, $message, $headers)) {
//                     // echo '<p>Your message has been sent!</p>';
//                     echo "<script>alert('Your email has been sent!');</script>";
//                     //header("location:index.html");
//                 } else {
//                     // echo '<p>Something went wrong, go back and try again!</p>';
//                     echo "<script>alert('Something went wrong, go back and try again!');</script>";
//                     //header("location:index.html");
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
                        <a href="index.php" class="brand-logo"><img src="Images/logo-white.png" alt="" width="200"></a>
                        <a href="index.php" class="sticky-logo"><img src="Images/logo-black.png" alt="" width="200"></a>
                        <div class="ml-auto d-flex align-items-center">
                        

<div class="main-menu">
    <ul>
        <li class="current-menu-item"><a href="index.php">Home</a></li>
        <li class="current-menu-item"><a href="policy.php" class="btn-hover-home">Policy</a></li>
        <li class="current-menu-item d-none-desktop"><a href="agent.php" data-target="#rtmodal-1" data-toggle="modal">Login</a></li>
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

<!-- 
    ====== Services Start ==============
 -->
 
<div class="rt-breadcump rt-breadcump-height">
    <div class="rt-page-bg rtbgprefix-cover" style="background-image: url(Images/Artboard–31.jpg)"></div><!-- /.rt-page-bg -->
    <div class="container">
        <div class="row rt-breadcump-height">
            <div class="col-6">
                <div class="breadcrumbs-content">
                <h3>Privacy Policy</h3>
                    <div class="breadcrumbs">
                        <span class="divider"><i class="icofont-home"></i></span>
                        <a href="index.php" title="Home">Home</a>
                        <!-- <span class="divider"><i class="icofont-simple-right"></i></span>
                        <a href="index.html" title="Home">Home</a> -->
                        <span class="divider"><i class="icofont-simple-right"></i></span>
                        Privacy Policy
                    
                    </div>
                    <!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-6 -->
            <div class="col-6">
                <!-- <div class="breadcrumbs-content text-right agent-img rt-pt-200">
                    <div class="agent-img-container">
                        <img src="Images/user.png">
                    </div>
                </div> -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->

<section class="about-area">
    </div><!-- /.rt-design-elmnts -->
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="rt-section-title-wrapper">
                    <!-- <h2 class="rt-section-title">
                        <span>My Short Story</span>
                        Know About Me
                    </h2> -->
                    <h4>This is the web site of Corporate Business Class </h4>
                    <p>Our postal address is: </p>
                    <p><strong>Corporate Business Class </strong></p>
                    <p><strong>2420 Camino Ramon </strong></p>
                    <p><strong>San Ramon, CA 94583 </strong></p>
                    <p>This privacy notice discloses the privacy practices for www.corporatebusinessclass.com. This privacy notice applies solely to information collected by this web site. It will notify you of the following: </p>
                    <ol>
                        <li>What personally identifiable information is collected from you through the web site and how it is used and with whom it may be shared.</li>
                        <li>What choices are available to you regarding the use of your data. </li>
                        <li>The security procedures in place to protect the misuse of your information. </li>
                        <li>How you can correct any inaccuracies in the information. </li>
                    </ol>
                    <h5 class="rt-pt-10 rt-pd-10">Information Collection, Use, and Sharing</h5>
                    <p>We are the sole owners of the information collected on this site. We only have access to collect information that you voluntarily give us such as; name, address, phone and billing information via email or other direct contact from you. We will not sell or rent this information to anyone. </p>
                    <p>We will use your information to respond to you, regarding the reason you contacted us. We will not share your information with any third party outside of our organization, other than as necessary to fulfill your request, e.g. to ship an order. </p>
                    <p>Unless you ask us not to, we may contact you via email in the future to tell you about specials, new products or services, or changes to this privacy policy. </p>
                    <h5 class="rt-pt-10 rt-pd-10">Your Access to and Control Over Information </h5>
                    <p>You may opt out of any future contacts from us at any time. You can do the following at any time by contacting us via the email address or phone number given on our website: </p>
                    <ol>
                        <li>See what data we have about you, if any. </li>
                        <li>Change/correct any data we have about you.</li>
                        <li>Have us delete any data we have about you. </li>
                        <li>Express any concern you have about our use of your data. </li>
                    </ol>
                    <h5 class="rt-pt-10 rt-pd-10">Security</h5>
                    <p>We take precautions to protect your information. When you submit sensitive information via the website, fax or by phone, your information is protected both online and offline. </p>
                    <p>In order to comply with GDPR regulations, we have updated our privacy policy regarding the private information of EU citizens. </p>
                    <ol style="list-style-type: upper-alpha">
                        <li> 
                            <strong> Introduction </strong> 
                            <ol>
                                <li>The privacy of our website visitors is very important to us, and we are committed to safeguarding it. This policy explains what we will do with your personal information. </li>
                                <li>Consenting to our use of cookies in accordance with the terms of this policy when you first visit our website permits us to use cookies every time you visit our website.</li>
                            </ol>
                        </li>
                        <li>
                            <strong> Credit </strong>
                            <p>This document was created using a template from SEQ Legal (seqlegal.com) and modified by Website Planet </p>
                            <a class="link-hover" href="http://www.websiteplanet.com">(www.websiteplanet.com) </a>        
                        </li>
                        <li>
                            <strong>Collecting personal information </strong>
                            <p>The following types of personal information may be collected, stored, and used: </p>
                            <ol>
                                <li>information about your computer including your IP address, geographical location, browser type and version, and operating system; </li>
                                <li>information about your visits to and use of this website including the referral source, length of visit, page views, and website navigation paths;</li>
                                <li>information, such as your email address, that you enter when you register with our website;</li>
                                <li>information that you enter when you create a profile on our website— for example, your name, profile pictures, gender, birthday, relationship status, interests and hobbies, educational details, and employment details;</li>
                                <li>information, such as your name and email address, that you enter in order to set up subscriptions to our emails and/or newsletters;</li>
                                <li>information that you enter while using the services on our website;</li>
                                <li>information that is generated while using our website, including when, how often, and under what circumstances you use it;</li>
                                <li>information relating to anything you purchase, services you use, or transactions you make through our website, which includes your name, address, telephone number, email address, and credit card details;</li>
                                <li>information that you post to our website with the intention of publishing it on the internet, which includes your username, profile pictures, and the content of your posts;</li>
                                <li>information contained in any communications that you send to us by email or through our website, including its communication content and metadata;</li>
                                <li>any other personal information that you send to us.</li>
                            </ol>
                            <p>Before you disclose to us the personal information of another person, you must obtain that person’s consent to both the disclosure and the processing of that personal information in accordance with this policy</p>
                        </li>
                        <li>
                            <strong>Using your personal information </strong>
                            <p>Personal information submitted to us through our website will be used for the purposes specified in this policy or on the relevant pages of the website. We may use your personal information for the following: </p>
                            <ol>
                                <li>administering our website and business;</li>
                                <li>personalizing our website for you;</li>
                                <li>enabling your use of the services available on our website;</li>
                                <li>sending you goods purchased through our website;</li>
                                <li>supplying services purchased through our website;</li>
                                <li>sending statements, invoices, and payment reminders to you, and collecting payments from you;</li>
                                <li>sending you non-marketing commercial communications;</li>
                                <li>sending you email notifications that you have specifically requested;</li>
                                <li>sending you our email newsletter, if you have requested it (you can inform us at any time if you no longer require the newsletter);</li>
                                <li>sending you marketing communications relating to our business or the businesses of carefully-selected third parties which we think may be of interest to you, by post or, where you have specifically agreed to this, by email or similar technology (you can inform us at any time if you no longer require marketing communications);</li>
                                <li>providing third parties with statistical information about our users (but those third parties will not be able to identify any individual user from that information);</li>
                                <li>dealing with inquiries and complaints made by or about you relating to our website;</li>
                                <li>keeping our website secure and prevent fraud;</li>
                                <li>verifying compliance with the terms and conditions governing the use of our website (including monitoring private messages sent through our website private messaging service); and</li>
                                <li>other uses.</li>
                            </ol>
                            <p>If you submit personal information for publication on our website, we will publish and otherwise use that information in accordance with the license you grant to us. </p>
                            <p>We will not, without your express consent, supply your personal information to any third party for their or any other third party’s direct marketing. </p>
                        </li>
                        <li>
                            <strong>Disclosing personal information</strong>
                            <p>We may disclose your personal information to any of our employees, officers, insurers, professional advisers, agents, suppliers, or subcontractors as reasonably necessary for the purposes set out in this policy. </p>
                            <p>We may disclose your personal information to any member of our group of companies (this means our subsidiaries, our ultimate holding company and all its subsidiaries) as reasonably necessary for the purposes set out in this policy. </p>
                            <p>We may disclose your personal information: </p>
                            <ol>
                                <li>to the extent that we are required to do so by law; </li>
                                <li>in connection with any ongoing or prospective legal proceedings;</li>
                                <li>in order to establish, exercise, or defend our legal rights (including providing information to others for the purposes of fraud prevention and reducing credit risk);</li>
                                <li>to the purchaser (or prospective purchaser) of any business or asset that we are (or are contemplating) selling; and</li>
                                <li>to any person who we reasonably believe may apply to a court or other competent authority for disclosure of that personal information where, in our reasonable opinion, such court or authority would be reasonably likely to order disclosure of that personal information.</li>
                            </ol>
                            <p>Except as provided in this policy, we will not provide your personal information to third parties. </p>
                        </li>
                        <li>
                            <strong>International data transfers</strong>
                            <ol>
                                <li>Information that we collect may be stored, processed in, and transferred between any of the countries in which we operate in order to enable us to use the information in accordance with this policy.</li>
                                <li>Information that we collect may be transferred to the following countries which do not have data protection laws equivalent to those in force in the European Economic Area: the United States of America, Russia, Japan, China, and India.</li>
                                <li>Personal information that you publish on our website or submit for publication on our website may be available, via the internet, around the world. We cannot prevent the use or misuse of such information by others.</li>
                                <li>You expressly agree to the transfers of personal information described in this Section F.</li>
                            </ol>
                        </li>
                        <li>
                            <strong>Retaining personal information</strong>
                            <ol>
                                <li>This Section G sets out our data retention policies and procedure, which are designed to help ensure that we comply with our legal obligations regarding the retention and deletion of personal information.</li>
                                <li>Personal information that we process for any purpose or purposes shall not be kept for longer than is necessary for that purpose or those purposes.</li>
                                <li>
                                    <span>Without prejudice to article G-2, we will usually delete personal data falling within the categories set out below:</span>
                                    <ol>
                                        <li>personal data will be deleted after one year to date of last business transaction; and</li>
                                        <li>upon request of customer, with the understanding that once deleted, should the customer request to work with us again, we will need to re-collect relevant personal data.</li>
                                    </ol>
                                </li>
                                <li>
                                    <span>Notwithstanding the other provisions of this Section G, we will retain documents (including electronic documents) containing personal data:</span>
                                    <ol>
                                        <li>to the extent that we are required to do so by law;</li>
                                        <li>if we believe that the documents may be relevant to any ongoing or prospective legal proceedings; and</li>
                                        <li>in order to establish, exercise, or defend our legal rights (including providing information to others for the purposes of fraud prevention and reducing credit risk)</li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <strong>Security of your personal information</strong>
                            <ol>
                                <li>We will take reasonable technical and organizational precautions to prevent the loss, misuse, or alteration of your personal information.</li>
                                <li>We will store all the personal information you provide on our secure (password- and firewall-protected) servers.</li>
                                <li>All electronic financial transactions entered into through our website will be protected by encryption technology.</li>
                                <li>You acknowledge that the transmission of information over the internet is inherently insecure, and we cannot guarantee the security of data sent over the internet.</li>
                                <li>You are responsible for keeping the password you use for accessing our website confidential; we will not ask you for your password (except when you log in to our website).</li>
                            </ol>
                        </li>
                        <li>
                            <strong>Amendments</strong>
                            <p>We may update this policy from time to time by publishing a new version on our website. You should check this page occasionally to ensure you understand any changes to this policy. We may notify you of changes to this policy by email or through the private messaging system on our website.</p>
                        </li>
                        <li>
                            <strong>Your rights</strong>
                            <p>You may instruct us to provide you with any personal information we hold about you; provision of such information will be subject to the following: </p>
                            <ol>
                                <li>The supply of appropriate evidence of your identity. We will usually accept a photocopy of your passport certified by a notary plus an original copy of a utility bill showing your current address.</li>
                            </ol>
                            <p>We may withhold personal information that you request to the extent permitted by law. </p>
                            <p>You may instruct us at any time not to process your personal information for marketing purposes.</p>
                            <p>In practice, you will usually either expressly agree in advance to our use of your personal information for marketing purposes, or we will provide you with an opportunity to opt out of the use of your personal information for marketing purposes.</p>
                        </li>
                        <li>
                            <strong>Third party websites</strong>
                            <p>Our website includes hyperlinks to, and details of, third party websites. We have no control over, and are not responsible for, the privacy policies and practices of third parties. </p>
                        </li>
                        <li>
                            <strong>Updating information</strong>
                            <p>Please let us know if the personal information that we hold about you needs to be corrected or updated. </p>
                        </li>
                        <li>
                            <strong>Cookies</strong>
                            <p>Our website uses cookies. A cookie is a file containing an identifier (a string of letters and numbers) that is sent by a web server to a web browser and is stored by the browser. The identifier is then sent back to the server each time the browser requests a page from the server. Cookies may be either “persistent” cookies or “session” cookies: a persistent cookie will be stored by a web browser and will remain valid until its set expiry date, unless deleted by the user before the expiry date; a session cookie, on the other hand, will expire at the end of the user session, when the web browser is closed. Cookies do not typically contain any information that personally identifies a user, but personal information that we store about you may be linked to the information stored in and obtained from cookies. We use both session and persistent cookies on our website.</p>
                            <ol>
                                <li>
                                    <span>The names of the cookies that we use on our website, and the purposes for which they are used, are set out below:</span>
                                    <ol>
                                        <li>we use Google Analytics and Adwords on our website to recognize a computer when a user visits the website, to target advertisements which may be of particular interest to specific users.</li>
                                    </ol>
                                </li>
                                <li>
                                    <span>Most browsers allow you to refuse to accept cookies—for example:</span>
                                    <ol>
                                        <li>in Internet Explorer (version 10) you can block cookies using the cookie handling override settings available by clicking “Tools,” “Internet Options,” “Privacy,” and then “Advanced”;</li>
                                        <li>in Firefox (version 24) you can block all cookies by clicking “Tools,” “Options,” “Privacy,” selecting “Use custom settings for history” from the drop-down menu, and unticking “Accept cookies from sites”; and</li>
                                        <li>in Chrome (version 29), you can block all cookies by accessing the “Customize and control” menu, and clicking “Settings,” “Show advanced settings,” and “Content settings,” and then selecting “Block sites from setting any data” under the “Cookies” heading.</li>
                                    </ol>
                                </li>
                            </ol>
                            <p>Blocking all cookies will have a negative impact upon the usability of many websites. If you block cookies, you will not be able to use all the features on our website. </p>
                            <ol>
                                <li>
                                    <span>You can delete cookies already stored on your computer—for example:</span>
                                    <ol>
                                        <li>in Internet Explorer (version 10), you must manually delete cookie files (you can find instructions for doing so at <a class="link-hover" href="http://support.microsoft.com/kb/278835">http://support.microsoft.com/kb/278835</a> );</li>
                                        <li>in Firefox (version 24), you can delete cookies by clicking “Tools,” “Options,” and “Privacy”, then selecting “Use custom settings for history”, clicking “Show Cookies,” and then clicking “Remove All Cookies”; and</li>
                                        <li>in Chrome (version 29), you can delete all cookies by accessing the “Customize and control” menu, and clicking “Settings,” “Show advanced settings,” and “Clear browsing data,” and then selecting “Delete cookies and other site and plug-in data” before clicking “Clear browsing data.”</li>
                                    </ol>
                                </li>
                                <li>Deleting cookies will have a negative impact on the usability of many websites.</li>
                            </ol>
                        </li>
                    </ol>
                    <h5 class="rt-pt-10 rt-pd-10">If you feel that we are not abiding by this privacy policy, you should contact us immediately via telephone at 800 753 0325 or via email info@corporatebusinessclass.com</h5>
                
                </div><!-- /.rt-section-title-wrapper -->
                <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!-- <div class="spacer-top"></div> -->

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
                                    <input type="email" class="form-control text-white f-size-14" placeholder="Enter your email" aria-describedby="button-addon2" id="newsletter4" name="newsletter4">
                                </div>
                                <!-- <span class="text-danger"> <?php echo $newsletter1Err;?></span> -->
                                <div class="input-group-append">
                                    <input class="btn" type="button" name="newsletterPolicy" id="newsletterEmailPolicy" value="Subscribe Now" />
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
      $(document).ready(function(){
        $('#newsletterEmailPolicy').click(function() 
        {
            var email = $('#newsletter4').val();
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
                            $('#newsletter4').val("");
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
    });

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









