<?php include 'includes/db.php';?>
<?php include 'includes/header_dashboard.php';?>
        
<!-- DASHBOARD    -->
<section id="dashboard">
        
    <div class="content-box container">
        <div class="row">
            <div class="content-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3>DashBoard</h3>
            </div>
                    
<!-- Member Panel   -->
<?php include "includes/panel.php";?>
                    
<!-- Member Content   -->                    

             <?php
                include "includes/dashboard_content.php";
             ?>                

                </div>
           </div>
</section>
        
    <br>
        
<?php include 'includes/footer_dashboard.php';?>