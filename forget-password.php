<?php
session_start();

include('class/database.php');
class loginPage extends database
{

    protected $link;

    public function loginFunction()
    {

        if (isset($_POST['submit'])) {
            $email = trim($_POST['email']);


            $seed = str_split('0123456789'); // and any other characters
            shuffle($seed); // probably optional since array_is randomized; this may be redundant
            $rand = '';
            foreach (array_rand($seed, 6) as $k) $rand .= $seed[$k];

            $code = $rand;
            $text = $email . $code . time();
            $hash = md5($text);

            $sqlP = "SELECT * from user_tbl where email = '$email' ";
            $resP = mysqli_query($this->link, $sqlP);




            if (mysqli_num_rows($resP) > 0) {
                $sql = "UPDATE `user_tbl` SET `hash`= '$hash',`code`= '$code' WHERE email = '$email'";
            } else {
                return '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Please sign up!</strong>
          </div>';
            }


            $res = mysqli_query($this->link, $sql);
            if ($res) {
                $email2 = $email;

                $subject = "Verification Code";
                $message = 'This is one time 6 digits code!<br><br>';
                // $message .= "Please approve this user<br>";
                // $message .= "Click this link: <br><br>";
                $message .= 'Your code is: ';
                $message .= "<h3><b>$code</b></h3><br>";

                $headers = "From: bookings@corporatebusinessclass.com \r\n";
                $headers .= "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";
                if (mail($email2, $subject, $message, $headers)) {

                    header('location:recovery-code.php?hash=' . $hash);
                } else {
                    return '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Something went wrong!</strong>
              </div>';
                }
            }
        }

        # code...
    }
}
$obj = new loginPage;
$objLog = $obj->loginFunction();
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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300i,400,700&display=swap" rel="stylesheet">
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
    <link rel="stylesheet" href="assets/css/parsley.css">
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

    <header class="rt-site-header  rt-fixed-top dark-menu">
        <!-- <div class="top-header d-none d-md-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <ul class="text-center text-md-left top-message">
                    <li>Toll-free: (800) 753 0325</li>
                    <li>Local: (415) 354-9693</li>
                </ul>
            </div>
            <div class="col-md-6">
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
            </div>
        </div>
    </div>
