<?php 
    $to = "arnov@evistechnology.com"; 
    $subject = "Let's Talk About Project";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: ".filter_input(INPUT_POST, 'email')."\r\n"; 
    $headers .= 'Cc: obi.prog@gmail.com' . "\r\n";
    $message = "Budget: ".filter_input(INPUT_POST, 'budget')."<br/>";
    $message .= "Project Name: ".filter_input(INPUT_POST, 'project')."<br/>";
    $message .= "Client Name: ".filter_input(INPUT_POST, 'name')."<br/>";
    $message .= "Mobile: ".filter_input(INPUT_POST, 'mobile')."<br/>";
    $message .= "Alternative Name: ".filter_input(INPUT_POST, 'alternative_mobile')."<br/>";
    $message .= "Project Description: ".filter_input(INPUT_POST, 'project_description')."<br/>";
    
    mail($to, $subject, $message, $headers);
    
    require 'db_connect.php';
    $project = filter_input(INPUT_POST, 'project');
    $budget = filter_input(INPUT_POST, 'budget');
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'name');
    $mobile = filter_input(INPUT_POST, 'mobile');
    $alternative_mobile = filter_input(INPUT_POST, 'alternative_mobile');
    $project_description = filter_input(INPUT_POST, 'project_description');
    
    $sql = "INSERT INTO tbl_letstalk (project, budget, name, email, mobile, alternative_mobile, project_description)
        VALUES ('$project', '$budget', '$name', '$email', '$mobile', '$alternative_mobile', '$project_description')";

    $conn->query($sql)                      
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Evis Broadband Internet Management System</title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/icon" href="../assets/images/favicon.ico"/>
        <!-- Font Awesome -->
        <link href="../assets/css/font-awesome.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="../assets/css/bootstrap.css" rel="stylesheet">
        <!-- Slick slider -->
        <link rel="stylesheet" type="text/css" href="../assets/css/slick.css"/> 
        <!-- Animate css -->
        <link rel="stylesheet" type="text/css" href="../assets/css/animate.css"/>  
        <!-- Theme color -->
        <link id="switcher" href="../assets/css/theme-color/default.css" rel="stylesheet">
        <!-- Main Style -->
        <link href="../style.css" rel="stylesheet">
        <!-- Fonts -->
        <!-- Open Sans for body font -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!-- Raleway for Title -->
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <!-- Pacifico for 404 page   -->
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>  
        <!-- BEGAIN PRELOADER -->
        <div id="preloader">
            <div class="loader">&nbsp;</div>
        </div>
        <!-- END PRELOADER -->

        <!-- SCROLL TOP BUTTON -->
        <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
        <!-- END SCROLL TOP BUTTON -->

        <!-- Start menu section -->
        <section id="menu-area">
            <nav class="navbar navbar-default main-navbar" role="navigation">  
                <div class="container">
                    <div class="navbar-header">
                        <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- LOGO -->     
                        <!-- Image logo  -->
                        <a class="navbar-brand logo" href="index.html">
                            <img src="../asset/public/img/evis-logo.png" alt="Evis Technology">
                        </a> 
                        <!-- Text logo  -->
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="../index.php#about">About</a></li>                     
                            <li><a href="../index.php#product">Products</a></li>
                            <li><a href="../index.php#portfolio">Portfolios</a></li>  
                            <li><a href="../index.php#testimonial">Testimonial</a></li>  
                            <li><a href="../index.php#from-blog">Blog</a></li>  
                            <li><a href="../index.php#contact">Contact</a></li>
                            <li><a href="">Client Area</a></li>
                        </ul>                            
                    </div>
                    <div class="search-area">
                        <form action="">
                            <input id="search" name="search" type="text" placeholder="What're you looking for ?">
                            <input id="search_submit" value="Rechercher" type="submit">
                        </form>
                    </div>         
                </div>          
            </nav> 
        </section>
        <!-- End menu section -->

        <!-- Start error page -->
        <section id="details-page">
            <div class="container">
                <div class="row">
                    <h1>We Will Contact With You Very Soon</h1>
                </div>
            </div>
        </section>
        <!-- End product details Page -->

        <!-- Start Footer -->    
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-top-area">             
                                <a class="footer-logo" href="#">
                                    <img src="../asset/public/img/evis-logo.png" alt="Evis Technology">
                                </a>              
                                <div class="footer-social">
                                    <a class="facebook" href="https://www.facebook.com/evis.technology"><span class="fa fa-facebook"></span></a>
                                    <a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
                                    <a class="google-plus" href="#"><span class="fa fa-google-plus"></span></a>
                                    <a class="youtube" href="#"><span class="fa fa-youtube"></span></a>
                                    <a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; Evis Technology. All Right Revised</p>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- initialize jQuery Library --> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Bootstrap -->
        <script src="../assets/js/bootstrap.js"></script>
        <!-- Slick Slider -->
        <script type="text/javascript" src="../assets/js/slick.js"></script>
        <!-- Counter -->
        <script type="text/javascript" src="../assets/js/waypoints.js"></script>
        <script type="text/javascript" src="../assets/js/jquery.counterup.js"></script>
        <!-- Wow animation -->
        <script type="text/javascript" src="../assets/js/wow.js"></script> 
        <!-- Custom js -->
        <script type="text/javascript" src="../assets/js/custom.js"></script>
    </body>
</html>