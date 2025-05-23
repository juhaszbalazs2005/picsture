<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Main_style.css">
    <title>Picsture - Main page</title>
</head>
<body>
<div class="overlayl"><div class="loader"></div></div>
<!-- //Navbar -->
    <div class="navbarfelso">
    <h1 data-item='Picsture'>Picsture</h1>
    <section>
        <div class="felso_szoveg">Show what you got!</div>
    <nav>
        <ul class="menuItems">
        <li><a href='./' data-item='Home'>Home</a></li>
        <li><a href='./?p=login' data-item='Sign in'>Sign in</a></li>
        <li><a href='./?p=about' data-item='Abouts us'>About us</a></li>
        <li><a href='./?p=contact' data-item='Contact'>Contact</a></li>
        </ul>
    </nav>
    </section>
    </div>

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
     <div id="palya">

        

        <figure class="circle" id="golyod"></figure>
        <script>
          document.querySelector(".circle").style.left = "500px";
          document.querySelector(".circle").style.bottom = "55px";
          document.querySelector(".circle").style.background = `radial-gradient(circle at 0px 0px, #e4cce6, #d2bcd4)`;
        </script>
        <div class="like">
            <input type="checkbox" id="liked"><label for="liked"><img src="heart.png" alt="" class="liked" width="60px"></label>
        </div>
        <div class="like2">
            <input type="checkbox" id="liked2"><label for="liked2"><img src="heart.png" alt="" class="liked2" width="60px"></label>
        </div>

    </div>


<!-- //Galléria -->
<div class="gallery">
  <img src="https://picsum.photos/id/1040/300/300" alt="a house on a mountain">
  <img src="https://picsum.photos/id/106/300/300" alt="sime pink flowers">
  <img src="https://picsum.photos/id/136/300/300" alt="big rocks with some trees">
  <img src="https://picsum.photos/id/110/300/300" alt="a cool landscape">
</div>


<!-- //Szövegek -->
      <div class="Alszoveg_felso1">
        <h2>Information</h2>
      </div>
      <div class="Alszoveg_also1">
        <p>This site is designed to share your images with the world.</p>
        <p>Here your images can reach thousands of users!</p>
        <p>Manage a community, easily.</p>
        <p>Art, food, stories and news in one place.</p>
        <p>Discover and develop your artistic skills.</p>
        <p>Just one click and millions of people </p>
        <p>around the world can discover your talent!</p>
      </div>
      <div class="Alszoveg_felso2">
        <h2>Registration</h2>
      </div>
      <div class="Alszoveg_also2">
        <p>You can be on the site with a simple process,</p>
        <p>just click the registration button,</p> 
        <p>fill in some information,</p>
        <p>and manage your profile however you want!</p>
      </div>
      <div class="Alszoveg_felso3">
        <h2>Censorship</h2>
      </div>
      <div class="Alszoveg_also3">
        <p>The operators and moderators of our website</p>
        <p>pay special attention to ensuring that all published</p>
        <p>content complies with our family-friendly guidelines.</p>
        <p>suitable for all ages. To this end, westrictly </p>
        <p>check the uploaded images. The content control required for this</p>
        <p> is carried out jointly by an advanced, automatic filtering</p>
        <p>system and our experienced staff.</p>
      </div>


<!-- //Gomb -->
      <div class="gomb_also">
        <a href="./?p=register" class="button type--A">
          <div class="button__line"></div>
          <div class="button__line"></div>
          <span class="button__text">REGISTRATION</span>
          <div class="button__drow1"></div>
          <div class="button__drow2"></div>
      </div>


<!-- //Footer -->
      <footer>
        <div class="footer-copyright text-center">&copy; -</i> -
          <a href="https://" class="white-text" target="_blank">Picsture</a>. <a href="https://" target="_blank">Picsture kft. </a>
        </div>
      </footer>
</body>
</html>
<script src="gomb.js"></script>
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