<?php
session_start();
if (isset($_SESSION['username'])) {
} else {
    header('location:login.php');
}
include('class/database.php');
class signInUp extends database
{
    protected $link;
    public function signUpFunction()
    {

        $username = $_SESSION['username'];
        $sql = "SELECT * from user_tbl where (username = '$username' or email = '$username') AND flag = 'Yes' ";
        $res = mysqli_query($this->link, $sql);
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return false;
        }
    }
}
$obj = new signInUp;
$objProfile = $obj->signUpFunction();
$row = mysqli_fetch_assoc($objProfile);
// echo date('Y-m-d h:i:s a', time());
// $str_first_cap = "hang on, this is first letter capital example!";

// echo ucwords($str_first_cap);
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
    <link rel="stylesheet" href="assets/css/datepicker.css">
    <!-- ==================End Css Link===================== -->

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <style>
    .search-form {
        position: relative;
    }

    .panel-inner {
        position: absolute;
        z-index: 1;
        padding: 0px;
        left: 0;
        right: 0;

    }

    .list-group {
        background-color: #fff;
        height: 300px;

        overflow-y: scroll;
    }
    </style>


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


    <!-- Modal -->
    <div class="modal fade" id="rtmodal-1" tabindex="-1" role="dialog" aria-labelledby="rtmodal-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered rt-lgoinmodal " role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="rt-modal-headr rt-mb-20 one">
                        <img src="Images/logo-black.png" alt="modal logo" width="200" draggable="false">
                        <h4>Log in to Corporate Business Class</h4>
                        <p>Log in to get exclusive access to best flight deals available!</p>
                    </div><!-- /.rt-modal-headr -->
                    <div class="rt-modal-headr rt-mb-20 two">
                        <img src="Images/logo-black.png" alt="modal logo" width="200" draggable="false">
                        <h4>Create your Account</h4>
                        <p>Get exclusive access to best flight deals available!</p>
                    </div><!-- /.rt-modal-headr -->
                    <div class="rt-modal-input one">
                        <form id="myForm2" class="rt-form" data-parsley-validate>
                            <input type="text" name="username" class="form-control pill rt-mb-15"
                                placeholder="User name"
                                value="<?php if (isset($_COOKIE['cookie_username'])) {
                                                                                                                                        echo $_COOKIE['cookie_username'];
                                                                                                                                    } ?>"
                                required>
                            <input type="password" value="<?php if (isset($_COOKIE['cookie_password'])) {
                                                                echo $_COOKIE['cookie_password'];
                                                            } ?>" name="password" class="form-control pill rt-mb-15"
                                placeholder="Password" required>
                            <div class="form-group forgot-pass">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                        <?php if (isset($_COOKIE['cookie_username'])) { ?> checked <?php } ?>
                                        id="remember" name="remember">
                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div><!-- ./form-group -->
                            </div>
                            <input type="submit" name="submit"
                                class="rt-btn rt-gradient pill d-block text-uppercase toastr-error-auth" value="Log In">
                        </form>
                        <div class="ac-register rt-mb-40">
                            <span>Don’t have an account? <a href="#" class="open-creatac">Sign Up Now <i
                                        class="icofont-double-right"></i></a></span>
                        </div><!-- /.ac-register -->
                    </div><!-- /.rt-modal-input -->
                    <div class="rt-modal-input two">
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
                                placeholder="Password" data-parsley-minlength="6" required>
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
                        <div class="ac-register rt-mb-40">
                            <span>Already have an account?<a href="#" class="open-loginac">LOGIN <i
                                        class="icofont-double-right"></i></a></span>

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



    <style>
    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #fff;
    }

    /* Style the buttons that are used to open the tab content */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
    </style>

    <!-- 
    !============= Banner Area Start ===========!
 -->


    <section class="rt-banner-area">
        <div class="single-rt-banner rt-banner-height" style="background-image: url(Images/Artboard–32.jpg)">
            <div class="container">


                <div class="row rt-banner-height align-items-center">
                    <div class="col-md-12">
                        <div class="text-center rt-pt-70 rt-pb-60 rt-pl-20 rt-pr-20"
                            style="background-color:rgba(250, 250, 250, .50); background-position: center; border-radius: 10px;box-shadow: 23px 18px 28px -9px rgba(170,170,170,1);">
                            <h4 class="text-center"><strong>Fill out the form below to receive a custom quote at the
                                    best possible prices!</strong></h4>
                            <br>
                            <div class="tab">
                                <button class="tablinks" onclick="openCity(event, 'Round')" id="defaultOpen">Round
                                    Trip</button>
                                <button class="tablinks" onclick="openCity(event, 'OneWay')">One Way</button>
                                <button class="tablinks" onclick="openCity(event, 'MultiCity')">Multi City</button>
                            </div>

                            <!-- Tab content -->
                            <div id="Round" class="tabcontent">
                                <h3></h3>
                                <p>
                                <form id="myForm5" class="rt-form" data-parsley-validate>
                                    <input type="hidden" name="id" value="<?php echo $row['user_id']; ?>">
                                    <div class="row rt-mt-15">
                                        <div class="col-md-3">
                                            <div class="search-form">
                                                <input type="text" name="from_city[]" id="airport1"
                                                    class="form-control rt-mb-15" placeholder="From City" required>
                                                <div id="output1" class="panel-inner"></div>
                                            </div>




                                        </div>
                                        <div class="col-md-3">


                                            <div class="search-form">
                                                <input type="text" name="to_city[]" id="airport2"
                                                    class="form-control  rt-mb-15" placeholder="To City" required>
                                                <div id="output2" class="panel-inner"></div>
                                            </div>





                                        </div>
                                        <div class="col-md-3">

                                            <input type="text" name="dep_date[]" class="form-control  rt-mb-15"
                                                placeholder="Departure Date" id="datepicker" required>



                                        </div>
                                        <div class="col-md-3">

                                            <input type="text" name="re_date[]" class="form-control  rt-mb-15"
                                                placeholder="Return Date" id="datepicker2" required>

                                            <!-- <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Text Me</label>
                                    </div> -->

                                        </div>

                                    </div>
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <input type="text" name="name" class="form-control rt-mb-15"
                                                placeholder="Name" required>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="email" name="email" class="form-control  rt-mb-15"
                                                placeholder="Email" required>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="phone" class="form-control  rt-mb-15"
                                                placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <textarea name="comment" id="" class="form-control rt-mb-15" cols="30"
                                                rows="5" placeholder="Comments"></textarea>

                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" min="1" max="100" name="adult"
                                                class="form-control  rt-mb-15" placeholder="Adults (12+)" required>

                                            <label for="" class="font-weight-bold">Flight Class</label> <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="f_type" id="Business"
                                                    value="Business" checked>
                                                <label class="form-check-label" for="Business">Business</label>

                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="f_type" id="First"
                                                    value="First">
                                                <label class="form-check-label" for="First">First</label>

                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="f_type" id="Economy"
                                                    value="Economy">
                                                <label class="form-check-label" for="Economy">Economy</label>

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" min="0" max="100" name="children"
                                                class="form-control  rt-mb-15" placeholder="Children (2-11)">

                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <input type="submit"
                                            class="rt-btn rt-rounded rt-rounded-1 rt-Bshadow-1 btn-blue2" value="Send">
                                    </div>

                                </form>
                                </p>
                            </div>

                            <div id="OneWay" class="tabcontent">
                                <h3></h3>
                                <p>
                                <form id="myForm6" class="rt-form" data-parsley-validate>
                                    <input type="hidden" name="id" value="<?php echo $row['user_id']; ?>">
                                    <div class="row rt-mt-15">
                                        <div class="col-md-3">

                                            <div class="search-form">
                                                <input type="text" name="from_city[]" id="airport3"
                                                    class="form-control rt-mb-15" placeholder="From City" required>
                                                <div id="output3" class="panel-inner"></div>
                                            </div>






                                        </div>
                                        <div class="col-md-3">

                                            <div class="search-form">
                                                <input type="text" name="to_city[]" id="airport4"
                                                    class="form-control  rt-mb-15" placeholder="To City" required>
                                                <div id="output4" class="panel-inner"></div>
                                            </div>





                                        </div>
                                        <div class="col-md-3">

                                            <input type="text" name="dep_date[]" class="form-control  rt-mb-15"
                                                placeholder="Departure Date" id="datepicker3" required>



                                        </div>


                                    </div>
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <input type="text" name="name" class="form-control rt-mb-15"
                                                placeholder="Name" required>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="email" name="email" class="form-control  rt-mb-15"
                                                placeholder="Email" required>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="phone" class="form-control  rt-mb-15"
                                                placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <textarea name="comment" id="" class="form-control rt-mb-15" cols="30"
                                                rows="5" placeholder="Comments"></textarea>

                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" min="1" max="100" name="adult"
                                                class="form-control  rt-mb-15" placeholder="Adults (12+)" required>

                                            <label for="" class="font-weight-bold">Flight Class</label> <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="f_type"
                                                    id="Business2" value="Business" checked>
                                                <label class="form-check-label" for="Business2">Business</label>

                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="f_type" id="First2"
                                                    value="First">
                                                <label class="form-check-label" for="First2">First</label>

                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="f_type" id="Economy2"
                                                    value="Economy">
                                                <label class="form-check-label" for="Economy2">Economy</label>

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" min="0" max="100" name="children"
                                                class="form-control  rt-mb-15" placeholder="Children (2-11)">


                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <input type="submit"
                                            class="rt-btn rt-rounded rt-rounded-1 rt-Bshadow-1 btn-blue2" value="Send">
                                    </div>

                                </form>
                                </p>
                            </div>

                            <div id="MultiCity" class="tabcontent">
                                <h3></h3>
                                <p>
                                <form id="myForm7" class="rt-form" data-parsley-validate>
                                    <input type="hidden" name="id" value="<?php echo $row['user_id']; ?>">
                                    <div class="big-section" id="extra">
                                        <div class="row rt-mt-15">
                                            <div class="col-md-3">

                                                <div class="search-form">
                                                    <input type="text" name="from_city[]" id="airport5"
                                                        class="form-control rt-mb-15" placeholder="From City" required>
                                                    <div id="output5" class="panel-inner"></div>
                                                </div>





                                            </div>
                                            <div class="col-md-3">

                                                <div class="search-form">
                                                    <input type="text" name="to_city[]" id="airport6"
                                                        class="form-control  rt-mb-15" placeholder="To City" required>
                                                    <div id="output6" class="panel-inner"></div>
                                                </div>





                                            </div>
                                            <div class="col-md-3">



                                                <input type="text" name="dep_date[]" class="form-control  rt-mb-15"
                                                    placeholder="Departure Date" id="datepicker4" required>



                                            </div>
                                            <div class="col-md-3">

                                                <input type="text" name="re_date[]" class="form-control  rt-mb-15"
                                                    placeholder="Return Date" id="datepicker5" required>

                                                <!-- <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Text Me</label>
                                    </div> -->

                                            </div>

                                        </div>

                                        <div class="row rt-mt-15">
                                            <div class="col-md-3">

                                                <div class="search-form">
                                                    <input type="text" id="airport7" name="from_city[]"
                                                        class="form-control rt-mb-15" placeholder="From City" required>
                                                    <div id="output7" class="panel-inner"></div>
                                                </div>






                                            </div>
                                            <div class="col-md-3">

                                                <div class="search-form">
                                                    <input type="text" name="to_city[]" id="airport8"
                                                        class="form-control  rt-mb-15" placeholder="To City" required>
                                                    <div id="output8" class="panel-inner"></div>
                                                </div>





                                            </div>
                                            <div class="col-md-3">

                                                <input type="text" name="dep_date[]" class="form-control  rt-mb-15"
                                                    placeholder="Departure Date" id="datepicker6" required>



                                            </div>
                                            <div class="col-md-3">

                                                <input type="text" name="re_date[]" class="form-control  rt-mb-15"
                                                    placeholder="Return Date" id="datepicker7" required>

                                                <!-- <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="yes">
                                        <label class="form-check-label" for="inlineCheckbox1">Text Me</label>
                                    </div> -->

                                            </div>

                                        </div>
                                        <div class="row rt-mt-15">
                                            <div class="col-md-3">

                                                <div class="search-form">
                                                    <input type="text" name="from_city[]" id="airport9"
                                                        class="form-control rt-mb-15" placeholder="From City">
                                                    <div id="output9" class="panel-inner"></div>
                                                </div>

                                            </div>
                                            <div class="col-md-3">

                                                <div class="search-form">
                                                    <input type="text" name="to_city[]" id="airport10"
                                                        class="form-control  rt-mb-15" placeholder="To City">
                                                    <div id="output10" class="panel-inner"></div>
                                                </div>





                                            </div>
                                            <div class="col-md-3">

                                                <input type="text" name="dep_date[]" class="form-control  rt-mb-15"
                                                    placeholder="Departure Date" id="datepicker8">



                                            </div>
                                            <div class="col-md-3">

                                                <input type="text" name="re_date[]" class="form-control  rt-mb-15"
                                                    placeholder="Return Date" id="datepicker9">

                                            </div>

                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-success rt-mb-15" id="Add"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <input type="text" name="name" class="form-control rt-mb-15"
                                                placeholder="Name" required>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="email" name="email" class="form-control  rt-mb-15"
                                                placeholder="Email" required>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="phone" class="form-control  rt-mb-15"
                                                placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <textarea name="comment" id="" class="form-control rt-mb-15" cols="30"
                                                rows="5" placeholder="Comments"></textarea>

                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" min="1" max="100" name="adult"
                                                class="form-control  rt-mb-15" placeholder="Adults (12+)" required>

                                            <label for="" class="font-weight-bold">Flight Class</label> <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="f_type"
                                                    id="Business3" value="Business" checked>
                                                <label class="form-check-label" for="Business3">Business</label>

                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="f_type" id="First3"
                                                    value="First">
                                                <label class="form-check-label" for="First3">First</label>

                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="f_type" id="Economy3"
                                                    value="Economy">
                                                <label class="form-check-label" for="Economy3">Economy</label>

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" min="0" max="100" name="children"
                                                class="form-control  rt-mb-15" placeholder="Children (2-11)">

                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <input type="submit"
                                            class="rt-btn rt-rounded rt-rounded-1 rt-Bshadow-1 btn-blue2" value="Send">
                                    </div>

                                </form>
                                </p>
                            </div>





                        </div><!-- /.inner-content -->
                    </div><!-- /.col-12 -->
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


    <!-- 
    ===========Services Area start==========

    <div class="play-video rtbgprefix-full bg-hide-md video-section-3 h-250"
        style="background-image: url(Images/Artboard–13.png); height: 400px;">
    </div>
     -->

    <section class="emigr-services-area rtbgprefix-contain"
        style="background-image: url(assets/images/backgrounds/dotbg.png)">
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
                        <p>We don’t do contracts or sign-up fees. Once you are registered, you can book all your flight
                            management to CorporateBusinesClass.</p>
                    </div><!-- /.services-box-1 -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 col-md-6 mx-auto text-center">
                    <div class="services-box-1 wow fade-in-bottom how-it-works-section" data-wow-duration="1.5s">
                        <div class="services-thumb">
                            <img src="Images/Artboard–7.png" alt="" draggable="false" width="90">
                        </div><!-- /.services-thumb -->
                        <h4>Travel Management</h4>
                        <p>Our 3 main focus areas are Speed, Quality , and Cost. Depending on what your organization
                            values more, we will adjust accordingly. </p>
                    </div><!-- /.services-box-1 -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 col-md-6 mx-auto text-center">
                    <div class="services-box-1 wow fade-in-bottom how-it-works-section" data-wow-duration="2s">
                        <div class="services-thumb">
                            <img src="Images/Artboard–8.png" alt="" draggable="false" width="90">
                        </div><!-- /.services-thumb -->
                        <h4>Travel Better for less</h4>
                        <p>Our team of experts are the best in the industry and along side with the latest technology,
                            we are able to get you better flights, for less time and money</p>
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

    <div class="play-video rtbgprefix-full bg-hide-md video-section-3 h-250"
        style="background-image: url(Images/Artboard–13.png); height: 525px;">
    </div>
    <section class="rt-cta-area mt-280 video-section-3">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center rt-pt-70 rt-pb-60 rt-pl-70 rt-pr-20"
                        style="background:url(Images/Artboard–22.png) no-repeat; background-position: center; border-radius: 10px;box-shadow: 23px 18px 28px -9px rgba(170,170,170,1);">
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
                                        <p>We search, book, analyze and report everything we book for you</p>
                                    </div>
                                </div>
                                <div class="display-inline">
                                    <div class="w-110">
                                        <img src="Images/Artboard–17.png" />
                                    </div>
                                    <div>
                                        <p><strong>Global Support 24/7</strong></p>
                                        <p>Experts around different time zones are ready to assist you in real-time 24/7
                                        </p>
                                    </div>
                                </div>
                                <div class="display-inline">
                                    <div class="w-110">
                                        <img src="Images/Artboard–19.png" />
                                    </div>
                                    <div>
                                        <p><strong>Miles & Upgrades</strong></p>
                                        <p>We use miles and upgrades to maximise your savings without compromising
                                            comfort</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="display-inline">
                                    <div class="w-110">
                                        <img src="Images/Artboard–16.png" />
                                    </div>
                                    <div>
                                        <p><strong>Maximum Savings</strong></p>
                                        <p>The best way to book is different each time, we use the latest technology to
                                            get you on the best flight and the least amount of cost</p>
                                    </div>
                                </div>
                                <div class="display-inline">
                                    <div class="w-110">
                                        <img src="Images/Artboard–18.png" />
                                    </div>
                                    <div>
                                        <p><strong>Easy Amendments</strong></p>
                                        <p>We are an email or call away to help you with any changes or amendments you
                                            might need.</p>
                                    </div>
                                </div>
                                <div class="display-inline">
                                    <div class="w-110">
                                        <img src="Images/Artboard–20.png" />
                                    </div>
                                    <div>
                                        <p><strong>Calls, Emails, Text</strong></p>
                                        <p>We are on the cloud and can help you in whichever communication method you
                                            prefer.</p>
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




    <!-- 
    ============= Testimonilas area start==========
 -->


    <div class="rtbgprefix-full bg-hide-md video-section-4"
        style="background-image: url(Images/Artboard–14.png); height: 700px;background-size: auto;background-repeat-x: repeat;">
    </div>
    <section id="about" class="rt-cta-area mt-200 video-section-3 manifesto-section pos-rel">

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="rt-pt-70 rt-pb-60 rt-pl-80 rt-pr-80 rt-ml-60 rt-mr-60 text-white"
                        style="background-image: url(Images/blugbg.png); border-radius: 10px;box-shadow: 0 5px 10px 0 rgba(55, 94, 246, .2); border: 3px solid #fff;">
                        <div class="text-center text-white rt-mb-40">
                            <h3><strong>Our Story</strong></h3>
                        </div>
                        <div>
                            <p>Corporate Business Class was founded with a rebellious streak and a noble mission: to
                                improve your travel experience and lifestyle while saving you lots of money.</p>

                            <p>Every idea is born with an aha moment. Ours happened in 2009. Our founder Mo Sayid, then
                                a young and promising vacation travel agent in conversation with a well-to-do friend,
                                was astounded to learn that the man paid $11,000 for a business class ticket. No matter
                                what airline he contacted, they wouldn’t give him a better deal. He simply felt there
                                was something unjust about it. Out of curiosity, he decided to put his special style of
                                investigative thinking and research skills to work.</p>

                            <p>His discovery? The airline industry makes a disproportionate part of their profits from
                                the premium traveler. Why? Because they can. However, he found that behind these giant
                                companies sit actual human beings who make decisions every day. With persistence and
                                creativity, he forged relationships, gaining a deep knowledge of the inner-workings of
                                these companies, learning the system in all its complexities, and yes, sometimes
                                outsmarting the system, resulting in travel for much less than the published rates.
                                After hundreds of hours and thousands of conversations with agents, managers, and
                                specialists, from front desk clerks to behind-the-scenes executives, he formulated many
                                proven methods to help others fly across the globe, at will, for low rates and desired
                                dates.</p>


                            <p>He gathered a team of people who shared his passion and they all got to work. To this day
                                we make it a habit to circumvent the traditional channels and aggressively fight for our
                                clients and help them improve their travel experiences while saving them thousands of
                                dollars. With teamwork and passion, we turned this into a successful multimillion-dollar
                                company.</p>

                            <p>It’s pretty simple. We are not just another travel agency. We don’t do travel the
                                conventional way, we do it our way!</p>

                            <div class="text-center rt-mt-30">
                                <a href="welcome.php" class="rt-btn rt-rounded rt-rounded-1 rt-Bshadow-1 btn-blue1">Get
                                    Started</a>
                            </div>
                        </div>
                    </div><!-- /.inner-content -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="manifesto-bt-img">
            <img src="Images/Artboard–26.png" />
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
    <!-- <section class="brands-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto text-center">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>Take a Look at Our</span>
                        Trusted Partners
                    </h2>
                    <p>
                        We are committed to being the best partner.Emigrar believes in being your trusted partner and
                        earning that trust through
                        confidence and performance in service and support.
                    </p>
                </div>
            </div>
        </div>
        <div class="section-title-spacer"></div>
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <ul class="rt-border-brands">
                    <li class="single-border-brands">
                        <a href="#" class="wow flipInX d-block">
                            <img src="assets/images/brands/brands-1.png" alt="brands image" draggable="false">
                        </a>
                    </li>
                    <li class="single-border-brands">
                        <a href="#" class="wow flipInX d-block" data-wow-duration="1s">
                            <img src="assets/images/brands/brands-2.png" alt="brands image" draggable="false">
                        </a>
                    </li>
                    <li class="single-border-brands">
                        <a href="#" class="wow flipInX d-block" data-wow-duration="1.5s">
                            <img src="assets/images/brands/brands-3.png" alt="brands image" draggable="false">
                        </a>
                    </li>
                    <li class="single-border-brands">
                        <a href="#" class="wow flipInX d-block" data-wow-duration="2s"> 
                            <img src="assets/images/brands/brands-4.png" alt="brands image" draggable="false">
                        </a>
                    </li>
                    <li class="single-border-brands">
                        <a href="#" class="wow flipInX d-block" data-wow-duration="2.5s">
                            <img src="assets/images/brands/brands-4.png" alt="brands image" draggable="false">
                        </a>
                    </li>
                    <li class="single-border-brands">
                        <a href="#" class="wow flipInX d-block" data-wow-duration="3s">
                            <img src="assets/images/brands/brands-3.png" alt="brands image" draggable="false">
                        </a>
                    </li>
                    <li class="single-border-brands">
                        <a href="#" class="wow flipInX d-block" data-wow-duration="3.5s">
                            <img src="assets/images/brands/brands-2.png" alt="brands image" draggable="false">
                        </a>
                    </li>
                    <li class="single-border-brands">
                        <a href="#" class="wow flipInX d-block" data-wow-duration="4s">
                            <img src="assets/images/brands/brands-1.png" alt="brands image" draggable="false">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section> -->
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
                                    <span class="text-blue2">Newsletter</span>

                                    Get The Latest news
                                </h2><!-- /.rt-section-title -->
                                <p class="f-size-14 rt-pl-50 rt-pr-50">
                                    Once in while we have major inventory drops, be in the know if that happens. You can
                                    unsubscribe anytime. Your privacy & personal information will be respected.
                                </p>
                            </div><!-- /.rt-section-title-wrapper -->
                        </div><!-- /.col-lg-7 -->
                    </div><!-- /.row -->
                    <!-- Begin Mailchimp Signup Form -->


                    <!--End mc_embed_signup-->
                    <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                    <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class=""> -->
                    <div class="row">
                        <div class="col-lg-7 mx-auto">
                            <div class="input-group mb-5">
                                <div class="w-100">
                                    <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet"
                                        type="text/css">
                                    <style type="text/css">
                                    #mc_embed_signup {
                                        clear: left;
                                        font: 14px Helvetica, Arial, sans-serif;
                                    }

                                    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                                    </style>
                                    <div id="mc_embed_signup">
                                        <form
                                            action="https://letsflycheaper.us20.list-manage.com/subscribe/post?u=8cd04ab01601b2c38b72a6223&amp;id=3d946a47fd"
                                            method="post" id="mc-embedded-subscribe-form"
                                            name="mc-embedded-subscribe-form" class="validate" target="_blank"
                                            novalidate>
                                            <div id="mc_embed_signup_scroll">
                                                <center></center><input type="email" value="" name="EMAIL" class="email"
                                                    id="mce-EMAIL" placeholder="Enter Your Email Address" required
                                                    style="background-color:transparent; padding:12px; border-radius:50px; color:#fff;">
                                                </center>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                    <input type="text" name="b_8cd04ab01601b2c38b72a6223_3d946a47fd"
                                                        tabindex="-1" value="">
                                                </div>
                                                <input type="submit" value="Subscribe Now" name="subscribe"
                                                    id="mc-embedded-subscribe" class="btn"
                                                    style="float:left !important;">
                                            </div>
                                        </form>
                                    </div>

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
                            <p class="text-white f-size-12 rt-mb-0"> Toll-free: (800) 753 0325 | Local: (415) 354-9693
                            </p>

                            <p class="rt-mt-15 f-size-14">Copyright © 2020.All Rights Reserved By <a
                                    href="index.php">Corporate Business Class</a></p>
                        </div><!-- /.copy-text -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 text-center text-lg-right">
                        <div class="rt-footer-social wow fade-in-bottom" data-wow-duration="1.5s">
                            <div>
                                <ul class="text-white text-md-left top-message f-size-12"
                                    style="display:block; float:right">
                                    <li><a href="policy.php" style="color:#fff;">Privacy Policy</a></li>
                                    <li><a style="color:#fff;">|</a></li>
                                    <li><a href="terms.php" style="color:#fff;">Terms of Service</a></li>
                                </ul>
                            </div>
                            <ul>
                                <li><a href="http://letsflycheaper.com" target="_blank" class="text-white f-size-12">The
                                        Corporate division of <img src="Images/lfclogo.png" class="rt-ml-15"
                                            alt="cardimage" draggable="false"></a></li>


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
    <script src="assets/js/datepicker.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/new.js"></script>
    <script>
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
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
                        toastr.success('User is taken<br/>', '', {
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
                        window.location.href = '/submitted.php'
                    }
                    if (response == 2) {
                        window.location.href = '/submitted.php'
                    }

                }
            });
            $('#rtmodal-1').modal('hide');
            this.reset();

        });
        $('#myForm2').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "ajax-login.php",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response == 1) {
                        toastr.success('Wrong Password<br/>', '', {
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
                        window.location.href = '/submitted.php'
                    }
                    if (response == 3) {
                        toastr.success('Please Sign Up<br/>', '', {
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
                        window.location.href = '/submitted.php'
                    }



                }
            });
            $('#rtmodal-1').modal('hide');
            this.reset();

        });
        $('#myForm5').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "ajax-flight.php",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    if (response == 1) {
                        window.location.href = '/submitted.php'
                    }
                    if (response == 2) {
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




                }
            });
            this.reset();

        });
        $('#myForm6').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "ajax-flight.php",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    if (response == 1) {
                        window.location.href = '/submitted.php'
                    }
                    if (response == 2) {
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




                }
            });
            this.reset();

        });
        $('#myForm7').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "ajax-flight.php",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    if (response == 1) {
                        window.location.href = '/submitted.php'
                    }
                    if (response == 2) {
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




                }
            });
            this.reset();

        });
    })
    </script>
    <script>
    var dateToday = new Date();
    // $('[data-toggle="datepicker5"]').datepicker({
    //     autoClose: true,
    //     autoHide: true,
    //     viewStart: 2,
    //     minDate: 0,
    //     format: 'mm/dd/yyyy',

    // });
    $(function() {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'mm/dd/yy',
            duration: 'fast',
            minDate: 0
        });
    });
    $(function() {
        $("#datepicker2").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'mm/dd/yy',
            duration: 'fast',
            minDate: 0
        });
    });
    $(function() {
        $("#datepicker3").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'mm/dd/yy',
            duration: 'fast',
            minDate: 0
        });
    });
    $(function() {
        $("#datepicker4").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'mm/dd/yy',
            duration: 'fast',
            minDate: 0
        });
    });
    $(function() {
        $("#datepicker5").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'mm/dd/yy',
            duration: 'fast',
            minDate: 0
        });
    });
    $(function() {
        $("#datepicker6").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'mm/dd/yy',
            duration: 'fast',
            minDate: 0
        });
    });
    $(function() {
        $("#datepicker7").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'mm/dd/yy',
            duration: 'fast',
            minDate: 0
        });
    });
    $(function() {
        $("#datepicker8").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'mm/dd/yy',
            duration: 'fast',
            minDate: 0
        });
    });
    $(function() {
        $("#datepicker9").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'mm/dd/yy',
            duration: 'fast',
            minDate: 0
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        var i = 1;
        $('#Add').click(function() {
            i = i + 2;
            $('#extra').append(
                '<div class="row rt-mt-15" id="row' + i +
                '"><div class="col-md-3"><div class="search-form"><input type="text" name="from_city[]" id="airport' +
                (9 + i) +
                '" class="form-control rt-mb-15" placeholder="From City"><div id="output' +
                (9 + i) +
                '" class="panel-inner"></div></div></div><div class="col-md-3"><div class="search-form"><input type="text" name="to_city[]" id="airport' +
                (10 + i) +
                '" class="form-control  rt-mb-15" placeholder="To City"><div id="output' +
                (10 + i) +
                '" class="panel-inner"></div></div></div><div class="col-md-3"><input type="text" name="dep_date[]" class="form-control  rt-mb-15" placeholder="Departure Date" id="datepicker' +
                (10 + i) +
                '"></div><div class="col-md-3"><input type="text" name="re_date[]" class="form-control  rt-mb-15" placeholder="Return Date" id="datepicker' +
                (11 + i) +
                '"></div><button type="button" class="btn btn-danger remove" data-remove="' +
                i +
                '">Remove Section</button></div>'
            );
            $(function() {
                $("#datepicker" + (10 + i)).datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: 'mm/dd/yy',
                    duration: 'fast',
                    minDate: 0
                });
            });
            $(function() {
                $("#datepicker" + (11 + i)).datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: 'mm/dd/yy',
                    duration: 'fast',
                    minDate: 0
                });
            });
            $('#airport' + (9 + i)).keyup(function() {
                let airport = $(this).val();
                let airportLen = $(this).val().length;
                if (airport != '' && airportLen >= 3) {
                    $.ajax({
                        type: 'POST',
                        url: 'ajax-airport.php',
                        data: {
                            airport: airport,
                        },
                        dataType: 'text',
                        success: function(data) {
                            $('#output' + (9 + i)).fadeIn();
                            $('#output' + (9 + i)).html(data);
                        },
                    });
                } else {
                    $('#output' + (9 + i)).fadeOut();
                    $('#output' + (9 + i)).html('');
                }
            });
            $('#output' + (9 + i))
                .parent()
                .on('click', 'li', function() {
                    $('#airport' + (9 + i)).val($(this).text());
                    $('#output' + (9 + i)).fadeOut();
                });
            $('#airport' + (10 + i)).keyup(function() {
                let airport = $(this).val();
                let airportLen = $(this).val().length;
                if (airport != '' && airportLen >= 3) {
                    $.ajax({
                        type: 'POST',
                        url: 'ajax-airport.php',
                        data: {
                            airport: airport,
                        },
                        dataType: 'text',
                        success: function(data) {
                            $('#output' + (10 + i)).fadeIn();
                            $('#output' + (10 + i)).html(data);
                        },
                    });
                } else {
                    $('#output' + (10 + i)).fadeOut();
                    $('#output' + (10 + i)).html('');
                }
            });
            $('#output' + (10 + i))
                .parent()
                .on('click', 'li', function() {
                    $('#airport' + (10 + i)).val($(this).text());
                    $('#output' + (10 + i)).fadeOut();
                });
        });
        $(document).on('click', '.remove', function() {
            var button_id = $(this).attr("data-remove");
            console.log(button_id);
            $('#row' + button_id + '').remove();
        });

    });
    </script>

    <script src="assets/js/new2.js"></script>
</body>

</html>