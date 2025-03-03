<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact_style.css">
    <title>Contact</title>
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
                <li><a href='./?p=login' data-item='Sign in'><b>Sign in</b></a></li>
                <li><a href='./?p=about' data-item='About us'>About us</a></li>
                <li><a href='./?p=contact' data-item='Contact'>Contact</a></li>
                </ul>
            </nav>
        </section>
    </div>
    <!-- //Background -->
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
    <footer>
        <div class="footer-copyright text-center">&copy; -</i> -
          <a href="https://" class="white-text" target="_blank">Picsture</a>. <a href="https://" target="_blank">Picsture kft. </a>
        </div>
    </footer>

    <div class="Panel">
        <div class="container" id="container">
            <div class="form-container sign-in-container">
                <form action="#">
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <h2>Contact us!</h2>
                    
                    <span>Please write down theese deatails:</span>
                    <input type="Email" placeholder="Email" />
                    <input type="Full Name" placeholder="Fullname" />
                    <input type="Phone Number" placeholder="phone" />
                    <a href="#">Cant send a massege?</a>
                    <button>Send</button>
                </form>
            </div>
        </div>
    </div>

    <section class="form-bg"></section>

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
</body>
</html>