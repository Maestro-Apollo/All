<?php
// session_start();
// if (isset($_SESSION['username'])) {
// } else {
//     header('location:index.php');
// }
// include('class/database.php');
// class signInUp extends database
// {
//     protected $link;
//     public function signUpFunction()
//     {

//         $username = $_SESSION['username'];
//         $sql = "SELECT * from user_tbl where username = '$username' AND flag = 'Yes' ";
//         $res = mysqli_query($this->link, $sql);
//         if (mysqli_num_rows($res) > 0) {
//             return $res;
//         } else {
//             return false;
//         }
//     }
// }
// $obj = new signInUp;
// $objProfile = $obj->signUpFunction();
// $row = mysqli_fetch_assoc($objProfile);
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

    <div class="play-video rtbgprefix-full bg-hide-md video-section-3 h-350"
        style="background-image: url(Images/Artboard???13.png); height: 400px;">
    </div>
    <section class="rt-cta-area mt-280 video-section-3">

        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="text-center rt-pt-70 rt-pb-60 rt-pl-20 rt-pr-20"
                        style="background-color: #fff; background-position: center; border-radius: 10px;box-shadow: 23px 18px 28px -9px rgba(170,170,170,1);">

                        <div class="row ">
                            <div class="col-md-12 text-center rt-mb-30 rt-pb-25">
                                <img src="Images/logo-black.png" alt="modal logo" width="200" draggable="false">
                                <h4>Create your Account</h4>
                                <p>Log in to get in the moment updates on the things
                                    that interest you.</p>
                            </div>
                        </div>
                        <form id="myForm" class="rt-form" data-parsley-validate>
                            <input type="text" name="username" class="form-control pill rt-mb-15"
                                placeholder="User name" required>
                            <input type="text" name="fname" class="form-control pill rt-mb-15" placeholder="First name"
                                required>
                            <input type="text" name="lname" class="form-control pill rt-mb-15" placeholder="Last name"
                                required>
                            <input type="text" name="phone" class="form-control pill rt-mb-15"
                                placeholder="Phone Number" required>
                            <input type="email" name="email" class="form-control pill rt-mb-15"
                                placeholder="Enter your mail address" required>
                            <input type="password" name="password" class="form-control pill rt-mb-15"
                                placeholder="Password" id="password" data-parsley-minlength="6" required>
                            <input type="password" data-parsley-equalto="#password" class="form-control pill rt-mb-15"
                                placeholder="Confirm Password" required>
                            <input type="text" name="refer" class="form-control pill rt-mb-15" placeholder="REFERRED BY"
                                required>

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
                            <input type="submit" name="submit"
                                class="rt-btn rt-gradient pill d-block text-uppercase toastr-error-auth"
                                value="Register">
                        </form>
                        <div class="ac-register rt-mt-40">
                            <span>Already have an account? <a href="./login.php" style="color: blue;"
                                    class="open-loginac">LOGIN <i class="icofont-double-right"></i></a></span>

                        </div>
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
        <!-- /.footer-top -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-left">
                        <div class="copy-text wow fade-in-bottom" data-wow-duration="1s">
                            <p class="text-white f-size-12 rt-mb-0">Seller of Travel # 2107058 </p>

                            <p class="rt-mt-15 f-size-14">Copyright ?? 2020.All Rights Reserved By <a
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
                url: "ajax-register.php",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response == 1) {
                        toastr.success('Username or Email is taken<br/>', '', {
                            showMethod: "fadeIn",
                            positionClass: 'toast-top-right',
                            timeOut: 5000,
                            allowHtml: true,
                            iconClass: 'toast-error-new',
                            autoDismiss: true,
                            tapToDismiss: true,
                        });
                    }
                    if (response == 3) {
                        toastr.success('Error<br/>', '', {
                            showMethod: "fadeIn",
                            positionClass: 'toast-top-right',
                            timeOut: 5000,
                            allowHtml: true,
                            iconClass: 'toast-error-new',
                            autoDismiss: true,
                            tapToDismiss: true,
                        });
                    }
                    if (response == 4) {
                        toastr.success('Please wait for admin approval<br/>', '', {
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
                        toastr.success(
                            'Congratulations! Please wait for admin approval<br/>',
                            '', {
                                showMethod: "fadeIn",
                                positionClass: 'toast-top-right',
                                timeOut: 5000,
                                allowHtml: true,
                                iconClass: 'toast-success-new',
                                autoDismiss: true,
                                tapToDismiss: true,
                            });
                    }

                }
            });
            // $('#rtmodal-1').modal('hide');
            // this.reset();

        });

    })
    </script>

</body>

</html>