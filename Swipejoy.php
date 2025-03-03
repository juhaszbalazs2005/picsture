<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Swipejoy_style.css">
    <title>Swipejoy</title>
</head>

<body>


<!-- //Background -->
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>

<!-- //Navbar -->
    <div class="navbarfelso">
        <h1 data-item='Picsture'>Picsture</h1>
        <section>
            <div class="felso_szoveg">Show what you got!</div>
        <nav>
            <ul class="menuItems">
            <li><a href='./' data-item='Home'>Home</a></li>
            <li><a href='./?p=login' data-item='Sign in'>Sign in</a></li>
            <li><a href='./?p=register' data-item='Sign up'>Sign up</a></li>
            <li><a href='./?p=about' data-item='Abouts us'>About us</a></li>
            <li><a href='./?p=contact' data-item='Contact'>Contact</a></li>
            </ul>
        </nav>
        </section>
        </div>





    <p class="szoveg1">Swipejoy is the technology our team created to <br> make user interactioms more enjoyable, and easier. <br> We collected inspiration from across <br> the internet.
        The main idea is to make a <br> social media platform that combines pictures with <br> easy scrolling and less effort for the user.<br> For the rules, do's and not to do's <br>check out our <a href="-" class="guid">Guidelines</a> page.</p>

    <p class="szoveg2">The main concept is to cut short the the liking <br> and dislikeing. <br> By this, you can base your reccomendation easier, <br> making the the process simple, because <br> you only have to make one gesture, <br> either by swiping left or swiping right.
         <br> The team tends to make this updated to the current technologies, <br> and make the user experience as good as possible.</p>

<!--Lefele nyíl-->
    <a href="#helykitolto" id="gotopos">
        <div class="arrow" id="nyil"></div>
    </a>


<!--Lefele-nyíl-script-->
    <script>
        window.onload = function(){
            arrow = document.getElementById("nyil");
            deg = 135;
            const interval = setInterval(function(){
                
                if(window.scrollY > window.innerHeight - 200){
                    if(deg >= -44){
                        deg = deg - 10;
                        arrow.style.transform = `rotate(${deg}deg)`;
                        document.getElementById("gotopos").href = "#title";
                    }
                }else{
                    if(deg <= 134){
                        deg = deg + 10;
                        arrow.style.transform = `rotate(${deg}deg)`;
                        document.getElementById("gotopos").href = "#helykitolto";
                    }
                }
            }, 10);
        }

    </script>

    <!--Képek-->
    <img src="dog.jpg" alt="dog" class="dog">
    <img src="woman1.jpg" alt="woman" class="woman1">
    <img src="food.jpg" alt="kaja" class="food">
    <img src="tenger.jpg" alt="tenger" class="sea">
    <img src="town.jpg" alt="varos" class="town" >
    






<div class="helykitolto" id="helykitolto">
    <p style="visibility: hidden;">lll</p>
</div>

<footer>
    <div class="footer-copyright text-center">&copy; -</i> -
        <a href="https://" class="white-text" target="_blank">Picsture</a>. <a href="https://" target="_blank">Picsture kft. </a>
    </div>
</footer>

</body>
</html>