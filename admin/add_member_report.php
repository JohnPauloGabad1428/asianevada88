<?php include "includes/admin_header.php";?>
   

<?php

if(isset($_POST['add_member_report'])){
        
        $member_id = $_POST['member_id'];
        $member_income = $_POST['member_income'];
        $member_product_selling = $_POST['member_ps'];
        $member_remaing_balance = $_POST['member_rb'];
        $member_total_downline_member = $_POST['member_tdm'];
        $member_withdrawal_amount = $_POST['member_wa'];
        $member_travel_overrides = $_POST['member_to'];
        $member_available_booking = $_POST['member_ab'];
        $member_markup_commission = $_POST['member_mac'];
        $member_2go = $_POST['member_2go'];
        $member_nso = $_POST['member_nso'];
        $member_passport = $_POST['member_passport'];
        $member_eload_commission = $_POST['member_ec'];
        $member_bills = $_POST['member_bills'];
        
        //validation
        validateID($member_id);
        
        if(!$Vid == $member_id){
            
       //when FETCHING Data in database
        $query = "INSERT INTO member_report(member_id, report_income, report_productSelling, report_remainingBalance, report_totalDownlineMember, report_withdrawalAmount, report_travelOverrides, report_availableBooking, report_markup_commission, report_2go_commission, report_nsopsa_commission, report_passport_commission, report_eload_commission, report_billspayment_commission)"; 
    
        $query .= "VALUES({$member_id}, {$member_income}, {$member_product_selling}, {$member_remaing_balance}, {$member_total_downline_member}, {$member_withdrawal_amount}, {$member_travel_overrides}, {$member_available_booking}, {$member_markup_commission}, {$member_2go}, {$member_nso}, {$member_passport}, {$member_eload_commission}, {$member_bills} )";
        
        $insert_report_query = mysqli_query($connection, $query);
        
        //if NOT QUERY / NOT SUCCEDING THE QUERY
        confirm($insert_report_query);
        header("Location: report_member.php");
        }else{
            echo "Member ID is already in table";
        }

}



?>

    <div id="wrapper">

        <!-- Navigation -->
<?php include"includes/admin_navigation.php";?>       

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Welcome To Add Member Report Section
                            
                        </h1>
                        
<form action="" method="post" enctype="multipart/form-data">
    <div >
              
                
                <div class="form-group">
    			<label for="member_id">AN88-ID</label>
    				<input  list="member" name="member_id" required>
  				<datalist id="member">
  			<?php
        			$query = "SELECT member_id FROM member_info";
        			$select_all = mysqli_query($connection,$query);
        			while($row = mysqli_fetch_assoc($select_all)){
    				$member_id = $row['member_id'];
    			?>
    				 <option value="<?php echo $member_id;?>"> 
    			<?php
    			}
    		?>		
 	 </datalist>
    </div>
                
                <div class="form-group">
                    <label for="member_income">Total Income</label>
                    <input value="" type="number"  name="member_income" required>
                </div>
                
             
                
                <div class="form-group">
                    <label for="member_ps">Product Selling</label>
                    <input value="" type="number"  name="member_ps" required>
                </div>
                
                <div class="form-group">
                    <label for="member_rb">Remaining Balance</label>
                    <input value="" type="number"  name="member_rb" required>
                </div>
                
                <div class="form-group">
                    <label for="member_tdm">Total Downline Member</label>
                    <input value="" type="number"  name="member_tdm" required>
                </div>
                
                <div class="form-group">
                    <label for="member_wa">Withdrawal Amount</label>
                    <input value="" type="number"  name="member_wa" required>
                </div>
                
                <div class="form-group">
                    <label for="member_to">Travel Overrides</label>
                    <input value="" type="number"  name="member_to" required>
                </div>
                
                <div class="form-group">
                    <label for="member_ab">Available Booking</label>
                    <input value="" type="number"  name="member_ab" required>
                </div>
                
                
                
                
                <div class="form-group">
                    <label for="member_mac">Mark Up Commission</label>
                    <input value="" type="number"  name="member_mac" required>
                </div>
                
                <div class="form-group">
                    <label for="member_2go">2go Commission</label>
                    <input value="" type="number"  name="member_2go" required>
                </div>
                
                <div class="form-group">
                    <label for="member_nso">NSO/PSA Commission</label>
                    <input value="" type="number"  name="member_nso" required>
                </div>
                
                <div class="form-group">
                    <label for="member_passport">Passport Commission</label>
                    <input value="" type="number"  name="member_passport" required>
                </div>
                
                <div class="form-group">
                    <label for="member_ec">Eload Commission</label>
                    <input value="" type="number"  name="member_ec" required>
                </div>
                
                <div class="form-group">
                    <label for="member_bills">Bills Payment Commission</label>
                    <input value="" type="number"  name="member_bills" required>
                </div>
                
              
                
                


                <div class="form-group">
                    <input class="btn btn-danger" type="submit" name="add_member_report" value="Insert">
                </div>
    </div>
</form>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        
        
<?php include"includes/admin_footer.php"?>