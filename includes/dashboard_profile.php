
<?php
//if you want to select 2 or more table to show the data, select it all by their table name.
    $query = "SELECT * FROM member_info WHERE member_id = {$_SESSION['id']}";
    $select_all_data_query = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_all_data_query)){
        $id = $row['member_id'];
        $firstname = $row['member_firstname'];
        $lastname = $row['member_lastname'];
        $middleInitial = $row['member_mi'];
        $age = $row['member_age'];
        $address = $row['member_address'];
        $birthday = $row['member_birthday'];
        $zipcode = $row['member_zipcode'];
        $email = $row['member_email'];
        $username = $row['member_username'];
        $password = $row['member_password'];
        $contact = $row['member_contact'];
        $gender = $row['member_gender'];
        $startDate = $row['member_start_date'];
        $packageId = $row['package_id'];
        $methodOfJoiningId = $row['moj_id'];
        $travelAgencyName = $row['member_travelAgencyName'];
        $sponsoredBy = $row['sponsored_id_by'];
        
        
    }




?>
<div class="table_responsive">
<table class="table table-striped">
    <thead >
        <tr>
            <th class="table-danger">Account Information</th>
        </tr>
    </thead>
    
    <tbody >
    <tr>
        <td>Member ID:</td>
        <td><?php echo $id?></td>
    </tr>
    <tr>
        <td>Sponsored ID:</td>
        <td><?php echo $id?></td>
    </tr>
    <tr>
        <td>Username:</td>
        <td><?php echo $username?></td>
    </tr>
    
    <tr>
        <td>Start Date:</td>
        <td><?php echo $startDate?></td>
    </tr>
    
    <tr>
        <td>Package:</td>
        <td><?php echo packageGet($packageId);?></td>
    </tr>
    
    
    
    </tbody>

</table>
</div>

<div class="table_responsive">
<table class="table table-striped">
    <thead >
        <tr>
            <th class="table-danger">Personal Information</th>
        </tr>
    </thead>
    
    <tbody >
    <tr>
        <td>Travel Agency:</td>
        <td><?php echo $travelAgencyName?></td>
    </tr>
    <tr>
        <td>Name:</td>
        <td><?php echo $firstname." ".$middleInitial." ".$lastname?></td>
    </tr>
    
    <tr>
        <td>Age:</td>
        <td><?php echo $age?></td>
    </tr>
    
    <tr>
        <td>Birthdate:</td>
        <td><?php echo $birthday; ?></td>
    </tr>
    
    <tr>
        <td>Address:</td>
        <td><?php echo $address?></td>
    </tr>
    
    <tr>
        <td>Zipcode:</td>
        <td><?php echo $zipcode?></td>
    </tr>
    
    <tr>
        <td>Contact Number:</td>
        <td><?php echo $contact?></td>
    </tr>
    
    <tr>
        <td>Email:</td>
        <td><?php echo $email?></td>
    </tr>
    
    
    </tbody>

</table>
</div>


<a href="profile_edit.php" type="button" class="btn btn-primary" name="edit_profile">Edit Profile</a>










<?php
        //Fucntion to get package description using ID
        function packageGet($x){
            global $connection;
            $query = "SELECT * FROM package WHERE package_id = {$x}";
            $select_all_package = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($select_all_package)){
                $package = $row['package_desc'];
            }
            //Used return para mailabas mo yung value sa function
            return $package;
        }
?>