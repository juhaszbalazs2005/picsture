<?php
           
    session_start();

    if(isset($_GET["u"])){
        $host = "localhost";  
        $user = "kldtkmkm_picstu";;  
        $password = 'TompaNagyTermetuFa#123';  
        $db_name = "kldtkmkm_picstu";  
        
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        } 
    
        $sql = "select * from pictures where puid = '$_GET[u]' and pnev != 'pfp' and pstatus != '2' ORDER BY pdate DESC";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
    
        for($i = 0; $i < $count; $i = $i + 1){
            
            echo "<a class='felhasznalokep'><img src='../uploads/$row[plocation]' alt='$row[pid]' id='img$row[pid]'></a>";
    
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        }
    }
    else if(isset($_GET["likes"])){
        $host = "localhost";  
        $user = "kldtkmkm_picstu";;  
        $password = 'TompaNagyTermetuFa#123';  
        $db_name = "kldtkmkm_picstu";  
        
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        } 
    
        $sql = "select * from likes where llid = '$_SESSION[uid]' ORDER BY lid DESC";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
    
        for($i = 0; $i < $count; $i = $i + 1){
            
            $lpid = $row["lpid"];
            
            $sql = "select * from pictures where pid = '$lpid' ORDER BY pdate DESC";  
            $result2 = mysqli_query($con, $sql);  
            $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);  
            $count2 = mysqli_num_rows($result2);
        
            for($asd = 0; $asd < $count2; $asd = $asd + 1){
                echo "<a class='felhasznalokep'><img src='../uploads/$row2[plocation]' alt='$row2[pid]' id='img$row[pid]'></a>";
                $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC); 
            }
    
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        }
    }else{
        $host = "localhost";  
        $user = "kldtkmkm_picstu";;  
        $password = 'TompaNagyTermetuFa#123';  
        $db_name = "kldtkmkm_picstu";  
        
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        } 
        
        $sql = "select * from pictures where puid = '$_SESSION[uid]' and pnev != 'pfp' and pstatus != '2' ORDER BY pdate DESC";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        
        for($i = 0; $i < $count; $i = $i + 1){
            
            echo "<a class='felhasznalokep'><img src='../uploads/$row[plocation]' alt='$row[pid]' id='img$row[pid]'></a>";
        
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        }
    }
    

?>


<script>

    document.querySelectorAll(".felhasznalokep").forEach(element => {
        element.onclick = async function(){
            
            localStorage.setItem("overlayimg", element.children[0].src);
            localStorage.setItem("overlayimgid", element.children[0].alt);
            localStorage.setItem("overlayShown", true);
        }
    });

</script>

<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>

<style>

img{
    width: 100px;
    height: 100px;
    cursor: pointer;
}

body::-webkit-scrollbar {
    width: 16px;
}

body::-webkit-scrollbar-track {
    border-radius: 8px;
    background-color: rgb(134, 88, 44);
    border: 1px solid #af6a1a;
}

body::-webkit-scrollbar-thumb {
    border-radius: 8px;
  border: 3px solid transparent;
   background-clip: content-box;
    background-color: #af6a1a;
}

</style>