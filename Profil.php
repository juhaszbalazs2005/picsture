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
        include('Profil_Style.php');
      }else{
        include('Profil_Style_Dark.php');
      }

    ?>
    <title>Picsture - Profil</title>
</head>
<body>
    
<?php

    if($_SERVER["HTTP_REFERER"] != "http://picsture.hu/?p=profile" && $_SERVER["HTTP_REFERER"] != "http://picsture.hu/?p=profile&likes=1"){
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


<!-- Kártyák-->
    <div class="card-columns">

<!-- Kártya 2-->
    <div class="Kartya2">
      <div class="card text-center border-0 mb-4">
        <div class="card-cup bg-primary"></div>
        <div class="card-body proavatar">
          <div class="card-avatar avatar-border mt-n5">
            <rect width="100%" height="100%" fill="#495057"></rect>
          </div>
          <?php
          
            if(!isset($_GET["u"])){
              echo '<a href="./?p=editprofilepicture" id="editprofilepicturebtn">
              <button class="Button_Editprofilepicture">
                <img src="Images/editprofilepicture.png" alt="Editprofilepicture" width="35px" height="35px">
              </button>
              </a>
              <a href="./?p=logout" id="logoutbtn">
              <button class="Button_Logout">
                <img src="Images/logout.png" alt="Logout" width="35px" height="35px">
              </button>
              </a>';
            }else{
              $userid = $_GET["u"];
              
              $host = "localhost";  
              $user = "kldtkmkm_picstu";;  
              $password = 'TompaNagyTermetuFa#123';  
              $db_name = "kldtkmkm_picstu";  
              
              $con = mysqli_connect($host, $user, $password, $db_name);  
              if(mysqli_connect_errno()) {  
                  die("Failed to connect with MySQL: ". mysqli_connect_error());  
              } 
            
              $sql = "
              SELECT * FROM followers WHERE fuid = $userid AND ffid = $_SESSION[uid]
              ";  
              $result = mysqli_query($con, $sql);
              $count = mysqli_num_rows($result);
            
              if ($count == 1){
                $btntype = "Unfollow";
              }else{
                $btntype = "Follow";
              }
              echo '<form action="rendszerek/followuser.php" method="post"><a id="unfollowbtn">
              <button class="Button_Unfollow">
                <input type="text" hidden value="9999999999999999999999999999999999999999999999" name="pid">
                <input type="text" hidden value='. $userid .' name="puid">
                <img src="Images/'. $btntype .'.png" alt="'. $btntype .'" width="35px" height="35px">
              </button>
              </a></form>';
            }

          ?>
          
          <h5 class="card-title text-primary mb-1"><?php
          
          if(isset($_GET["u"])){
            $host = "localhost";  
            $user = "kldtkmkm_picstu";;  
            $password = 'TompaNagyTermetuFa#123';  
            $db_name = "kldtkmkm_picstu";  
            
            $con = mysqli_connect($host, $user, $password, $db_name);  
            if(mysqli_connect_errno()) {  
                die("Failed to connect with MySQL: ". mysqli_connect_error());  
            } 
        
            $sql = "select * from user where uid = '$_GET[u]'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);
        
            for($i = 0; $i < $count; $i = $i + 1){
                
                echo "$row[unick]";
        
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
            }
          }else{
            echo $_SESSION["uname"];
          } 
          
          
          ?></h5>
          <div class="Kovetokszama"><p>Followers count</p></div>   <!-- Követőid száma--> <div class="Kovetokszama_szam">
          <?php
          
          $host = "localhost";  
          $user = "kldtkmkm_picstu";;  
          $password = 'TompaNagyTermetuFa#123';  
          $db_name = "kldtkmkm_picstu";  
          
          $con = mysqli_connect($host, $user, $password, $db_name);  
          if(mysqli_connect_errno()) {  
              die("Failed to connect with MySQL: ". mysqli_connect_error());  
          } 

          if(isset($_GET["u"])){
            $sql = "select * from followers where fuid = '$_GET[u]'";
          }else{
            $sql = "select * from followers where fuid = '$_SESSION[uid]'";
          } 
          $result = mysqli_query($con, $sql);  
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
          $count = mysqli_num_rows($result);
          echo $count;
          
          ?>
          </div>
          <div class="Kepekszama"><p>Pictures count</p></div>       <!-- Képeid száma--> <div class="Kepekszama_szam"><?php
          
          $host = "localhost";  
          $user = "kldtkmkm_picstu";;  
          $password = 'TompaNagyTermetuFa#123';  
          $db_name = "kldtkmkm_picstu";  
          
          $con = mysqli_connect($host, $user, $password, $db_name);  
          if(mysqli_connect_errno()) {  
              die("Failed to connect with MySQL: ". mysqli_connect_error());  
          } 

          if(isset($_GET["u"])){
            $sql = "select * from pictures where puid = '$_GET[u]' and pnev != 'pfp' ORDER BY pdate DESC";
          }else{
            $sql = "select * from pictures where puid = '$_SESSION[uid]' and pnev != 'pfp' ORDER BY pdate DESC";  
          } 
          $result = mysqli_query($con, $sql);  
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
          $count = mysqli_num_rows($result);
          echo $count;
          
          ?></div>
        </div><br>
      </div>
    </div>
  </div>

  <script>
    function createOverlay() {
      if(document.querySelectorAll(".overlay").length == 0){
        const overlay = document.createElement('div');

        overlay.classList.add("overlay");

        overlay.style.position = 'fixed';
        overlay.style.top = '0';
        overlay.style.left = '0';
        overlay.style.width = '100vw';
        overlay.style.height = '100vh';
        overlay.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
        overlay.style.alignItems = 'center';
        overlay.style.justifyContent = 'center';
        overlay.style.zIndex = '9999';

        const img = document.createElement('img');
        img.src = localStorage.getItem('overlayimg');
        img.id = "overlaykepmegjelenitve";
        img.alt = localStorage.getItem('overlayimgid');
        img.style.width = 'inherit';
        img.style.maxWidth = '720px';
        img.style.maxHeight = '720px';
        

        overlay.appendChild(img);
        
        const details = document.createElement('div');
        details.style.display = "flex";
        details.style.justifyContent = "space-between";
        details.style.paddingInline = "5%";
        
        fetch("http://picsture.hu/api/getimgdislikes.php?pid="+localStorage.getItem('overlayimgid'))
          .then((response) => response.text())
          .then((text) => {dislike = text
              const dislikes = document.createElement('p');
            dislikes.innerText = dislike + " Dislikes"
            dislikes.id="dislikesofpic";
            details.appendChild(dislikes);
          })
        
        
        setTimeout(() => {
        fetch("http://picsture.hu/api/getimgtitle.php?pid="+localStorage.getItem('overlayimgid'))
          .then((response) => response.text())
          .then((text) => {dislike = text
              const dislikes = document.createElement('p');
            dislikes.innerText = dislike + ""
            dislikes.id="titleofpic";
            details.appendChild(dislikes);
          })
        }, 10)
        
        setTimeout(() => {
        fetch("http://picsture.hu/api/getimglikes.php?pid="+localStorage.getItem('overlayimgid'))
          .then((response) => response.text())
          .then((text) => {like = text
              const likes = document.createElement('p');
            likes.innerText = like + " Likes"
            likes.id="likesofpic";
            
            details.appendChild(likes);
          })}, 15)
        

        overlay.appendChild(details);
        document.body.appendChild(overlay);


        overlay.addEventListener('click', () => {
          overlay.remove();
          localStorage.setItem('overlayShown', false);
        });
      }
      
    }

    function checkLocalStorage() {
      const value = localStorage.getItem('overlayShown');

      if (value === 'true') {
        createOverlay();
      }
    }

    setInterval(checkLocalStorage, 100);
  </script>

    
      
      
      
    <?php
    if(!isset($_GET["u"])){
        echo '
        
        <div id="likeorprofile">
            <a href="http://picsture.hu/?p=profile">Profil</a>
            <a href="http://picsture.hu/?p=profile&likes=1">Likeoltak</a>
        </div>
        
        ';
    }
    
    ?>

  <div id="kepek">
      <iframe src=<?php
      if(isset($_GET["u"])){
        echo "rendszerek/Profil_Kepek.php?u=$_GET[u]";
      }else if(isset($_GET["likes"])){
        echo "rendszerek/Profil_Kepek.php?likes=1";
      }else{
        echo "rendszerek/Profil_Kepek.php";
      }
      
      
      ?> frameborder="0" id="kepekiframe"></iframe>
  </div>

</div>
</div>


<!-- //Script -->
<script src="Settings_script.js"></script>
    <style>
.overlayl {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 125, 19, 0.986);
  z-index: 2;
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
  z-index: 3;
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