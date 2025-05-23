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
        print('<link rel="stylesheet" href="Settings_Style.css">');
      }else{
        print('<link rel="stylesheet" href="Settings_Style_Dark.css">');
      }

    ?>
    <title>Picsture - Settings</title>
</head>
<body>
<div class="overlayl"><div class="loader"></div></div>
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

<!-- Kártya 1-->
    <div class="Kartya1">
    <div class="card border-0 three">
        <div class="position-relative">
          <div class="card-img-overlay two"><span class="badge badge-light text-uppercase">FORYOU SETTINGS</span></div>
        </div>
        <div class="card-body two">
          <h5 class="card-title">ForYou Settings</h5>
          <h6 class="card-subtitle mb-2 text-muted">Customize our foryou!</h6>
          <hr>
          <p class="card-text mt-4">At this setting point, you can set the following: <br>- best images <br>- follower images</p>
        </div>
        <div class="card-footer">
          <div class="media align-items-center">
            <div class="media-body card-link text-primary read-more"><button style="border: none;" id="Kartya_Settings_Togglebtn" onclick="showForYouSettings()">Go to settings</button></div>
            <div class="footerright">
              <div class="tnlink3"><i class="fas fa-heart"></i></div>
              <div class="tnlink3"><i class="fas fa-share-nodes"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>        

<!-- Kártya 2-->
    <div class="Kartya2">
      <div class="card text-center border-0 mb-4">
        <div class="card-cup bg-primary"></div>
        <div class="card-body proavatar">
          <div class="card-avatar avatar-border mt-n5">
            <rect width="100%" height="100%" fill="#495057"></rect>
          </div>
          <h5 class="card-title text-primary mb-1">Profil settings</h5>
          <div class="text-muted">Edit your profile!</div>
        </div><br>
        <div class="card-footer card-footer two">
          <div class="media-body card-link text-primary read-more"><button style="border: none;" id="Kartya_Settings_Togglebtn" onclick="showProfilSettings()">Go to settings</button></div>
          <div class="media-body card-link text-primary read-more"><a href="http://picsture.hu/?p=admin"><button style="border: none;" id="Kartya_Settings_Togglebtn">Admin panel</button></a></div>
        </div>
      </div>
    </div>

<!-- Kártya 3-->
    <div class="Kartya3">
      <div class="card border-0 three">
        <div class="position-relative">
          <div class="card-img-overlay two"><span class="badge badge-light text-uppercase">APPEARANCE</span></div>
        </div>
        <div class="card-body two">
          <h5 class="card-title">Appearance</h5>
          <h6 class="card-subtitle mb-2 text-muted">Customize our page!</h6>
          <hr>
          <p class="card-text mt-4">At this setting point, you can set the following:<br> - Wallpaper animations<br> - black/white mode</p>
        </div>
        <div class="card-footer">
          <div class="media align-items-center">
            <div class="media-body card-link text-primary read-more"><button style="border: none;" id="Kartya_Settings_Togglebtn" onclick="showSettings()">Go to settings</button></div>
            <div class="footerright">
              <div class="tnlink3"><i class="fas fa-heart"></i></div>
              <div class="tnlink3"><i class="fas fa-share-nodes"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>



<div id="Kartya_Settings">
  <h5 class="Appearance_settings">Appearance settings</h5>
  <label class="lns-checkbox">
    <input type="checkbox" id="stopbganim">
    <span>Stop background animations</span>
  </label><br>
  <label class="lns-checkbox ml-2">
    <input type="checkbox" id="toggledarkmode">
    <span>Dark mode</span>
  </label><br>
</div>


<div id="Profil_Settings">
<form action="rendszerek/profilesettings.php" method="post">
  <h5 class="Appearance_settings">Profil Settings</h5>
  <div class="group">
    <br>
    <input type="text" name="newname">
    <span class="highlight"></span>
    <span class="bar"></span>
    <label class="inputstyle"><b>New name</b></label>
  </div>
  <div class="media-body card-link text-primary read-more" style="width: 150px; margin: auto;">
    <button type="submit" style="border: none;">Save settings</button>
  </div>
  <div class="group"> 
    <br>     
    <input type="text" name="password">
    <span class="highlight"></span>
    <span class="bar"></span>
    <label class="inputstyle"><b>Password</b></label>
  </div>
  <div class="group"> 
    <br>     
    <input type="text" name="newpassword">
    <span class="highlight"></span>
    <span class="bar"></span>
    <label class="inputstyle"><b>New Password</b></label>
  </div>
	</form>

</div>

<script>

  function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

  if(getCookie("animatedbg") == "true" || getCookie("animatedbg") == "1"){
    document.getElementById("stopbganim").checked = false;
  }else{
    document.getElementById("stopbganim").checked = true;
  }
  

  document.getElementById("stopbganim").onclick = function(){
    if(document.getElementById("stopbganim").checked){
      document.cookie = "animatedbg=false; path=/";
      setCookie("error", "!Setting saved!", 1);
      location.href = 'Location: ./?p=settings'; 
    }else{
      document.cookie = "animatedbg=true; path=/";
      setCookie("error", "!Setting saved!", 1);
      location.href = 'Location: ./?p=settings'; 
    }
    location.reload();
  }

  if(getCookie("darkmode") == "false" || getCookie("darkmode") == "0"){
    document.getElementById("toggledarkmode").checked = false;
  }else{
    document.getElementById("toggledarkmode").checked = true;
  }
  

  document.getElementById("toggledarkmode").onclick = function(){
    if(!document.getElementById("toggledarkmode").checked){
      document.cookie = "darkmode=false; path=/";
      setCookie("error", "!Setting saved!", 1);
      location.href = 'Location: ./?p=settings'; 
    }else{
      document.cookie = "darkmode=true; path=/";
      setCookie("error", "!Setting saved!", 1);
      location.href = 'Location: ./?p=settings'; 
    }
    location.reload();
  }

</script>

<div id="ForYou_Settings">
  <h5 class="Appearance_settings">ForYou Settings</h5>
  <label class="lns-checkbox">
    <input type="checkbox">
    <span>Best pictures</span>
  </label><br>
    <label class="lns-checkbox">
    <input type="checkbox">
    <span>Followers pictures</span>
  </label
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