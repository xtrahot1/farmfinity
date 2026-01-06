<?php 
    $host = "sql105.infinityfree.com";
    $username = "if0_40840705";
    $password = "IAHPM5XJGsI";
    $database = "if0_40840705_farmfinity";

	$db = new mysqli($host, $username, $password, $database);

    if($db->connect_error){
        echo $db->connect_error;
    }else{

    }
    ?>
