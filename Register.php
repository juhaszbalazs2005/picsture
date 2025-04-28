<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register_style.css">
    <title>Picsture - Login/Register</title>
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
<!-- //Footer -->
<footer>
	<div class="footer-copyright text-center">&copy; -</i> -
	  <a href="https://" class="white-text" target="_blank">Picsture</a>. <a href="https://" target="_blank">Picsture kft. </a>
	</div>
</footer>

<!-- //Regisztráció/login -->	
<div class="Panel">
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="./rendszerek/authreg.php" method="post">
				<h2>Create Account</h2>
				<input type="text" placeholder="Name" min="4" name="nameregister"/>
				<input type="email" placeholder="Email" min="4" name="emailregister"/>
				<input type="password" placeholder="Password" min="4" name="passwordregister"/>
				<button type="submit">Sign Up</button>
				<br>
				<a id="signIn2" type="none">Sign In</a>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="./rendszerek/auth.php" method="post">
				<h2>Sign in</h2>
				<input type="email" placeholder="Email" min="4" name="emaillogin" />
				<input type="password" placeholder="Password" min="4" name="passwordlogin"/>
				<a href="#">Forgot your password?</a>
				<button type="submit">Sign In</button>
				<br>
				<a id="signUp2" type="none">Sign Up</a>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h2>Welcome Back!</h2>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h2>Hello, Friend!</h2>
					<p>Enter your personal details and start journey with us</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- //Script -->
<script src="Register_script.js"></script>
</body>
</html>
    <style>
.overlayl {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 125, 19, 0.986);
  z-index: 1000;
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
  z-index: 1100;
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