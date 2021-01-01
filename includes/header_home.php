<?php ob_start();?>
<?php session_start();?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- required meta tags-->
        <meta charset="utf-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--    title    -->
        <title>Asia Nevada 88 Travel and Tours Corporation - We Brought You Safe and Luxurious Trip in Every Destination</title>
        
        <!-- favicon-->
        <link rel="shortcut icon" href="img/favicon.ico">
        
        <!-- google fonts-->
        
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
        
        <!--  fontawesome-->
        <link rel="stylesheet" href="css/font-awesome/css/all.min.css">
        
        <!-- bootstrap Css-->
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        
        <link rel="stylesheet" href="css/startbootstrap/bootstrap.css">
        
        <!-- animate CSS-->
        <link rel="stylesheet" href="css/animate/animate.css">
        
        <!-- Magnific Popup   CSS file -->
        <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css">
        
        <!-- Owl Carousel-->
        <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">
        
    
        
        <!-- Style CSS-->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style2.css">        
    </head>

    <body data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100">     
    
   <header>
            
            <div class="topbar ">
       				<div class="topbar-social">
       					<a href="www.facebook.com/StartYourOwnTicketingBusiness/" class="topbar-social-item "><i class="fab fa-facebook-f fa-1x"></i></a>
						<a href="#" class="topbar-social-item"><i class="fab fa-youtube fa-1x"></i></a>
       					<a href="#" class="topbar-social-item"><i class="fab fa-instagram fa-1x"></i></a>
       					
       				</div>
       				
       				
       				<span class="topbar-child1">
       					TIME IS RIGHT TO FLIGHT WITH AN88TCC
       				</span>
       				
       				<div class="topbar-child2">
       					<ul class="topbar-account">
       						<li>
                                <?php
                                if(isset($_SESSION['username'])){
                                    $username    = $_SESSION['username'];
                                    
                                    echo "<h6 style='color:white;margin:0;'>$username</h6>";
                                    echo "<a href='includes/logout.php' >Logout</a>";
                                }else{
                                    echo "<a href='login.php'>Login</a>";    
                                }
                                ?>
                                </li>
       						<!--<li><a href="under_construction.html">Register</a></li>-->
       					</ul>
       				</div> 			
       				
       		</div>

            <nav class="navbar navbar-margin vesco-top-nav  navbar-fixed-top"  role="navigation">	
                <div class="container-fluid">
                    <div class="vesco-nav-wrapper">
                        <div class="navbar-header">
                            <!--    MenuBar for responsive-->
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#vesco-menu">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>      						
                                </button> 
                             <!--    logo here-->
                                <a class="navbar-brand" href="index.php">	
                                    <img src="img/logo1.png">	
                                </a>		
                        </div>	
                        <!--    Menu Items here-->
                        <div class="collapse navbar-collapse" id="vesco-menu">
                            <ul class="nav navbar-nav ">
                                <!--                HOME NAV            -->
                                <li><a class="smooth-scroll" href="#home">Home</a></li>
                                

                                <!--  SERVICES NAV  2  Multi-Level Dropdown    -->
                                <li role="presentation" class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" expanded="false">Services<span class="caret"></span></a>
                                    
                                    <ul class="dropdown-menu">
                                       
                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1" href="#">Service We Offer<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a tabindex="-1" href="under_construction.html">Domestic & International flights</a></li>
                                                    <li><a tabindex="-1" href="under_construction.html" >Domestic & International hotel accommodation</a></li>
                                                    <li><a tabindex="-1" href="under_construction.html">Domestic & International Tour packages</a></li>
                                                    <li><a tabindex="-1" href="under_construction.html">AN88TTC affiliate programs</a></li>
                                                    <li><a tabindex="-1" href="under_construction.html">AN88TTC franchise business package</a></li>
                                                    <li><a tabindex="-1" href="under_construction.html"  >E-Loading</a></li>
                                                    <li><a tabindex="-1" href="under_construction.html" >Bills payment</a></li>
                                                    <li><a tabindex="-1" href="under_construction.html"  >Online travel store</a></li>
                                                    <li><a tabindex="-1" href="under_construction.html" >Cruise ship</a></li>
                                                    <li><a tabindex="-1" href="under_construction.html" >Team Building Organizer</a></li>
                                                    <li><a tabindex="-1" href="under_construction.html" >NSO services</a></li>
                                                    <li><a tabindex="-1" href="under_construction.html" >VISA Assistance</a></li>
                                                    <li><a tabindex="-1" href="under_construction.html" >2GO Ferries</a></li>
                                                    <li><a tabindex="-1" href="under_construction.html" >Passport Assistance</a></li>
                                                    <li><a tabindex="-1" href="under_construction.html" >Travel Insurance</a></li>
                                                </ul>
                                        </li>
                                        
                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1" href="#">Travel Suppliers<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a tabindex="-1" href="under_construction.html">Amadeus</a></li>
                                                    <li><a tabindex="-1" href="under_construction.html" >Via</a></li>
                                                    <li><a tabindex="-1" href="under_construction.html">TA Centre</a></li>
                                                </ul>
                                        </li>
                                        
                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1" href="#">Jetrider & Veltra Services<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a tabindex="-1" href="under_construction.html">City Pass</a></li>
                                                    <li><a tabindex="-1" href="under_construction.html" >City Tours & Sightseeing</a></li>
                                                    <li><a tabindex="-1" href="under_construction.html">Daytrip and Excursions </a></li>
                                                </ul>
                                        </li>
                                        
                                    </ul>
                                    
                                </li>
                                
                                
                                
                               
                                <!--                PRODUCT NAV            -->	
                                <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="" role="button" expanded="false">Products <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a  href="under_construction.html">Appliances</a></li>    
                                    </ul>
                                </li>
                                <!--                OUR TEAM NAV          -->       
                                <li role="presentation" ><a class="dropdown-toggle smooth-scroll" data-toggle="dropdown" href="#our-team" expanded="false">Our Team</a></li>
                                <!--                ABOUT US NAV          -->		 
                                <li><a class="smooth-scroll" href="#about" >About Us</a></li>
                                <!--                OUR BUSINESS NAV      -->
                                <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" expanded="false">Our Business <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a  href="under_construction.html" >How It Works</a></li>    
                                    </ul>
                                </li>
                                <!-- Dasboard-->
                                
                                  
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
       </header>