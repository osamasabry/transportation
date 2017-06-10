<?php 
    session_start();
    if(!isset($_SESSION['username']))
        header('location:index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Home</title>

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
                            <a href="index.html"><img src="images/logo.png" alt="logo Here"></a>
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
                                            <a href="index.html#" class="trust_btn">see more</a>
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
                                            <a href="index.html#" class="trust_btn">see more</a>
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
                                        <li><a href="home.php">Profile</a></li>
                                          <li>
                                            <a href="logout.php">Logout<span class="fa fa-angle-down"></span></a>
                                         
                                        </li>
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
                            <p>Dear Sir:</p>
                        </div>
                        <div class="title"><h2>Happy With you</h2></div>
                    </div><!-- section_title starts -->
                </div>
            </div>

            <!-- row start -->
            <div class="row">
                <!-- col start -->
                <div class="col-md-12">
                    <div class="containeer" style="">
                        <ul class="nav nav-tabs">
                        <?php if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 2 ){ ?>
                          <li class="active"><a data-toggle="pill" href="#menu1" style="width: 200px; text-align: center;width: 200px;">All Orders</a></li>
                          <li><a data-toggle="pill" href="#menu5" style="width: 200px; text-align: center;">My Orders</a></li>
                          <?php }elseif(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1){?>
                          <li class="active"><a data-toggle="pill" href="#menu1" style="width: 200px; text-align: center;width: 200px;">All Orders</a></li>
                          <li><a data-toggle="pill" href="#menu2" style="width: 200px; text-align: center;">All Employees</a></li>
                          <li><a data-toggle="pill" href="#menu3" style="width: 200px; text-align: center;">All Drivers</a></li>
                          <li><a data-toggle="pill" href="#menu4" style="width: 200px; text-align: center;">All Trucks</a></li>
                            <?php }?>
                        </ul>
                        <div class="tab-content">
                        <?php  //if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 2 ){ ?>
                            <div id="menu1" class="tab-pane fade in active">
                                <h3>Customers Orders</h3>
                                <?php 
                                    require_once 'connection.php';
                                    $t = ($_SESSION['user_type'] == 2)?' where emp_id is null' : '';
                                    $sql=("SELECT * FROM orders $t");
                                    $result = mysqli_query($link,$sql);
                                    $count = mysqli_num_rows($result);
                                    $data = [];

                                    while($row = mysqli_fetch_assoc($result)) {
                                        $data[] = $row;
                                    }
                                    if($count==0){
                                        echo "<div class=\"demotext\" > <h3> No result matches </h3></div>"; 
                                    }else{ 
                                        echo "<table class=\"responstable\">
                                            <tr>
                                                <th >OrderID</th>
                                                <th >CustomerName</th>
                                                <th >CustomerPhone</th>
                                                <th >CustomerEmail</th>
                                                <th >Date From/To</th>
                                                <th >Place From/To</th>
                                                <th >EmployeeID</th>
                                                <th >DriverID</th>
                                                <th >Accepted</th>
                                                <th >TruckID</th>
                                                <th >Notes</th>
                                              </tr>";
                                         for($i=0;$i<$count;$i++)
                                        {
                                            // From place
                                            $sql2=("SELECT name FROM governorates where id =".$data[$i]['from_place']);
                                            $sql2Res=mysqli_query($link,$sql2);
                                            $from = mysqli_fetch_assoc($sql2Res)['name'];
                                            // To place
                                            $sql3=("SELECT name FROM governorates where id = ".$data[$i]['to_place']);
                                            $sql3Res=mysqli_query($link,$sql3);
                                            $to = mysqli_fetch_assoc($sql3Res)['name'];

                                            $sql4=("SELECT name FROM users where id = ".$data[$i]['emp_id']);
                                            $sql4Res = mysqli_query($link,$sql4);
                                            if($sql4Res)
                                                $emp_id = mysqli_fetch_assoc($sql4Res)['name'];
                                            else
                                                $emp_id = 'Not Assigned';

                                            $sql5=("SELECT name FROM users where id = ".$data[$i]['driver_id']);
                                            $sql5Res = mysqli_query($link,$sql5);
                                            if($sql5Res)
                                                $driver_id = mysqli_fetch_assoc($sql5Res)['name'];
                                            else
                                                $driver_id = 'Not Assigned';

                                            $sql6=("SELECT name FROM trucks where id = ".$data[$i]['truck_id']);
                                            $sql6Res=mysqli_query($link,$sql6);
                                            $truck_id = mysqli_fetch_assoc($sql6Res)['name'];

                                        $id=$data[$i]["id"];
                                        $name=$data[$i]["customer_name"];
                                        $phone=$data[$i]["phone"];
                                        $email=$data[$i]["email"];
                                        $date=$data[$i]["from_date"] .'/'.$data[$i]['to_date'];
                                        $place=$from .'/'.$to;
                                        $accepted = ($data[$i]['accepted'] == 0)? 'False' : 'True';   
                                        $notes = 'hjhjhj';
                                            echo "<tr>";
                                              echo "<td>".$id."</td>";
                                              echo "<td>".$name."</td>";
                                              echo "<td>".$phone."</td>";
                                              echo "<td>".$email."</td>";
                                              echo "<td>".$date."</td>";
                                              echo "<td>".$place."</td>";
                                              echo "<td>".$emp_id."</td>";
                                              echo "<td>".$driver_id."</td>";
                                              echo "<td>".$accepted."</td>";
                                              echo "<td>".$truck_id."</td>";
                                              echo "<td>".$notes."</td>";
                                              if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 2)
                                                echo "<td> <div class='demotextt'><a href='contact.php?id=".$id."'>Edit</a></div></td>";
                                              echo "</tr>";
                                              }
                                         echo "</table>"; 
                                    }
                                ?>
                            </div>
                            <?php// }elseif (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 2){
                             ?>
                                <div id="menu5" class="tab-pane fade">
                                <h3>My Orders</h3>
                                <?php 
                                    require_once 'connection.php';

                                    $sql=("SELECT * FROM orders where emp_id = ".$_SESSION['user_id']);
                                    // $sql=("SELECT * FROM orders ");
                                    $result = mysqli_query($link,$sql);
                                    $count = mysqli_num_rows($result);
                                    $data = [];

                                    while($row = mysqli_fetch_assoc($result)) {
                                        $data[] = $row;
                                    }
                                    if($count==0){
                                        echo "<div class=\"demotext\" > <h3> No result matches </h3></div>"; 
                                    }else{ 
                                        echo "<table class=\"responstable\">
                                            <tr>
                                                <th >OrderID</th>
                                                <th >CustomerName</th>
                                                <th >CustomerPhone</th>
                                                <th >CustomerEmail</th>
                                                <th >Date From/To</th>
                                                <th >Place From/To</th>
                                                <th >EmployeeID</th>
                                                <th >DriverID</th>
                                                <th >Accepted</th>
                                                <th >TruckID</th>
                                                <th >Notes</th>
                                              </tr>";
                                         for($i=0;$i<$count;$i++)
                                        {
                                            // From place
                                            $sql2=("SELECT name FROM governorates where id =".$data[$i]['from_place']);
                                            $sql2Res=mysqli_query($link,$sql2);
                                            $from = mysqli_fetch_assoc($sql2Res)['name'];
                                            // To place
                                            $sql3=("SELECT name FROM governorates where id = ".$data[$i]['to_place']);
                                            $sql3Res=mysqli_query($link,$sql3);
                                            $to = mysqli_fetch_assoc($sql3Res)['name'];

                                            $sql4=("SELECT name FROM users where id = ".$data[$i]['emp_id']);
                                            $sql4Res = mysqli_query($link,$sql4);
                                            if($sql4Res)
                                                $emp_id = mysqli_fetch_assoc($sql4Res)['name'];
                                            else
                                                $emp_id = 'Not Assigned';

                                            $sql5=("SELECT name FROM users where id = ".$data[$i]['driver_id']);
                                            $sql5Res = mysqli_query($link,$sql5);
                                            if($sql5Res)
                                                $driver_id = mysqli_fetch_assoc($sql5Res)['name'];
                                            else
                                                $driver_id = 'Not Assigned';

                                            $sql6=("SELECT name FROM trucks where id = ".$data[$i]['truck_id']);
                                            $sql6Res=mysqli_query($link,$sql6);
                                            $truck_id = mysqli_fetch_assoc($sql6Res)['name'];

                                        $id=$data[$i]["id"];
                                        $name=$data[$i]["customer_name"];
                                        $phone=$data[$i]["phone"];
                                        $email=$data[$i]["email"];
                                        $date=$data[$i]["from_date"] .'/'.$data[$i]['to_date'];
                                        $place=$from .'/'.$to;
                                        $accepted = ($data[$i]['accepted'] == 0)? 'False' : 'True';   
                                        $notes = 'hjhjhj';
                                            echo "<tr>";
                                              echo "<td>".$id."</td>";
                                              echo "<td>".$name."</td>";
                                              echo "<td>".$phone."</td>";
                                              echo "<td>".$email."</td>";
                                              echo "<td>".$date."</td>";
                                              echo "<td>".$place."</td>";
                                              echo "<td>".$emp_id."</td>";
                                              echo "<td>".$driver_id."</td>";
                                              echo "<td>".$accepted."</td>";
                                              echo "<td>".$truck_id."</td>";
                                              echo "<td>".$notes."</td>";
                                              echo "</tr>";
                                              }
                                         echo "</table>"; 
                                    }
                                ?>
                            </div>
                            <?php //}elseif (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1){
                            ?>
                            <div id="menu2" class="tab-pane fade">
                                <span style="font-size: 24px;">All Employees &nbsp&nbsp&nbsp<a href="addEmp.php"><span style="font-size: 32px;">+</span><span style="font-size: 12px;">Add Employee</span></a></span>
                                <?php 
                                    require_once 'connection.php';

                                    $sql=("SELECT * FROM users where user_type = 2 ");
                                    $result = mysqli_query($link,$sql);
                                    $count = mysqli_num_rows($result);
                                    $data = [];

                                    while($row = mysqli_fetch_assoc($result)) {
                                        $data[] = $row;
                                    }
                                    if($count==0){
                                        echo "<div class=\"demotext\" > <h3> No result matches </h3></div>"; 
                                    }else{ 
                                        echo "<table class=\"responstable\">
                                            <tr>
                                                <th >EmployeeID</th>
                                                <th >EmployeeName</th>
                                                <th >EmployeePhone</th>
                                                <th >EmployeeAddress</th>
                                              </tr>";
                                         for($i=0;$i<$count;$i++)
                                        {

                                        $id=$data[$i]["id"];
                                        $name=$data[$i]["name"];
                                        $phone=$data[$i]["phone"];
                                        $address=$data[$i]["address"];
                                        
                                            echo "<tr>";
                                              echo "<td>".$id."</td>";
                                              echo "<td>".$name."</td>";
                                              echo "<td>".$phone."</td>";
                                              echo "<td>".$address."</td>";
                                              echo "<td> <div class='demotextt'><a href='addEmp.php?id=".$id."'>Edit</a></div></td>";
                                              echo "</tr>";
                                              }
                                         echo "</table>"; 
                                        ?>
                                    <div class="demotext">
                                        <button  type=submit class="trust_btn" onclick="showDiv('emp')">Search</button>
                                        <br>
                                        <br>

                                        <div id='emp' style="display: none; margin-right: 300px;">
                                             <form action="SearchEmp.php" method="post">
                                                 <div class="centerer">
                                                        <select name="field" class="dropdown-select">
                                                          <option value="id">ID</option>
                                                          <option value="name">Name</option>
                                                        </select>
                                                        <select name="format" class="dropdown-select">
                                                          <option value="Equal">Equal</option>
                                                          <option value="Begin With">Begin With</option>
                                                          <option value="End With">End With</option>
                                                          <option value="Contain">Contain</option>
                                                        </select><br>
                                                    
                                                        <input type="text" name="value" class="dropdown-select1"/>
                                                    </div>
                                                    <div class="contact_btn_wrapper">
                                                        <button  style="margin-left: 300px;" type=submit class="trust_btn qute_sbmt">Search Emp</button>
                                                        <button type=reset class="trust_btn qute_sbmt">Clear Screen</button>
                                                    </div>
                                                </form>
                                        </div> 
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <span style="font-size: 24px;">All Drivers &nbsp&nbsp&nbsp<a href="adddriver.php"><span style="font-size: 32px;">+</span><span style="font-size: 12px;">Add Driver</span></a></span>

                                <?php 
                                    require_once 'connection.php';
                                    $sql=("SELECT * FROM users where user_type = 3 ");
                                    $result = mysqli_query($link,$sql);
                                    $count = mysqli_num_rows($result);
                                    $data = [];
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $data[] = $row;
                                    }
                                    if($count==0){
                                        echo "<div class=\"demotext\" > <h3> No result matches </h3></div>"; 
                                    }else{ 
                                        echo "<table class=\"responstable\">
                                            <tr>
                                                <th >DriverID</th>
                                                <th >DriverName</th>
                                                <th >DriverPhone</th>
                                                <th >DriverAddress</th>
                                              </tr>";
                                         for($i=0;$i<$count;$i++)
                                        {
                                        $id=$data[$i]["id"];
                                        $name=$data[$i]["name"];
                                        $phone=$data[$i]["phone"];
                                        $address=$data[$i]["address"];
                                            echo "<tr>";
                                              echo "<td>".$id."</td>";
                                              echo "<td>".$name."</td>";
                                              echo "<td>".$phone."</td>";
                                              echo "<td>".$address."</td>";
                                              echo "<td> <div class='demotextt'><a href='adddriver.php?id=".$id."'>Edit</a></div></td>";
                                              echo "</tr>";
                                              }
                                         echo "</table>"; 
                                    ?>
                                    <div class="demotext">
                                        <button  type=submit class="trust_btn" onclick="showDiv('driver')">Search</button>
                                        <br>
                                        <br>
                                        <div id='driver' style="display: none; margin-right: 300px;">
                                             <form action="SearchDriver.php" method="post">
                                             <div class="centerer">
                                                    <select name="field" class="dropdown-select">
                                                      <option value="id">ID</option>
                                                      <option value="user_name">Name</option>
                                                    </select>
                                                    <select name="format" class="dropdown-select">
                                                      <option value="Equal">Equal</option>
                                                      <option value="Begin With">Begin With</option>
                                                      <option value="End With">End With</option>
                                                      <option value="Contain">Contain</option>
                                                    </select><br>
                                                    <input type="text" name="value" class="dropdown-select1"/>
                                                </div>
                                                <div class="contact_btn_wrapper">
                                                    <button style="margin-left: 300px;" type=submit class="trust_btn qute_sbmt">Search Driver</button>
                                                    <button type=reset class="trust_btn qute_sbmt">Clear Screen</button>
                                                </div>
                                            </form>
                                        </div> 
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                            <div id="menu4" class="tab-pane fade">
                                <span style="font-size: 24px;">All Trucks &nbsp&nbsp&nbsp<a href="addtruck.php"><span style="font-size: 32px;">+</span><span style="font-size: 12px;">Add Truck</span></a></span>
                                <?php 
                                    require_once 'connection.php';
                                    $sql=("SELECT * FROM trucks ");
                                    $result = mysqli_query($link,$sql);
                                    $count = mysqli_num_rows($result);
                                    $data = [];
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $data[] = $row;
                                    }
                                    if($count==0){
                                        echo "<div class=\"demotext\" > <h3> No result matches </h3></div>"; 
                                    }else{ 
                                        echo "<table class=\"responstable\">
                                            <tr>
                                                <th >TruckID</th>
                                                <th >TruckType</th>
                                                <th >TruckModel</th>
                                              </tr>";
                                         for($i=0;$i<$count;$i++)
                                        {
                                        $id=$data[$i]["id"];
                                        $type=$data[$i]["type"];
                                        $model=$data[$i]["model"];
                                            echo "<tr>";
                                              echo "<td>".$id."</td>";
                                              echo "<td>".$type."</td>";
                                              echo "<td>".$model."</td>";
                                              echo "<td> <div class='demotextt'><a href='addtruck.php?id=".$id."'>Edit</a></div></td>";
                                              echo "</tr>";
                                              }
                                         echo "</table>"; 
                                    ?>
                                    <div class="demotext">
                                        <button  type=submit class="trust_btn" onclick="showDiv('truck')">Search</button>
                                        <br>
                                        <br>
                                        <div id='truck' style="display: none; margin-right:300px;">
                                             <form action="SearchTruck.php" method="post">
                                                 <div class="centerer">
                                                        <select name="field" class="dropdown-select">
                                                          <option value="id">ID</option>
                                                          <option value="type">Type</option>
                                                        </select>
                                                        <select name="format" class="dropdown-select">
                                                          <option value="Equal">Equal</option>
                                                          <option value="Begin With">Begin With</option>
                                                          <option value="End With">End With</option>
                                                          <option value="Contain">Contain</option>
                                                        </select><br>
                                                        <input type="text" name="value" class="dropdown-select1"/>
                                                    </div>
                                                    <div class="contact_btn_wrapper">
                                                        <button style="margin-left: 300px;" type=submit class="trust_btn qute_sbmt">Search Truck</button>
                                                        <button type=reset class="trust_btn qute_sbmt">Clear Screen</button>
                                                    </div>
                                                </form>
                                        </div> 
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                            <?php 
                               // }
                            ?>
                        </div>
                    </div>
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
                                <a href="index.html">
                                    <img src="images/footer_logo.png" alt="footer_logo">
                                </a>
                            </div>
                            <div class="footer_about_us">
                                <p>trust company is stablished to provide customised transport solution that includes competitive rates.</p>
                            </div>
                            <div class="footer_social">
                                <h4>get connected</h4>
                                <ul>
                                    <li><a href="index.html#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="index.html#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="index.html#"><span class="fa fa-pinterest-p"></span></a></li>
                                    <li><a href="index.html#"><span class="fa fa-linkedin"></span></a></li>
                                    <li><a href="index.html#"><span class="fa fa-skype"></span></a></li>
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
                                    <li><a href="index.html#">Road Transportation</a></li>
                                    <li><a href="index.html#">Heavy Haulage</a></li>
                                    <li><a href="index.html#">Vehicle Inspections</a></li>
                                    <li><a href="index.html#">Special Projects</a></li>
                                    <li><a href="index.html#">Packaging & Storage</a></li>
                                    <li><a href="index.html#">Freight Forwarding</a></li>
                                    <li><a href="index.html#">Warehousing</a></li>
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
                                            <a href="index.html#">trusttransport.net</a>
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
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about_us.html">About Us</a></li>
                            <li><a href="track_trace.html">Track & Trace</a></li>
                            <li><a href="http://trusttransport.themeebit.com/blog">News</a></li>
                            <li><a href="http://trusttransport.themeebit.com/contcat.html">Contact Us</a></li>
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
    <script type="text/javascript">
       function showDiv(id){
            if(id == 'emp')
                $('#emp').show();
            else if (id == 'driver')
                $('#driver').show();
            else if (id == 'truck')
                $('#truck').show();
       }
    </script>
</body>
</html>
