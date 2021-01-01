    <?php include "includes/db.php";?>
    <?php session_start();?> 
   <?php
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $pass     = $_POST['pass'];

        $username =  mysqli_real_escape_string($connection, $username);
        $pass =  mysqli_real_escape_string($connection, $pass);
        
        $query = "SELECT * FROM member_info WHERE member_username = '{$username}' ";
        $select_user_query = mysqli_query($connection, $query);
        if(!$select_user_query){
            die("QUERY FAILED ". mysqli_error($connection));
        }
        
        while($row = mysqli_fetch_assoc($select_user_query)){
            $db_id = $row['member_id'];
            $db_username = $row['member_username'];
            $db_password = $row['member_password'];
            $db_firstname = $row['member_firstname'];
            $db_lastname = $row['member_lastname']; 
            $db_access = $row['member_access'];
        }
        if($username === $db_username && $pass === $db_password && $db_access == 'on'){
            $_SESSION['id'] = $db_id;
            $_SESSION['username'] = $db_username;
            $_SESSION['firstname'] = $db_firstname;
            $_SESSION['lastname'] = $db_lastname ;
            
            header("Location: dashboard.php");
            
        }else{
            header("Location: login.php");
        }
    
 }
?>




