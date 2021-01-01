    <?php ob_start();?>
    <?php session_start();?> 
    <?php
    if(!isset($_SESSION['username'])){
    header("Location: login.php");
}

?>
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
        <link rel="stylesheet" href="css/about.css">
        <link rel="stylesheet" href="css/dashboard.css">   
        <style>
                #ttable {
                        counter-reset: tableCount;  
                    }
                .counterCell:before {              
                        content: counter(tableCount); 
                        counter-increment: tableCount; 
                    }
         </style> 
        
        <script src="js/tinymce/tinymce.min.js"></script>
        <script src="js/tinymce/tinymce.js"></script>
        
      
        
        
    </head>

    <body data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100">
    
        <header>
            
            <div class="topbar ">
       				<div class="topbar-social">
       					<a href="" class="topbar-social-item "><i class="fab fa-facebook-f fa-1x"></i></a>
						<a href="" class="topbar-social-item"><i class="fab fa-youtube fa-1x"></i></a>
       					<a href="" class="topbar-social-item"><i class="fab fa-instagram fa-1x"></i></a>
       					
       				</div>
       				
       				
       				<span class="topbar-child1">
       					TIME IS RIGHT TO FLIGHT WITH AN88TCC
       				</span>
       				
       				<div class="topbar-child2">
       					<ul class="topbar-account">
       						<li><a href="includes/logout.php" >Logout</a></li>
       						
       						<!--<li><a href="#" >Register</a></li>-->
       					</ul>
       				</div> 			
       				
       		</div>

            <nav class="navbar navbar-margin vesco-top-nav vesco-top-nav-white navbar-fixed-top"  role="navigation">	
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
                                <li><a  href="index.php">Home</a></li>
                                <!--                SERVICES NAV        -->
                                <li role="presentation" class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" expanded="false">Services<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="services.html" >Domestic & International flights</a></li>
                                            <li><a href="services.html" >Domestic & International hotel accommodation</a></li>
                                            <li><a href="services.html">Domestic & International Tour packages</a></li>
                                            <li><a href="services.html">AN88TTC affiliate programs</a></li>
                                            <li><a href="services.html">AN88TTC franchise business package</a></li>
                                            <li><a href="services.html"  >E-Loading</a></li>
                                            <li><a href="services.html" >Bills payment</a></li>
                                            <li><a href="services.html"  >Online travel store</a></li>
                                            <li><a href="services.html" >Cruise ship</a></li>
                                            <li><a href="services.html" >Team Building Organizer</a></li>
                                            <li><a href="services.html" >NSO services</a></li>
                                            <li><a href="services.html" >VISA Assistance</a></li>
                                            <li><a href="services.html" >2GO Ferries</a></li>
                                            <li><a href="services.html" >Passport Assistance</a></li>
                                            <li><a href="services.html" >Travel Insurance</a></li>      
                                        </ul>

                                </li>
                                <!--                PRODUCT NAV            -->	
                                <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="" role="button" expanded="false">Products <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a  href="appliances.html">Appliances</a></li>    
                                    </ul>
                                </li>
                                <!--                OUR TEAM NAV          -->       
                                <li role="presentation" ><a href="team.html" >Our Team</a></li>
                                <!--                ABOUT US NAV          -->		 
                                <li><a  href="about.html" >About Us</a></li>
                                <!--                OUR BUSINESS NAV      -->
                                <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" expanded="false">Our Business <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a  href="howItWorks.html" >How It Works</a></li>    
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
       </header>
       
        
        <section id="image-header">
            <div id="image-cover" class="bg-parallax">
                
            
            </div>
        
        </section>