<table id="ttable" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>S.I No.</th>
                <th>Sell Amount</th>
                <th>Commission</th>
                <th>Remarks</th>
                <th>Date & Time</th>
            </tr>
        </thead>
        
    <tbody class="">
       <?php
        
        $query = "SELECT * FROM earning_commission WHERE member_id = {$_SESSION['id']}";
        $select_data_query = mysqli_query($connection, $query);
        confirm($select_data_query);
        
        while($row = mysqli_fetch_assoc($select_data_query)){
            $member_id = $row['member_id'];
            $booked_on = $row['booked_on'];
            $destination_id1 = $row['destination_id1'];
            $destination_id2 = $row['destination_id2'];
            $travel_date = $row['travel_date'];
            $client = $row['client'];
            $owrt = $row['owrt'];
            $amount = $row['amount'];
            $no_pax = $row['no_pax'];
            $mark_up = $row['mark_up'];
            $sponsor_id = $row['sponsor_id'];
            $package_id = $row['package_id'];
            $commission = $row['commission'];
            
            //to generate ID to NAME
            $member_name = generateIdtoname($member_id);

            //to generate destination ID to destination CODE
            $des1 = destinationidtocode($destination_id1);
            $des2 = destinationidtocode($destination_id2);

            //to generate owrt ID to owrt TYPE
            $owrtnew = owrttotype($owrt);

            //to generate sponsored ID to Name
            $sponsorName = generateSponsorName($sponsor_id);
         ?>
          <tr>
              <td class="counterCell"></td>
              <td><?php echo $amount ?></td>
              <td><?php echo $commission ?></td>
              <td>Client: <?php echo $client ?> | Booked_on: <?php echo $booked_on ?> | Destination: <?php echo $des1 . " " . $des2 ?> | Travel Date: <?php echo $travel_date ?> | OW/RT: <?php echo $owrtnew ?> | Amount: <?php echo $amount ?> | Pax: <?php echo $no_pax ?> | Mark Up: <?php echo $mark_up ?> | SponsorBy: <?php echo $sponsorName ?> | Package: <?php echo $package_id ?> | Commission: <?php echo $commission ?></td>
              <td><?php echo $travel_date ?></td>
              
          </tr>
        <?php   
        }
        ?>
        </tbody>
</table>









