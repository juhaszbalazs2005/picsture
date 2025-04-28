<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="au_style.css">
    <title>About us</title>
</head>

<body>
<div class="overlayl"><div class="loader"></div></div>
    <!-- Navigáció-->
        <div class="navbarfelso">
            <h1 data-item='Picsture' id="title">Picsture</h1>
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




    
    <div class="title-text">
          <img src="Images/trust.jpg" alt="trust" class="trust-img">
        <p class="trust-text">
            At Picsture, we believe trust is <br> the cornerstone of everything we do.  <br> 
            We have built a reputation based on <br> transparency, integrity, and accountability. <br>
            Our team works tirelessly to <br>  ensure that our clients and <br>  partners feel confident in every interaction. <br> 
            Trust is not just a word for us; <br> it is a commitment that we honor every day. <br>  
            With us, you can rest assured that your<br>  interests are always our top priority. 
        </p>
          <img src="Images/found.jpg" alt="found" class="found-img">
        <p class="found-text">
            Our story began with a simple yet<br>  powerful idea: to provide innovative <br>  solutions that make a difference. <br> 
            Over the years, we've found success <br>  through hard work, creativity, and <br>  a relentless drive for excellence. <br> 
            What started as a small project has now <br>  evolved into a thriving company that <br>  constantly seeks new ways to solve challenges. <br> 
            Every step of the way, we have <br>  learned and grown, and we are proud of<br>  everything we've found along this journey. 
        </p>
          <img src="Images/ft-gl.jpg" alt="ft-gl" class="ft-gl-img">
        <p class="ft-gl-text">
            Picsture is not just about providing <br> services; it's about creating lasting impact. <br> 
            We strive for greatness in every aspect of our business. <br> 
            From the cutting-edge technologies we<br>  use to the dedicated team behind our projects, <br>  everything is designed to deliver unparalleled quality. <br> 
            We are on a mission to set new standards and redefine what’s possible. <br> 
            With each project, we continue to push<br>  boundaries, break barriers, and shape the future. <br>
            We thrive to change the flaws of social media, <br> with our new technology, Swipejoy.
        </p>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const titles = document.querySelectorAll('.titles a');
            
            const titleTexts = {
                trust: document.querySelector('.trust-text'),
                found: document.querySelector('.found-text'),
                'ft-gl': document.querySelector('.ft-gl-text'),
            };

            function resetOpacity() {
                for (const key in titleTexts) {
                    if (titleTexts[key]) {
                        titleTexts[key].style.opacity = '0.5';
                    }
                }
            }

            function handleClick(event) {
                event.preventDefault();
                const targetClass = event.target.classList[0];
                resetOpacity();
                if (titleTexts[targetClass]) {
                    titleTexts[targetClass].style.opacity = '1';
                }
            }
            titles.forEach(title => {
                title.addEventListener('click', handleClick);
            });
        });
    </script>

    <div class="main-text">
</body>
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
</html>