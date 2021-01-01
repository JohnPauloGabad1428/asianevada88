<?php include 'includes/db.php';?>
<?php include 'includes/header_dashboard.php';?>
        
<!-- DASHBOARD    -->
<section id="dashboard">
        
    <div class="content-box container">
        <div class="row">
            <div class="content-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3>Profile</h3>
            </div>
                    
<!-- Member Panel   -->
<?php include "includes/panel.php";?>
                    
<!-- Member Content   -->                    
<div class="col-md-9">
    <div class="box-outer-right">
        <div class="box-header">
            <p id="header-text">Welcome <?php echo $_SESSION['firstname'];?><!--, Your total Income is: 18580,You only need 981420 to reach your first Million!--></p>
            <p>AN88 ID: <?php echo $_SESSION['id'];?></p>                  
            <p>Partnership Agreement<a class="btn btn-xs btn-red" href="" role="button">Click Here</a></p>
        </div>
            
             <?php 
                include "includes/dashboard_profile.php";
             ?>                
                            
    
    </div>
</div>
                </div>
           </div>
</section>
        
    <br>
        
<?php include 'includes/footer_dashboard.php';?>