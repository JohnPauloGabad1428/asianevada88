<?php
/*******************************************************************************************
                            QUERY RESULTS
*******************************************************************************************/

    function confirm($result){
        if(!$result) {
            global $connection;
            die("QUERY FAILED ." . mysqli_error($connection));
        }
    }

/*******************************************************************************************
                           GETTING PACKAGE IN MEMBER INFO (earning commission)
*******************************************************************************************/
    function getpackage($x){
        global $connection;
        $query = "SELECT package_id FROM member_info WHERE member_id = {$x}";
        $query_get = mysqli_query($connection, $query);
        confirm($query_get);
        
        $row = mysqli_fetch_assoc($query_get);
        
        $x = $row['package_id'];
        return $x;
    }
/*******************************************************************************************
                           CONVERT DESTINATION CODE TO DETINATION NUMBER
*******************************************************************************************/
    function destinationcodetoid($x){
        $CAPITALLETTER =strtoupper($x);
        global $connection;
        $query = "SELECT destination_id FROM destination WHERE destination_code = '{$CAPITALLETTER}'";
        $query_get = mysqli_query($connection, $query);
        confirm($query_get);
        $row = mysqli_fetch_assoc($query_get);
        
        $x = $row['destination_id'];
        return $x;
    }

/*******************************************************************************************
                           CONVERT DESTINATION NUMBER TO DETINATION CODE
*******************************************************************************************/
        function destinationidtocode($x){
        global $connection;
        $query = "SELECT destination_code FROM destination WHERE destination_id = '{$x}'";
        $query_get = mysqli_query($connection, $query);
        confirm($query_get);
        $row = mysqli_fetch_assoc($query_get);
        
        $x = $row['destination_code'];
        return $x;
    }

/*******************************************************************************************
                           CONVERT owrt type TO owrt id
*******************************************************************************************/
      function owrttoid($x){
        $lower =strtolower($x);
        global $connection;
        $query = "SELECT id FROM owrt WHERE type = '{$lower}'";
        $query_get = mysqli_query($connection, $query);
        confirm($query_get);
        $row = mysqli_fetch_assoc($query_get);
        
        $x = $row['id'];
        return $x;
    }

/*******************************************************************************************
                           CONVERT owrt id TO owrt type
*******************************************************************************************/
      function owrttotype($x){
        global $connection;
        $query = "SELECT type FROM owrt WHERE id = '{$x}'";
        $query_get = mysqli_query($connection, $query);
        confirm($query_get);
        $row = mysqli_fetch_assoc($query_get);
        
        $x = $row['type'];
        return $x;
    }


/*******************************************************************************************
                           GENERATE ID to Name
*******************************************************************************************/

    function generateIdtoname($x){
        global $connection;
        $query = "SELECT member_firstname, member_lastname FROM member_info WHERE member_id = {$x}";
         $query_get = mysqli_query($connection, $query);
        confirm($query_get);
        $row = mysqli_fetch_assoc($query_get);
        
        $f = $row['member_firstname'];
        $l = $row['member_lastname'];
        $x = $f . " " . $l;
        
        return $x;
    }


/*******************************************************************************************
                           GENERATE sponsor ID to MemberID
*******************************************************************************************/

    function generateSponsorName($x){
        global $connection;
        $query = "SELECT member_info.member_firstname, member_info.member_lastname FROM member_info RIGHT JOIN sponsored ON member_info.member_id = '{$x}'";
        $query_get = mysqli_query($connection, $query);
        confirm($query_get);
        $row = mysqli_fetch_assoc($query_get);
        
        $f = $row['member_firstname'];
        $l = $row['member_lastname'];
        $x = $f . " " . $l;
        
        return $x;
    }
?>