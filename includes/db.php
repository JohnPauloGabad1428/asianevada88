<?php
$db['db_host'] = "localhost";
$db['db_user'] = "asianevadastaff";
$db['db_pass'] = "august82017";
$db['db_name'] = "an88";
/************************************
        Loop for an ARRAY
*************************************/
foreach($db as $key => $value){
    
    define(strtoupper($key), $value);
    
}
/************************************
        to connect into database
*************************************/
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
/*if($connection){
    
    echo "we are connected yey";
    
}*/






?>