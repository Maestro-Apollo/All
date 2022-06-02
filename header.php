<div class="main-header rt-sticky">
    <nav class="navbar">
        <div class="container">
            <a href="index.php" class="brand-logo"><img src="Images/logo-black.png" alt="" width="180"></a>
            <a href="index.php" class="sticky-logo"><img src="Images/logo-black.png" alt="" width="180"></a>

            <div class="ml-auto d-flex align-items-center">


                <div class="main-menu">
                    <ul>
                        <li class="current-menu-item"><a href="index.php" class="btn-hover-home">Home</a></li>
                        <li class="current-menu-item"><a href="policy.php" class="btn-hover-home">Policy</a>
                        </li>

                        <?php if (isset($_SESSION['username'])) { ?>
                        <!-- <li class="current-menu-item"><a href="preference.php" class="btn-hover-home">Preference</a>
                        </li> -->
                        <li class="current-menu-item"><a href="profile.php" class="btn-hover-home">Profile</a>
                        </li>

                        <li class="current-menu-item d-none-desktop"><a href="./logout.php">Logout</a></li>
                        <?php } else { ?>

                        <!-- <li class="current-menu-item d-none-desktop"><a href="#" data-target="#rtmodal-1"
                                data-toggle="modal">Login</a></li> -->
                        <?php } ?>
                        <!-- <li><a href="#" data-target="#rtmodal-1" data-toggle="modal"><i class="far fa-user-circle"></i>Sign in | Join</a></li> -->
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
                    <?php if (isset($_SESSION['username'])) { ?>
                    <span class="d-md-inline d-none"><a href="./logout.php"
                            class="rt-btn btn-white1 btn-agent1 rt-rounded text-uppercase rt-Bshadow-1 rt-pt-10 rt-pb-10 rt-pl-35 rt-pr-35">Logout</a></span>
                    <?php } else { ?>
                    <!-- <span class="d-md-inline d-none"><a href="#" data-target="#rtmodal-1" data-toggle="modal"
                            class="rt-btn btn-white1 btn-agent1 rt-rounded text-uppercase rt-Bshadow-1 rt-pt-10 rt-pb-10 rt-pl-35 rt-pr-35">Login</a></span> -->
                    <?php } ?>
                </div>

            </div>
        </div>
    </nav>
</div>