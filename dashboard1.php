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
<div class="col-md-9">
    <div class="box-outer-right">
        <div class="box-header">
            <p id="header-text">Welcome <?php echo $_SESSION['firstname'];?><!--, Your total Income is: 18580,You only need 981420 to reach your first Million!--></p>
            <p>AN88 ID: <?php echo $_SESSION['id'];?></p>                  
            <p>Partnership Agreement<a class="btn btn-xs btn-red" href="" role="button">Click Here</a></p>
        </div>
                             
                            
    <div class="box-outer-content">
        <div class="row">
            <!--       FETCH DATA         -->
            <?php  
                
                $report_member_id = $_SESSION['id'];//use this variable to assign member_id
                
                $query = "SELECT * FROM member_report WHERE report_id ='{$report_member_id}';";
                $select_all_memberReport_query = mysqli_query($connection,$query);
                
                while($row = mysqli_fetch_assoc($select_all_memberReport_query)){
                    $report_income = $row['report_income'];
             
                    $report_productSelling = $row['report_productSelling'];
                    $report_remainingBalance = $row['report_remainingBalance'];
                    $report_numberOfSharing = $row['report_totalDownlineMember'];
                    $report_withdrawalAmount = $row['report_withdrawalAmount'];
                    $report_travelOverrides = $row['report_travelOverrides'];
                    $report_availableBooking = $row['report_availableBooking'];
                   
                    ?>
                        <div class="col-lg-4">
                            <div class="box-inner-content">
                                <span><?php echo $report_income;?></span>
                                <p>Total Income</p> 
                             </div>
                        </div>  
            
            
                        <div class="col-lg-4">
                            <div class="box-inner-content">
                                <span><?php echo $report_productSelling;?></span>
                                <p>Product Selling</p> 
                             </div>
                        </div>
            
                        <div class="col-lg-4">
                            <div class="box-inner-content">
                                <span><?php echo $report_remainingBalance;?></span>
                                <p>Remaining Balance</p> 
                             </div>
                        </div>
            
                        <div class="col-lg-4">
                            <div class="box-inner-content">
                                <span><?php echo $report_numberOfSharing;?></span>
                                <p>Number of Sharing</p> 
                             </div>
                        </div>
            
                        <div class="col-lg-4">
                            <div class="box-inner-content">
                                <span><?php echo $report_withdrawalAmount;?></span>
                                <p>Withdrawal Amount</p> 
                             </div>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="box-inner-content">
                                <span><?php echo $report_travelOverrides;?></span>
                                <p>Travel Overrides</p> 
                             </div>
                        </div>
            
                        <div class="col-lg-4">
                            <div class="box-inner-content">
                                <span><?php echo $report_availableBooking;?></span>
                                <p>Available Bookings</p> 
                             </div>
                        </div>
                      
            <?php   } ?>
            
            
            
        </div>
    </div>
    </div>
</div>
                </div>
           </div>
</section>
        
    <br>
        
<?php include 'includes/footer_dashboard.php';?>