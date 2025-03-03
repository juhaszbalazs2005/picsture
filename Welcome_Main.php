<?php

    if(!isset($_SESSION["uid"])){
        header('Location: ./');
    }
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php

      if($_COOKIE["darkmode"] == "false"){
        print('<link rel="stylesheet" href="Welcome_Style.css">');
      }else{
        print('<link rel="stylesheet" href="Welcome_Style_Dark.css">');
      }

    ?>
    <title>Picsture - Welcome!</title>
</head>
<body>
    
<?php

    if($_SERVER["HTTP_REFERER"] != "http://picsture.hu/?p=main"){
        echo '<div class="overlayl"><div class="loader"></div></div>';
    }
  
  
?>
<!-- //Background -->
<?php

if($_COOKIE["animatedbg"] == "false"){
  print('<div>
          <div class="wave" style="animation: none"></div>
          <div class="wave" style="animation: none"></div>
          <div class="wave" style="animation: none"></div>
        </div>');
}else{
  print('<div>
          <div class="wave"></div>
          <div class="wave"></div>
          <div class="wave"></div>
        </div>');
}

?>


<!-- //Képkeret -->
 <div id="frame">
  <?php

  $host = "localhost";  
  $user = "kldtkmkm_picstu";;  
  $password = 'TompaNagyTermetuFa#123';  
  $db_name = "kldtkmkm_picstu";  
  
  $con = mysqli_connect($host, $user, $password, $db_name);  
  if(mysqli_connect_errno()) {  
      die("Failed to connect with MySQL: ". mysqli_connect_error());  
  } 

  $puid = $row["puid"];
  $sql = "
  SELECT * from user WHERE uid = $puid 
  ";  
  $result = mysqli_query($con, $sql);  
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
  $count = mysqli_num_rows($result);

  $sql = "
  SELECT *
  FROM pictures INNER JOIN user ON user.uid = pictures.puid
  WHERE NOT EXISTS (SELECT 1 FROM dislikes WHERE dislikes.ddid = $_SESSION[uid] and dislikes.dpid = pictures.pid)
    AND NOT EXISTS (SELECT 1 FROM likes WHERE likes.llid = $_SESSION[uid] and likes.lpid = pictures.pid)
    AND pictures.puid != $_SESSION[uid] AND pictures.pnev != 'pfp' AND pictures.pstatus != '2'
    AND user.ustatus != '2'
  ORDER BY RAND()
  LIMIT 1;
  ";  
  $result = mysqli_query($con, $sql);  
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
  $count = mysqli_num_rows($result);
  
  if ($count != 0){
    echo "<img src='uploads/$row[plocation]'><h1>".$row[pnev]."</h1>";
  }else{
    echo "<h1>There is no picture to load</h1>";
  }
  
  $pid = $row["pid"];
  $puid = $row["puid"];

  ?>
  </div>

<!-- //Like/Dislike -->
<div class="container">
  <div class="Like">
    <form action="rendszerek/likeordislike.php" method="post">

      <input type="text" hidden value=<?php echo "$row[pid]"?> name="pid">
      <input type="text" hidden value="Like" name="ivalue">
      <button type="submit"><div class="btn"><a>🤍</a></div></button>
        
      <p><?php 

    if(isset($pid)){
      $sql = "
      SELECT *
      FROM likes
      WHERE lpid = $pid;
      ";  
      $result = mysqli_query($con, $sql);  
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
      $count = mysqli_num_rows($result);
      
      echo "   $count";
    }
    else{
      echo "   0";
    }
    
    ?></p>
        
    </form>
    
  </div>

  <div class="DisLike">
    <form action="rendszerek/likeordislike.php" method="post">

    <input type="text" hidden value=<?php echo "$pid"?> name="pid">
    <input type="text" hidden value="Dislike" name="ivalue">
    <button type="submit"><div class="btn"><a>🤍</a></div></button>

    <p><?php 

    if(isset($pid)){
      $sql = "
      SELECT *
      FROM dislikes
      WHERE dpid = $pid;
      ";  
      $result = mysqli_query($con, $sql);  
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
      $count = mysqli_num_rows($result);
      
      echo "   $count";
    }
    else{
      echo "   0";
    }
    
    ?></p>

    </form>
  </div>
  <div id="user">
    <a href=<?php echo "?p=profile&u=$puid"?>>
        
    <?php
        $picloc = "";
        $uname = "";
        if(isset($puid)){
            $host = "localhost";  
            $user = "kldtkmkm_picstu";;  
            $password = 'TompaNagyTermetuFa#123';  
            $db_name = "kldtkmkm_picstu";  
            
            $con = mysqli_connect($host, $user, $password, $db_name);  
            if(mysqli_connect_errno()) {  
                die("Failed to connect with MySQL: ". mysqli_connect_error());  
            } 
        
            $sql = "select * from pictures where puid = '$puid' and pnev = 'pfp' ORDER BY pdate DESC";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);
        
            for($i = 0; $i < $count; $i = $i + 1){

                $picloc = $row['plocation'];
                echo "<img src='uploads/$row[plocation]' alt='' id='pfp'>";
                break;
            }
            
            $sql = "select * from user where uid = '$puid'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);
        
            for($i = 0; $i < $count; $i = $i + 1){

                $uname = $row['unick'];
                break;
            }
            echo "<h2>".$unick."</h2>";
        }
        if($picloc == ""){
            $host = "localhost";  
            $user = "kldtkmkm_picstu";;  
            $password = 'TompaNagyTermetuFa#123';  
            $db_name = "kldtkmkm_picstu";  
            
            $con = mysqli_connect($host, $user, $password, $db_name);  
            if(mysqli_connect_errno()) {  
                die("Failed to connect with MySQL: ". mysqli_connect_error());  
            }
            $sql = "select * from user where uid = '$puid'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);
        
            for($i = 0; $i < $count; $i = $i + 1){

                $uname = $row['unick'];
                break;
            }
            echo "<img src='Images/avatar.png' alt='' id='pfp'><h2>".$row['unick']."</h2>";
        }
        
    
    ?>
        
    </a>
  </div>


</div>	



<!-- //Alsómenü -->
 <div class="wrapper">

  <a href="./?p=main">
  <button class="Button_Home">
    <?php

      if($_COOKIE["darkmode"] == "false"){
        print('<img src="Images/home.png" alt="Home" width="35px" height="35px">');
      }else{
        print('<img src="Images_Dark/home.png" alt="Home" width="35px" height="35px">');
      }

    ?>
  </button>
  </a>

  <a href="./?p=upload">
  <button class="Button_Photo">
  <?php

if($_COOKIE["darkmode"] == "false"){
  print('<img src="Images/photo.png" alt="Home" width="35px" height="35px">');
}else{
  print('<img src="Images_Dark/photo.png" alt="Home" width="35px" height="35px">');
}

?>
  </button>
  </a>
  <button class="item add">
    <div class="circle">
      <div class="close">
      <div class="line line1"></div>
      <div class="line line2"></div>
    </div>
    </div>
    <input type="search" class="search" />
</button>
  <a href="./?p=profile">
  <button class="Button_User">
  <?php

if($_COOKIE["darkmode"] == "false"){
  print('<img src="Images/user.png" alt="Home" width="35px" height="35px">');
}else{
  print('<img src="Images_Dark/user.png" alt="Home" width="35px" height="35px">');
}

?>
  </button>
  </a>

  <a href="./?p=settings">
  <button class="Button_Settings">
  <?php

if($_COOKIE["darkmode"] == "false"){
  print('<img src="Images/settings.png" alt="Home" width="35px" height="35px">');
}else{
  print('<img src="Images_Dark/settings.png" alt="Home" width="35px" height="35px">');
}

?>
  </button>
  </a>
    <div class="nav-items items1">
      <i class="fas fa-home">Vlm</i>
    </div>
    <div class="nav-items items2">
      <i class="fas fa-camera">Vlm</i>
    </div>
    <div class="nav-items items3">
      <i class="fas fa-folder">Vlm</i>
    </div>
    <div class="nav-items items4">
      <i class="fas fa-heart">Vlm</i>
    </div>
    <div class="box">
      <div class="box-line box-line1">Vlm</div>
      <div class="box-line box-line2">Vlm</div>
      <div class="box-line box-line3">Vlm</div>
      <div class="box-line box-line4">Vlm</div>
    </div>
  </div>
  <div class="effect"></div>




























<!-- //Script -->
  <script src="Welcome_script.js"></script>
  
  <!--LOADER-->
<style>
.overlayl {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 125, 19, 0.986);
  z-index: 10000;
  animation: fadeOutOverlay 2s ease-out forwards;
}

