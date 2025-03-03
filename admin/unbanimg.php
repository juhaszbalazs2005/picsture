<?php
    
    session_start();

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $requestMethod = $_SERVER["REQUEST_METHOD"]; 
    if ($requestMethod !== 'POST') {
        http_response_code(400);
    }else{ 

        $host = "localhost";  
        $user = "kldtkmkm_picstu";;  
        $password = 'TompaNagyTermetuFa#123';  
        $db_name = "kldtkmkm_picstu";  
        
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        } 
        
        $sql = "UPDATE pictures SET pstatus = '0' WHERE pid = ".$_POST['pid'];
        
        $result = mysqli_query($con, $sql);
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '#img'.$_POST['pid']);
    }

?>