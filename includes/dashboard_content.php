<div class="col-md-9">
    <div class="box-outer-right">
        <div class="box-header">
            <p id="header-text">Welcome <?php echo $_SESSION['firstname'];?><!--, Your total Income is: 18580,You only need 981420 to reach your first Million!--></p>
            <p>AN88 ID: <?php echo $_SESSION['id'];?></p>                  
            <p>Partnership Agreement<a class="btn btn-xs btn-red" href="" role="button">Click Here</a></p>
        </div>
       <div class="box-outer-content">
        
            <!--       FETCH DATA         -->
            <?php  
                
                $report_member_id = $_SESSION['id'];//use this variable to assign member_id
                
                $query = "SELECT * FROM member_report WHERE member_id ='{$report_member_id}';";
                $select_all_memberReport_query = mysqli_query($connection,$query);
                
                while($row = mysqli_fetch_assoc($select_all_memberReport_query)){
                    $report_income = $row['report_income'];
             
                    $report_productSelling = $row['report_productSelling'];
                    $report_remainingBalance = $row['report_remainingBalance'];
                    $report_numberOfSharing = $row['report_totalDownlineMember'];
                    $report_withdrawalAmount = $row['report_withdrawalAmount'];
                    $report_travelOverrides = $row['report_travelOverrides'];
                    $report_availableBooking = $row['report_availableBooking'];
                    
                    $report_mac = $row['report_markup_commission'];
                    $report_2go = $row['report_2go_commission'];
                    $report_nso = $row['report_nsopsa_commission'];
                    $report_passport = $row['report_passport_commission'];
                    $report_ec = $row['report_eload_commission'];
                    $report_bills = $row['report_billspayment_commission'];
                   
                    ?>
                       
                   <div class="row">    
                        <div class="col-md-3">
                            <div class="box-inner-content" >
                                <span><?php echo $report_income;?></span>
                                <p>Total Income</p> 
                             </div>
                        </div>  
            
            
                        <div class="col-md-3" >
                            <div class="box-inner-content">
                                <span><?php echo $report_productSelling;?></span>
                                <p>Product Selling</p> 
                             </div>
                        </div>
            
                        <div class="col-md-3">
                            <div class="box-inner-content">
                                <span><?php echo $report_remainingBalance;?></span>
                                <p>Booking Commission</p> 
                             </div>
                        </div>
       
                        <div class="col-md-3">
                            <div class="box-inner-content">
                                <span><?php echo $report_numberOfSharing;?></span>
                                <p>Number of Sharing</p> 
                             </div>
                        </div>
            </div>
            <div class="row">
                        <div class="col-md-3">
                            <div class="box-inner-content">
                                <span><?php echo $report_withdrawalAmount;?></span>
                                <p>Withdrawal Amount</p> 
                             </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="box-inner-content">
                                <span><?php echo $report_travelOverrides;?></span>
                                <p>Travel Overrides</p> 
                             </div>
                        </div>
    
               
                        <div class="col-md-3">
                            <div class="box-inner-content">
                                <span><?php echo $report_availableBooking;?></span>
                                <p>Available Bookings</p> 
                             </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="box-inner-content">
                                <span><?php echo $report_mac;?></span>
                                <p>Mark Up Commission</p> 
                             </div>
                        </div>
                      
            
            
            
            
        </div>
        
          <div class="row">
                        <div class="col-md-3">
                            <div class="box-inner-content">
                                <span><?php echo $report_2go;?></span>
                                <p>2go Commission</p> 
                             </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="box-inner-content">
                                <span><?php echo $report_nso;?></span>
                                <p>NSO/PSA Commission</p> 
                             </div>
                        </div>
    
               
                        <div class="col-md-3">
                            <div class="box-inner-content">
                                <span><?php echo $report_passport;?></span>
                                <p>Passport Commission</p> 
                             </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="box-inner-content">
                                <span><?php echo $report_ec;?></span>
                                <p>Eload Commission</p> 
                             </div>
                        </div>
                      
            
            
            
            
        </div>
          <div class="row">
                        <div class="col-md-3">
                            <div class="box-inner-content">
                                <span><?php echo $report_bills;?></span>
                                <p>Bills Payment Commission</p> 
                             </div>
                        </div>
                        
                        
                      
            
            
            
            
        </div>
        <?php   } ?>
        
         <!-- FOR REMINDERS -->
          <div class="row">
              <div class="alert alert-info" role="alert">
            
                                <h2>REMINDERS!</h2> 
                  <p>Attention to all partners,

All commission form should be sent after booking, The staff who assisted you should be the one who will encode your commission. Failure to send the commission form within 24 hours will be forfeited. This is implemented for us to avoid errors in your withdrawal request.Thank You,
An88ttc Management</p>
           
            </div>
        </div>
        
        
        
    </div>
    
       </div>
</div>