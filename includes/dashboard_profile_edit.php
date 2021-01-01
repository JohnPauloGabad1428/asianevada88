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


 // IF THE USER PRESS THE SAVE BUTTON
    if(isset($_POST['edit_profile'])){
        $travelAgencyName = $_POST['travelAgencyName'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $middleInitial = $_POST['middleInitial'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $birthdate = $_POST['bday'];
        $zipcode = $_POST['zip'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $contact = $_POST['cn'];
        
        $query = "UPDATE member_info SET ";
        $query .= "member_travelAgencyName = '{$travelAgencyName}', ";
        $query .= "member_firstname = '{$firstname}', ";
        $query .= "member_lastname = '{$lastname}', ";
        $query .= "member_mi = '{$middleInitial}', ";
        $query .= "member_age = '{$age}', ";
        $query .= "member_address = '{$address}', ";
        $query .= "member_zipcode = '{$zipcode}', ";
        $query .= "member_email = '{$email}', ";
        $query .= "member_username = '{$username}', ";
        $query .= "member_contact = '{$contact}' ";
        $query .= "WHERE member_id = {$_SESSION['id']} ";
        
        $update_member_profile = mysqli_query($connection, $query);
        if(!update_member_profile){
            global $connection;
            die("QUERY FAILED ." . mysqli_error($connection));
        }
        header("Location: profile.php");
        
    }
?>
  






<form action="" method="post" enctype="multipart/form-data">
<div class="table_responsive">
<table class="table table-striped">
   
    <tbody >
    <tr>
        <td><label for="firstname">Username</label></td>
        <td><input  value="<?php echo $username; ?>" type="text" size="50" name="username"></td>
    </tr>
    
    <tr>
        <td><label for="travelAgencyName">Travel Agency Name</label></td>
        <td><input  value="<?php echo $travelAgencyName; ?>" type="text" size="50"  name="travelAgencyName"></td>
    </tr>
    
    <tr>
        <td><label for="firstname">Firstname</label></td>
        <td><input  value="<?php echo $firstname; ?>" type="text" size="50" name="firstname"></td>
    </tr>
    
    <tr>
        <td><label for="lastname">Lastname</label></td>
        <td><input  value="<?php echo $lastname; ?>" type="text"size="50"  name="lastname"></td>
    </tr>
    
    <tr>
        <td><label for="mi">MiddleInitial</label></td>
        <td><input  value="<?php echo $middleInitial; ?>" type="text" size="50" name="middleInitial"></td>
    </tr>
    
    <tr>
        <td><label for="age">Age</label></td>
        <td><input  value="<?php echo $age; ?>" type="number"  name="age"></td>
    </tr>
    
    <tr>
        <td><label for="bday">Birthdate</label></td>
        <td><input  value="<?php echo $birthday; ?>" type="date"  name="bday"></td>
    </tr>
    
    <tr>
        <td><label for="address">Address</label></td>
        <td><input  value="<?php echo $address; ?>" type="address" size="50" name="address"></td>
    </tr>
    
    <tr>
        <td><label for="zip">Zipcode</label></td>
        <td><input  value="<?php echo $zipcode; ?>" type="number"  name="zip"></td>
    </tr>
    
    <tr>
        <td><label for="cn">Contact Number</label></td>
        <td><input  value="<?php echo $contact; ?>" type="text"  name="cn"></td>
    </tr>
    
    <tr>
        <td><label for="email">Email</label></td>
        <td><input  value="<?php echo $email; ?>" type="text" size="50" name="email"></td>
    </tr>
    
   <tr>
    <td colspan="2" class="text-center">
        <input class="btn btn-primary" type="submit" name="edit_profile" value="Save">
        <a href="profile.php" class="btn btn-danger" type="button" value="Cancel">Cancel</a>
    </td>
    </tr>
    
    
    </tbody>

</table>
</div>
</form>