</div>  -->
        <!-- end top header -->

        <?php include('./header.php'); ?>
        <!-- /.bootom-header -->

    </header>










    <!-- 
    =============why choose us area start==========
 -->

    <div class="play-video rtbgprefix-full bg-hide-md video-section-3 h-250"
        style="background-image: url(Images/Artboard–13.png); height: 400px;">
    </div>
    <section class="rt-cta-area mt-280 video-section-3">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center rt-pt-70 rt-pb-60 rt-pl-20 rt-pr-20"
                        style="background-color:#fff; background-position: center; border-radius: 10px;box-shadow: 23px 18px 28px -9px rgba(170,170,170,1);">
                        <h4 class="text-center"><strong>Forget Password</strong></h4>


                        <form method="post" class="rt-form" data-parsley-validate>
                            <div class="row">
                                <div class="col-md-6 offset-md-3">
                                    <?php if (isset($objLog)) {
                                        echo $objLog;
                                    } ?>
                                    <input type="email" name="email" class="form-control pill rt-mb-15"
                                        placeholder="Enter Email Address" required>
                                    <div class="text-center">
                                        <input type="submit" name="submit"
                                            class="rt-btn rt-rounded rt-rounded-1 rt-Bshadow-1 btn-blue2" value="Send">
                                    </div>
                                </div>
                            </div>


                        </form>

                    </div><!-- /.inner-content -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->

    </section>






    <!-- 
    !============= Footer Area Start ===========!
 -->
    <section class="rt-site-footer" data-scrollax-parent="true">
        <!-- <div class="rt-shape-emenetns-1" style="background-image: url(assets/images/shape-elements/shape-4.png)" data-scrollax="properties: { translateY: '340px' }"></div> -->
        <!-- /.rt-shape-emenetns-1 -->
        <div class="footer-top rtbgprefix-cover"
            style="background-image: url(Images/Artboard–27.png);background-position: center top;">
            <div class="footer-subscripbe-box wow fade-in-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10 mx-auto text-center">
                            <div class="rt-section-title-wrapper text-white">
                                <h2 class="rt-section-title f-size-50">


                                    Refer a friend
                                </h2><!-- /.rt-section-title -->

                            </div><!-- /.rt-section-title-wrapper -->
                        </div><!-- /.col-lg-7 -->
                    </div><!-- /.row -->
                    <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                    <form action="" id="myForm4">
                        <div class="row">
                            <div class="col-lg-7 mx-auto">
                                <div class="input-group mb-5">
                                    <div class="w-100">
                                        <input type="email" class="form-control text-white f-size-14" name="email"
                                            id="email" placeholder="Enter your friend's email">
                                    </div>
                                    <!-- <span class="text-danger"> <?php echo $newsletterErr; ?></span> -->
                                    <div class="input-group-append">
                                        <input class="btn" type="submit" name="submit" value="Refer Now" />
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
                        </div>
                    </form>

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

                            <p class="rt-mt-15 f-size-14">Copyright © 2020.All Rights Reserved By <a
                                    href="index.php">Corporate Business Class</a></p>
                        </div><!-- /.copy-text -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 text-center text-lg-right">
                        <div class="rt-footer-social wow fade-in-bottom" data-wow-duration="1.5s">
                            <div>
                                <ul class="text-white text-md-left top-message f-size-12"
                                    style="display:block; float:right">
                                    <li>Toll-free: (800) 753 0325</li>
                                    <li>Local: (415) 354-9693</li>
                                </ul>
                            </div>
                            <ul>
                                <li><a href="#" class="text-white f-size-12">The Corporate division of <img
                                            src="Images/lfclogo.png" class="rt-ml-15" alt="cardimage"
                                            draggable="false"></a></li>


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
    <script src="assets/js/parsley.min.js"></script>

    <!-- ==================End Js Link===================== -->

    <script>
    $(document).ready(function() {
        $('#newsletterEmail').click(function() {
            var email = $('#newsletter1').val();
            var expr =
                /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            if (email != null && email != "") {
                if (expr.test(email) == true) {
                    $.ajax({
                        url: "mail.php",
                        method: "POST",
                        data: {
                            email: email
                        },
                        success: function(response) {
                            $('#newsletter1').val("");
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
                } else {
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
            } else {
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
    </script>

    <!-- <script>
    $(document).ready(function() {
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
    </script> -->
    <script>
    $(document).ready(function() {
        $('#myForm').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "ajax-profile.php",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response == 1) {
                        toastr.success('Successfully Updated!<br/>', '', {
                            showMethod: "fadeIn",
                            positionClass: 'toast-top-right',
                            timeOut: 5000,
                            allowHtml: true,
                            iconClass: 'toast-success-new',
                            autoDismiss: true,
                            tapToDismiss: true,
                        });
                    }

                    if (response == 2) {
                        toastr.success('Error!<br/>', '', {
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
            });

        });
        $('#myForm4').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "ajax-refer.php",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response == 1) {
                        toastr.success('Thank you for referring a friend!<br/>', '', {
                            showMethod: "fadeIn",
                            positionClass: 'toast-top-right',
                            timeOut: 5000,
                            allowHtml: true,
                            iconClass: 'toast-success-new',
                            autoDismiss: true,
                            tapToDismiss: true,
                        });
                    }

                    if (response == 2) {
                        toastr.success('Error!<br/>', '', {
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
            });

        });


        $('#myForm9').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "ajax-forget.php",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    if (response == 1) {
                        toastr.success('Recovery Code is sent!<br/>', '', {
                            showMethod: "fadeIn",
                            positionClass: 'toast-top-right',
                            timeOut: 5000,
                            allowHtml: true,
                            iconClass: 'toast-success-new',
                            autoDismiss: true,
                            tapToDismiss: true,
                        });
                    }

                    if (response == 3) {
                        toastr.success('Please Sign Up!<br/>', '', {
                            showMethod: "fadeIn",
                            positionClass: 'toast-top-right',
                            timeOut: 5000,
                            allowHtml: true,
                            iconClass: 'toast-error-new',
                            autoDismiss: true,
                            tapToDismiss: true,
                        });
                    }
                    if (response == 2) {
                        toastr.success('Something went wrong!<br/>', '', {
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
            });

        });

    })
    </script>
    <script>
    $(document).ready(function() {
        $('#myForm2').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "ajax-preference.php",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response == 1) {
                        toastr.success('Successfully Updated!<br/>', '', {
                            showMethod: "fadeIn",
                            positionClass: 'toast-top-right',
                            timeOut: 5000,
                            allowHtml: true,
                            iconClass: 'toast-success-new',
                            autoDismiss: true,
                            tapToDismiss: true,
                        });
                    }

                    if (response == 2) {
                        toastr.success('Error!<br/>', '', {
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
            });

        });

    })
    </script>

</body>

</html>