.loader {
  --w: 10ch;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-weight: bold;
  font-family: monospace;
  font-size: 80px;
  letter-spacing: var(--w);
  width: var(--w);
  overflow: hidden;
  white-space: nowrap;
  color: #0000;
  animation: l40 2s infinite;
  z-index: 11000;
}

.loader:before {
  content: ".Picsture.";
}

@keyframes fadeOutOverlay {
  0% {
    opacity: 1;
  }
  99% {
    opacity: 0;
  }
  100% {
    opacity: 0;
    display: none;
  }
}

@keyframes l40 {
  0%, 100% {
    text-shadow: 
      calc( 0 * var(--w)) 0 #000,
      calc(-1 * var(--w)) 0 #000,
      calc(-2 * var(--w)) 0 #000,
      calc(-3 * var(--w)) 0 #000,
      calc(-4 * var(--w)) 0 #000,
      calc(-5 * var(--w)) 0 #000,
      calc(-6 * var(--w)) 0 #000,
      calc(-7 * var(--w)) 0 #000;
  }
  9% {
    text-shadow: 
      calc( 0 * var(--w)) 0 #000,
      calc(-1 * var(--w)) 0 #000,
      calc(-2 * var(--w)) -20px #0000,
      calc(-3 * var(--w)) 0 #000,
      calc(-4 * var(--w)) 0 #000;
  }
}
</style>
</body>
</html>