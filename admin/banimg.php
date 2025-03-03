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
        
        if(isset($_POST['srate'])){
            $sql = "UPDATE pictures SET pstatus = '".$_POST['srate']."' WHERE pid = ".$_POST['pid'];
        }else{
            $sql = "UPDATE pictures SET pstatus = '2' WHERE pid = ".$_POST['pid'];
        }
        
        
        $result = mysqli_query($con, $sql);
        header('Location: http://picsture.hu/?p=admin#img'.$_POST['pid']);
    }

?>