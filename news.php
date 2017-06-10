<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>News</title>

    <!-- owl carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css"/>


    <!-- font icofont -->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:300,400,400i,700,900" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- animte css -->
    <link rel="stylesheet" href="css/animate.css"/>

    <!-- camera css goes here -->
    <link rel="stylesheet" href="css/camera.css">

    <!-- venobox css goes here -->
    <link rel="stylesheet" href="css/venobox.css">

    <!-- style css -->
    <link rel="stylesheet" href="style.css"/>

    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
         <link rel="stylesheet" href="css/mystyle.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
</head>
<body class="news_page">

    <!-- preloader -->
    <div class="preloader-bg">
        <div class="preloader-container">
            <div class="my-preloader"><img src="images/favicon.png" alt="preloader"></div>
        </div>
    </div>


    <!--================================
        START HEADER AREA
    =================================-->

    <!-- start header -->
   
<header>
    

            <!-- row start -->
            <div class="row">
                <div class="header_middle_wrapper clearfix ">
                    <div class="col-md-3 xs_fullwidth col-xs-3">
                        <div class="logo_container">
                            <a href="index.php"><img src="images/logo.png" alt="logo Here"></a>
                        </div>
                       
                    </div>
                     <div class=" fast text-center">
                            <span>FAST</span>
                            <span style="color:#424242;">AND</span>

                            <span> SAFE</span>
                        </div>
                    </div>

                
                
            </div><!-- /.row end -->


        </div><!-- /.container end -->
    </header><!-- start header -->
    <!--================================
        END HEADER AREA
    =================================-->

    <!--================================
        START SLIDER AREA
    =================================-->
    <section class="slider_area">

        <!-- slider starts  -->
        <div class="sliders">

            <!-- hero slides -->
            <div class="hero_sliders">

                <!-- single hero_slide -->
                <div class="hero_slide" data-src="images/slider_1.jpg">
                    <div class="captions_wrapper right">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-4">
                                    <div class="single_slider_wrapper">
                                        <span class="small_title fadeInRightShort animated">FAST DELIVERY</span><br>
                                        <h1 class="big_title fadeInRightShort animated">trust is world wide transport service</h1>
                                        <div class="hero_btn">
                                            <a href="index.php#" class="trust_btn">see more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- single hero_slide -->

                <!-- single hero_slide -->
                <div class="hero_slide" data-src="images/slider_2.jpg">
                    <div class="captions_wrapper left">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="single_slider_wrapper">
                                        <span class="small_title fadeInLeftShort animated">FAST DELIVERY</span><br>
                                        <h1 class="big_title fadeInLeftShort animated">trust is world wide transport service</h1>
                                        <div class="hero_btn">
                                            <a href="index.php#" class="trust_btn">see more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- single hero_slide -->

            </div><!-- ./hero slides  -->
        </div><!-- /.sliders ends -->

        <!-- menu starts -->
        <div class="menu_area">

            <!-- container starts -->
            <div class="container">
                <!-- row start -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="mainmenu nav_shadow">
                            <nav class="navbar navbar-default">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav magic_menu">
                                        <li class="has_dropdown active">
                                            <a href="index.php">home<span class="fa fa-angle-down"></span></a>
                                       
                                        </li>
                                        <li class="has_dropdown">
                                            <a href="about_us.php">About us<span class="fa fa-angle-down"></span></a>
                                          
                                        </li>
                                        <li class="has_dropdown">
                                            <a href="services.php">services<span class="fa fa-angle-down"></span></a>
                                         
                                        </li>

                                   <!--      <li><a href="track_trace.html">Track & Trace</a></li> -->
                                      
                                     
                                        <li class="has_dropdown">
                                            <a href="news.php">News<span class="fa fa-angle-down"></span></a>
                                            <div class="dropdwon">
                                                <ul>
                                                
                                                    <li><a href="news_list.html">news list</a></li>
                                                    <li><a href="news.php">news grid</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    <?php if(isset($_SESSION["username"])&&isset($_SESSION["password"])):?>    
                                        <li><a href="home.php">Profile</a></li>
                                          <li>
                                            <a href="logout.php">Logout<span class="fa fa-angle-down"></span></a>
                                         
                                        </li>
                                    <?php else: ?>
                                        <li><a href="contact.php">Order</a></li>
                                          <li>
                                            <a href="login.php">LogIn<span class="fa fa-angle-down"></span></a>
                                         
                                        </li>
                                    <?php endif;?>    
                                    </ul>


                                    <div class="search_form">
                                        <div class="search_btn" data-toggle="modal" data-target="#search_modal">
                                            <span class="fa fa-search"></span>
                                        </div>

                                        <!-- search Modal -->
                                        <div class="modal fade" id="search_modal" tabindex="-1" role="dialog">
                                          <div class="modal-dialog s_modal" role="document">
                                            <div class="modal-content">
                                              <div class="modal-body">
                                                <div class="search_form_wrapper">
                                                    <form method="post">
                                                        <div class="search_input">
                                                            <input type="text" name="search_field" placeholder="Search Query...">
                                                            <button class="submit_btn" type="submit">
                                                                <span class="fa fa-search"></span>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div><!-- /.navbar-collapse -->
                            </nav>
                        </div><!-- main menu ends -->
                    </div>
                </div><!-- /.row end -->

            </div><!-- /.container ends -->
        </div><!-- menu ends -->
    </section>
    <!--================================
        END SLIDER AREA
    =================================-->


    <!--================================
        START ABOUT US AREA
    =================================-->
    <section class="service_area section_padding reveal animated" data-anim="fadeInUpShort">
        <!-- container start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- section_title starts -->
                    <div class="section_title">
                        <div class="sub_title">
                            <p>News We Have</p>
                        </div>
                        <div class="title"><h2>our News</h2></div>
                    </div><!-- section_title starts -->
                </div>
            </div>

            <!-- row start -->
            <div class="row">
                <!-- col start -->
                <div class="col-md-12">

                    <!-- start service wrapper -->
                    <div class="service_wrapper">

                        <!-- service slider start -->
                        <div class="service_slider">

                            <div class="single_service_wrapper">
                                <div class="service_img">
                                    <img src="images/truck.jpg" alt="service-img">
                                </div>
                                <div class="service_content">
                                    <div class="service_title">
                                        <a href="single_service.html"><h3>ground shipping</h3></a>
                                    </div>
                                    <div class="service_text">
                                        <p>we are classified for delievery service for any destinations.</p>
                                    </div>
                                 
                                </div>
                            </div>

                            <div class="single_service_wrapper">
                                <div class="service_img">
                                    <img src="images/hook.jpg" alt="service-img">
                                </div>
                                <div class="service_content">
                                    <div class="service_title">
                                        <a href="single_service.html"><h3>high equipments</h3></a>
                                    </div>
                                    <div class="service_text">
                                        <p>with an over 250 vehicles ranging in size from one tonne trucks up to semi trailers.</p>
                                    </div>
                                  
                                </div>
                            </div>

                            <div class="single_service_wrapper">
                                <div class="service_img">
                                    <img src="images/highway.jpg" alt="service-img">
                                </div>
                                <div class="service_content">
                                    <div class="service_title">
                                        <a href="single_service.html"><h3>fast delivery</h3></a>
                                    </div>
                                    <div class="service_text">
                                        <p>we provide high customer service of fast delievery to make a quick freight forwarding</p>
                                    </div>
                                   
                                </div>
                            </div>
                        </div><!-- service slider start -->

                        <!-- slider control start -->
                        <div class="slider_controller">
                            <div class="prev"><span class="fa fa-angle-left"></span></div>
                            <div class="next"><span class="fa fa-angle-right"></span></div>
                        </div><!-- slider control end -->

                    </div><!-- start service wrapper -->
                </div><!-- /.col ends -->
            </div><!-- /.row end -->
        </div><!-- /.container start -->
    </section>
    <!--================================
        END ABOUT US AREA
    =================================-->



    <!--================================
        START CALL TO ACTION
    =================================-->
    <section class="call_to_action reveal animated" data-delay="0.2s" data-anim="fadeInUpShort">
        <div class="container">
            <div class="col-md-7 xs_fullwidth col-xs-8 v_middle">
                <div class="call_to_action_title">
                    <h3>Suggestions and Complaints</h3>
                </div>
                <p>make suggestions or complain about services and how we will respond</p>
            </div>
            <div class="col-md-5 xs_fullwidth col-xs-3 v_middle">
                <div class="call_to_action_btn">
                    <a class="trust_btn" href="contact.php">contact us</a>
                </div>
            </div>
        </div>
    </section>
    <!--================================
        END CALL TO ACTION
    =================================-->



    <!--================================
       
    <!--================================
        START FOOTER
    =================================-->
      <footer>
        <div class="big_footer_wrapper section_padding">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 xxs_fullwidth col-xs-6">
                        <div class="footer_about_wrapper reveal animated" data-anim="fadeInLeftShort" >
                            <div class="footer_logo">
                                <a href="index.php">
                                    <img src="images/footer_logo.png" alt="footer_logo">
                                </a>
                            </div>
                            <div class="footer_about_us">
                                <p>trust company is stablished to provide customised transport solution that includes competitive rates.</p>
                            </div>
                            <div class="footer_social">
                                <h4>get connected</h4>
                                <ul>
                                    <li><a href="index.php#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="index.php#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="index.php#"><span class="fa fa-pinterest-p"></span></a></li>
                                    <li><a href="index.php#"><span class="fa fa-linkedin"></span></a></li>
                                    <li><a href="index.php#"><span class="fa fa-skype"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 xxs_fullwidth col-xs-6">
                        <div class="footer_widgets sevices reveal animated" data-anim="fadeInRightShort" data-delay="0.2s">
                            <div class="widget_title">
                                <h4>our services</h4>
                            </div>
                            <div class="footer_links">
                                <ul>
                                    <li><a href="index.php#">Road Transportation</a></li>
                                    <li><a href="index.php#">Heavy Haulage</a></li>
                                    <li><a href="index.php#">Vehicle Inspections</a></li>
                                    <li><a href="index.php#">Special Projects</a></li>
                                    <li><a href="index.php#">Packaging & Storage</a></li>
                                    <li><a href="index.php#">Freight Forwarding</a></li>
                                    <li><a href="index.php#">Warehousing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 xxs_fullwidth col-xs-6">
                        <div class="footer_widgets contact reveal animated" data-anim="fadeInRightShort" data-delay="0.4s">
                            <div class="widget_title">
                                <h4>contatc us</h4>
                            </div>
                            <div class="footer_address">
                                <ul>
                                    <li><span class="fa fa-paper-plane-o"></span> <div class="address_right">Mansoura,Egypt</div></li>
                                    <li>
                                        <span class="fa fa-phone"></span>
                                        <div class="number address_right">
                                            <a href="tel:01212347794">+20 12 (7669) 9313</a>
                                            <a href="tel:01212347794">+20 12 (8035) 6550</a>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="fa fa-envelope-o"></span>
                                        <div class="address_right">
                                            <a href="#">mona.elmenshawy@icloud.com</a>
                                            <a href="index.php#">trusttransport.net</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 xxs_fullwidth col-xs-6">
                        <div class="footer_widgets twitter reveal animated" data-anim="fadeInRightShort" data-delay="0.6s">
                            <div class="widget_title">
                                <h4>contatc us</h4>
                            </div>

                            <div class="twitter_widget">
                                <div class="single_tweets">
                                    <span class="twit_icon fa fa-twitter"></span>
                                    <div class="twit">
                                        <p><span class="tag">@TRUST</span> transport heavy haulage fast</p>
                                        
                                    </div>
                                </div>
                                <div class="single_tweets">
                                    <span class="twit_icon fa fa-twitter"></span>
                                    <div class="twit">
                                        <p><span class="tag">@TRUST</span> transport heavy haulage fast</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="tiny_footer">
            <div class="container">
                <div class="col-md-6 xs_fullwidth col-xs-6">
                    <div class="footer_text_wrapper">
                        <p class="footer_text">Copyright © 2017 TRUST Transport. 
                    </div>
                </div>
                <div class="col-md-6 xs_fullwidth col-xs-6">
                    <div class="footer_menu clearfix">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about_us.php">About Us</a></li>
                            <li><a href="track_trace.html">Track & Trace</a></li>
                            <li><a href="http://trusttransport.themeebit.com/blog">News</a></li>
                            <li><a href="http://trusttransport.themeebit.com/contcat.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--================================
        END FOOTER
    =================================-->

    <!--//////////////////// JS GOES HERE ////////////////-->

    <!-- jquery latest version -->
    <script src="js/jquery-1.12.3.js"></script>

    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>

    <!-- jquery easing 1.3 -->
    <script src="js/jquery.easing1.3.js"></script>

    <!-- Owl carousel js-->
    <script src="js/owl.carousel.min.js"></script>

    <!-- venobox js -->
    <script src="js/venobox.min.js"></script>

    <!-- Isotope js-->
    <script src="js/isotope.js"></script>

    <!-- Pakcery layout js-->
    <script src="js/packery.js"></script>

    <!-- waypoint js -->
    <script src="js/waypoints.min.js"></script>

    <!-- google map js -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <!-- smoothscroll js -->
    <script src="js/jqury.smooth-scroll.min.js"></script>

    <!-- jquery camera slider js -->
    <script src="js/jquery.camera.min.js"></script>
    <!-- Counter up -->
    <script src="js/jquery.counterup.js"></script>

    <!-- Waypoint -->
    <script src="js/waypoints.min.js"></script>

    <!-- Main js -->
    <script src="js/main.js"></script>
</body>
</html>
