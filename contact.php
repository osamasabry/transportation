<?php
 
require_once 'connection.php';

session_start();
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $order= mysqli_query($link,"select * from orders where id='$id'");
    $orders=mysqli_fetch_array($order);
    $result= mysqli_query($link,"select * from users where active=1 and user_type = 3 and users.id not in (select driver_id FROM orders where orders.accepted = 1 and orders.from_date not between ".$orders['from_date']." and ".$orders['to_date']." and orders.to_date not between ".$orders['from_date']." and ".$orders['to_date'].")");
    if($result){
        $drivers = [];
        while($res1 = mysqli_fetch_assoc($result)){
            $drivers[] = $res1;
        }
    }
    $result2= mysqli_query($link,"select * from trucks where active=1 and trucks.id not in (select truck_id FROM orders where orders.accepted = 1 and orders.from_date not between ".$orders['from_date']." and ".$orders['to_date']." and orders.to_place not between ".$orders['from_date']." and ".$orders['to_date'].")");
    if($result2){
        $trucks = [];
        while($res1 = mysqli_fetch_assoc($result2)){
            $trucks[] = $res1;
        }
    }
}else if(isset($_SESSION['username']))
    header('location:home.php');

$result= mysqli_query($link,"select * from governorates");

$data = [];
while($res1 = mysqli_fetch_assoc($result)){
    $data[] = $res1;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Order</title>

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

    <!-- datepicker css goes here -->
    <link rel="stylesheet" href="css/datepicker.min.css">

    <!-- style css -->
    <link rel="stylesheet" href="style.css"/>

    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    
     <link rel="stylesheet" href="css/mystyle.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
</head>
<body class="request_quote">

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


  <!-- /.container end -->
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
                                                
                                                    <li><a href="news_list.php">news list</a></li>
                                                    <li><a href="news.php">news grid</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                         <?php if(isset($_SESSION["username"])):?>    
                                        <li><a href="home.php">Profile</a></li>
                                          <li>
                                            <a href="logout.php">Logout<span class="fa fa-angle-down"></span></a>
                                         
                                        </li>
                                    <?php else: ?>
                                        <li><a href="contact.php">Order</a></li>
                                          <li>
                                            <a href="login.php">Login<span class="fa fa-angle-down"></span></a>
                                         
                                        </li>
                                    <?php endif;?>

                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </nav>
                        </div><!-- main menu ends -->
                    </div>
                </div><!-- /.row end -->

            </div><!-- /.container ends -->
        </div><!-- menu ends -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    
    <!--================================
        START QUOTE AREA
    =================================-->
    <section class="get_quote section_padding reveal animated" data-delay="0.2s" data-anim="fadeInUpShort">
        <!-- container starts -->
        <div class="container">
            <!-- row starts -->
            <div class="row">

                <!-- col-md-3 starts -->
                <div class="col-md-10 col-sm-10 col-sm-offset-1 col-md-offset-1">
                    <div class="quote_requ_wrapper">
                        <div class="section_title title_center">
                            <div class="title"><h2>Create Order</h2></div>
                        </div>
                        <?php if (isset($_GET['id'])): ?>
                            <div class="contact_form">
                                <form action="addContact.php" method="post">
                                    <input type="hidden" name="order_id" value="<?php echo $id ;?>">

                                    <div class="form_half left">
                                        <input type="text" placeholder="Name" name="nam" value="<?php echo $orders['customer_name']?>" disabled>
                                    </div>
                                    <div class="form_half right">
                                        <input type="text" placeholder="Phone" name="phone" value="<?php echo $orders['phone']?>" disabled>
                                    </div>
                                    <div  class="form_half left">
                                        <input type="email" placeholder="Email" name="email" value="<?php echo $orders['email']?>" disabled>
                                    </div>
                                    <div class="form_half right">
                                        <input type="text" placeholder="address" name="address" value="<?php echo $orders['address']?>" disabled>
                                    </div>    
                                    <div class="form_half left">
                                         <input type="text" placeholder="from_date" name="from_date" value="<?php echo $orders['from_date']?>" disabled>
                                    </div>
                                    <div class="form_half right">
                                         <input type="text" placeholder="to_date" name="to_date" value="<?php echo $orders['to_date']?>" disabled>
       
                                    </div>
                                    <div class="form_half left">
                                        <?php 
                                            $sql3=("SELECT name FROM governorates where id =".$orders['from_place']);
                                                $sql3Res=mysqli_query($link,$sql3);
                                                $from = mysqli_fetch_assoc($sql3Res)['name'];

                                        ?>
                                        <input type="text" placeholder="from_place" name="from_place" value="<?php echo $from?>" disabled>
                                    </div>
                                   <div class="form_half right">
                                        <?php
                                         $sql2=("SELECT name FROM governorates where id =".$orders['to_place']);
                                            $sql2Res=mysqli_query($link,$sql2);
                                            $to = mysqli_fetch_array($sql2Res)['name'];?>

                                         <input type="text" placeholder="to_place" name="to_place" value="<?php echo $to ?>" disabled>
                                    </div>
                                    <br>
                                    <br>
                                    <textarea name="message" placeholder="Notes" cols="30" rows="8" disabled=""><?php echo $orders['Note'];?></textarea>

                                    <div class="form_half left">
                                        <select required=""  class="form_half" name="driver" style="width:460px; border-radius:10px;">
                                            <?php if(empty($trucks)){
                                                    echo "<option value='0'>There is no Available Drivers</option>";
                                                }else{ ?>
                                             <option value="0">Assign Driver</option>
                                             <?php }
                                                foreach ($drivers as $key => $value) {
                                                    echo "<option value=".$value['id'].">".$value['name']."</option>";    
                                                }
                                             ?> 
                                         </select>
                                    </div>
                                    <div class="form_half right">
                                         <select required=""  class="form_half" name="truck" style="width:460px; border-radius:10px;">
                                            <?php if(empty($trucks)){
                                                    echo "<option value='0'>There is no Available Trucks</option>";
                                                }else{ ?>
                                             <option value="0">Assign Truck</option>
                                              <?php } 
                                                foreach ($trucks as $key => $value) {
                                                    echo "<option value=".$value['id'].">".$value['type']."</option>";    
                                                }
                                             ?>  
                                         </select>
                                    </div>
                                    
                                    
                                    <div class="contact_btn_wrapper">
                                    <button class="trust_btn qute_sbmt" type="submit" name="button">Assign Order To Driver</button>
                                    </div>
                                </form>
                            </div>

                        <?php else: ?>
                        
                            <div class="contact_form">
                                <form action="addContact.php" method="post">
                                    <div class="form_half left">
                                        <input type="text" placeholder="Name" name="nam">
                                    </div>
                                    <div class="form_half right">
                                        <input type="text" placeholder="Phone" name="phone">
                                    </div>
                                    <div  class="form_half left">
                                        <input type="email" placeholder="Email" name="email">
                                    </div>
                                    <div class="form_half right">
                                        <input type="text" placeholder="address" name="address">
                                    </div>    
                                    <div class="form_half left">
                                         <input required="" type="text" class="form_half" placeholder="From" onfocus="(this.type='date')" name="from_date"/>
                                    </div>
                                    <div class="form_half right">
                                         <input required="" type="text" class="form_half" placeholder="To" onfocus="(this.type='date')" name="to_date"/>
       
                                    </div>
                                    <div class="form_half left">
                                         <select required=""  class="form_half" name="from_palce" style="width:460px; border-radius:10px;">
                                             <option value="0">Select From</option>
                                             <?php
                                                foreach ($data as $key => $value) {
                                                    echo "<option value=".$value['id'].">".$value['name']."</option>";    
                                                }
                                             ?> 
                                         </select>
                                    </div>
                                   <div class="form_half right">
                                         <select required=""  class="form_half" name="to_palce" style="width:460px; border-radius:10px;">
                                             <option value="0">Select To</option>
                                              <?php 
                                                foreach ($data as $key => $value) {
                                                    echo "<option value=".$value['id'].">".$value['name']."</option>";    
                                                }
                                             ?>  
                                         </select>
                                    </div>
                                    <br>
                                    <br>
                                    <textarea name="message" placeholder="Notes" cols="30" rows="8"></textarea>
                                    
                                    <div class="contact_btn_wrapper">
                                    <button class="trust_btn qute_sbmt" type="submit" name="button">Send Order</button>
                                    </div>
                                </form>
                            </div>
                        <?php endif ?>
                    </div><!--  -->
                </div><!-- col-md-3 ends -->
            </div><!-- /.row ends -->
        </div><!-- container ends -->
    </section>
    <!--================================
        END QUOTE AREA
    =================================-->


    

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
                            <li><a href="track_trace.php">Track & Trace</a></li>
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

    <script>

        var markers = [
            ['Afghanistan', 36.779030, 69.949081],
            ['Egypt', 	30.028706, 31.249592],
            ['Thailand', 13.736717, 100.523186],
            ['Bangladesh', 23.728783, 	90.393791]
        ];
        var myCenter=new google.maps.LatLng(32.294445, 72.349724);
        function initialize()
            {
                var mapProp = {
                  center:myCenter,
                  zoom:4,
                  scrollwheel: false,
                  mapTypeId:google.maps.MapTypeId.ROADMAP,
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#edf0f5"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                  };

                var map = new google.maps.Map(document.getElementById("google_map"),mapProp);

                for( var i=0; i < markers.length; i++){
                    var marker = new google.maps.Marker({
                      position: new google.maps.LatLng(markers[i][1], markers[i][2]),
                      map: map,
                      icon:'images/map-marker'+i+'.png'
                    });
                }


                var infowindow = new google.maps.InfoWindow({
                  content:"united-states"
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>
</html>
