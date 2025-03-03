<?php
           
    session_start();

    if(isset($_GET["pid"])){
        $host = "localhost";  
        $user = "kldtkmkm_picstu";;  
        $password = 'TompaNagyTermetuFa#123';  
        $db_name = "kldtkmkm_picstu";  
        
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        } 
    
        $sql = "select COUNT(lpid) as number from likes where lpid = $_GET[pid]";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
    
        echo "$row[number]";
    }
    else{
        echo "Not enough datas given to the request";
    }
    

?>