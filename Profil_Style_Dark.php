<style>
    
    body {
    margin: auto;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    overflow: hidden;
    left: 4%;
    right: 4%;
    width: 92%;
    background: linear-gradient(315deg, rgb(255, 136, 0) 3%, rgba(255, 136, 0, 0.911) 38%, rgba(255, 51, 0, 0.795) 68%, rgba(255, 123, 0, 0.582) 98%);
    animation: gradient 15s ease infinite;
    background-size: 400% 400%;
    background-attachment: fixed;
}
.wave {
    background: rgba(0, 0, 0, 0.25);
    border-radius: 1000% 1000% 0 0;
    position: fixed;
    width: 200%;
    height: 12em;
    animation: wave 10s -3s linear infinite;
    transform: translate3d(0, 0, 0);
    opacity: 0.8;
    bottom: 0;
    left: 0;
    z-index: -1;
}

.wave:nth-of-type(2) {
    bottom: -1.25em;
    animation: wave 18s linear reverse infinite;
    opacity: 0.8;
}

.wave:nth-of-type(3) {
    bottom: -2.5em;
    animation: wave 20s -1s reverse infinite;
    opacity: 0.9;
}

@keyframes wave {
    2% {
        transform: translateX(1);
    }

    25% {
        transform: translateX(-25%);
    }

    50% {
        transform: translateX(-50%);
    }

    75% {
        transform: translateX(-25%);
    }

    100% {
        transform: translateX(1);
    }
}





.wrapper {
    width: 90%;
    border-radius: 50px;
    height: 120px;
    background: rgb(41, 41, 41);
    box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.281);
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    z-index: 5;
    position: absolute;
    bottom: -40px;
    left: 5.7%;
  }

  .wrapper a button {
    cursor: pointer;
  }

  .Button_Home{
    width: 50px;
    height: 50px;
    background-color: transparent;
    border-color: transparent;
    box-shadow: 0 15px 15px rgba(0, 0, 0, 0.3);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 30px;
  }
  .Button_Editprofilepicture{
    width: 50px;
    height: 50px;
    background-color: transparent;
    border-color: transparent;
    box-shadow: 0 15px 15px rgba(0, 0, 0, 0.3);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 30px;
  }
  .Button_Logout{
    width: 50px;
    height: 50px;
    background-color: transparent;
    border-color: transparent;
    box-shadow: 0 15px 15px rgba(0, 0, 0, 0.3);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 30px;
  }
  .Button_Unfollow{
    width: 50px;
    height: 50px;
    background-color: transparent;
    border-color: transparent;
    box-shadow: 0 15px 15px rgba(0, 0, 0, 0.3);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 30px;
  }
  .Button_Photo{
    width: 50px;
    height: 50px;
    background-color: transparent;
    border-color: transparent;
    box-shadow: 0 15px 15px rgba(0, 0, 0, 0.3);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 30px;
  }
  .Button_Settings{
    width: 50px;
    height: 50px;
    background-color: transparent;
    border-color: transparent;
    box-shadow: 0 15px 15px rgba(0, 0, 0, 0.3);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 30px;
  }
  .Button_User{
    width: 50px;
    height: 50px;
    background-color: transparent;
    border-color: transparent;
    box-shadow: 0 15px 15px rgba(0, 0, 0, 0.3);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 30px;
  }

  .add {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: rgb(201, 198, 198);
    border: none;
    position: relative;
    z-index: 4;
    transition: all 0.3s ease;
    outline: none;
  }
  .search {
    position: relative;
    right: 50px;
    z-index: 0;
    width: 20px;
    height: 38px;
    border-radius: 30px;
    border: none;
    display: none;
    color: white;
    background: white;
    box-sizing: border-box;
    transition: all 0.3s ease-in-out;
    outline: none;
    box-shadow: none;
  }
  ::placeholder {
    font-weight: bold;
    color: white;
  }
  .circle {
    width: 75px;
    height: 75px;
    background: rgb(236, 125, 20);
    bottom: 45px;
    left: -15px;
    position: absolute;
    z-index: 3;
    border-radius: 50%;
    cursor: pointer;
    transition: background 0.5s;
  }
  .nav-items {
    width: 30px;
    height: 30px;
    background: rgb(246, 131, 54);
    color: white;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 0;
    left: 0;
    cursor: pointer;
    box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.212);
    transform: scale(0);
    transition: transform 0.1s cubic-bezier(0.23, -0.47, 0.58, -0.63);
  }
  .nav-items:hover {
    transform: scale(1.1);
    transition-timing-function: 0.1s;
  }
  .box {
    width: 100%;
    position: absolute;
    top: 110%;
    left: 0;
    height: 0px;
    overflow: hidden;
    background: white;
    display: grid;
    grid-gap: 10px;
    transition: height 0.1s cubic-bezier(0.075, 0.82, 0.165, 1);
    z-index: 0;
  }
  .effect {
    z-index: 3;
    border-radius: 50%;
    width: 200vmax;
    height: 200vmax;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    background: rgb(246, 131, 54);
    transition: transform 0.4s;
  }
  .search-focus {
    width: 190px;
    height: 50px;
    position: relative;
    color: black;
    right: 80px;
    display: inline-block;
    bottom: 0px;
    text-align: center;
    font-size: 20px;
    background: rgb(255, 255, 255);
    animation: searchgoup 0.5s linear 0s 1 forwards;
  }
  @keyframes searchgoup {
    0%{bottom: 0px}
    100%{bottom: 50vh}
  }

  .big {
    transform: translate(-50%, -50%) scale(1);
  }
  .close {
    width: 10px;
  }



#likeorprofile{
    position: absolute;
    background-color: rgb(246, 131, 54);
    bottom: 61%;
    left: calc(50% - 40%);
    border-top: 1px solid black;
    width: 80%;
    height: 5%;
    border-radius: 8px;
    border: 3px solid #00000020;
    display: flex;
    justify-content: space-around;
    font-family: Hack, monospace;
}

#likeorprofile a {
    color: white;
    text-decoration: none;
}

#likeorprofile iframe{
    width: 100%;
    height: 100%;
}





.card,
body {
    display: flex;
}

.card-link,
body {
    font-size: 2rem;
}

.card-link {
    letter-spacing: 0.0178571em;
    font-weight: 500;
}

body {
    flex-direction: column;
    min-height: 100vh;
    margin: 0;
    font-family: Roboto, sans-serif;
    line-height: 1.2;
    color: black;
    background-color: #ced4da;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    text-align: center;
}


.card {
    height: 280px;
    position: relative;
    left: 120%;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #ff963331;
    background-clip: border-box;
    border: 3px solid #00000020;
    border-radius: 1rem;
}

@media screen and (max-width: 1500px) {
    .card {
        left: 100%;
    }
}
@media screen and (max-width: 807px) {
    .card {
        left: 30%;
    }
}

@media screen and (max-width: 502px) {
    .card {
        left: 5%;
        height: auto;
    }
}

.card-footer {
    padding: 1.5rem;
    background-color: transparent;
    border-top: 0;
}

.card-title {
    line-height: 1.5;
    margin-bottom: 0.5rem;
    font-size: 20px;
    font-family: Roboto;
    font-weight: 500;
    font-style: normal;
    font-family: Hack, monospace;
}

.card-subtitle,
.card-text:last-child {
    margin-bottom: 0;
}

.card-subtitle {
    font-weight: 400;
    margin-top: 0.2rem;
}

.card-link + .card-link {
    margin-left: 1.5rem;
}

.card-footer:last-child {
    border-radius: 0 0 0.8rem 0.8rem;
}

.card-img-overlay {
    top: 0;
    padding: 1.25rem;
    border-radius: 0.8rem;
}

.overlay{
    color: white;
}

.overlay p{
    width: fit-content;
}

.overlay #likesofpic{
    float:right;
}
.overlay #dislikesofpic{
    float:left;
}


@media (min-width: 510px) {
    .card-columns {
        column-count: 1;
        column-gap: 0.5rem;
        orphans: 2;
        widows: 2 !important;
    }
}

@media (min-width: 576px) {
    .card-columns .card {
        display: inline-block;
        width: 500px;
    }

    .card-columns {
        column-count: 3;
        column-gap: 0.5rem;
        orphans: 4;
        widows: 4;
    }

    .container {
        max-width: 98%;
    }
}

@media (min-width: 796px) {
    .card-columns {
        column-count: 3;
        column-gap: 1.125rem;
        orphans: 4;
        widows: 4;
    }
}

@media (min-width: 966px) {
    .card-columns {
        column-count: 3;
        column-gap: 1.25rem;
        orphans: 1;
        widows: 1;
    }

    .container {
        max-width: 80%;
    }
}

@media (min-width: 1200px) {
    .card-columns {
        column-count: 3;
        column-gap: 1.25rem;
        orphans: 1;
        widows: 1;
    }
}

.card-avatar {
    border-radius: 50%;
}
.avatar-border {
    border: 5px solid #fff;
}

.card-avatar.avatar-border.mt-n5,
.card-avatar.mr-44 {
    border: 1.5px solid #15181a;
    background: linear-gradient(#3c4349, #252a2d);
    position: relative;
    background-image: url("Images/avatar.png");
    <?php
        if(isset($_GET["u"])){
            $host = "localhost";  
            $user = "kldtkmkm_picstu";;  
            $password = 'TompaNagyTermetuFa#123';  
            $db_name = "kldtkmkm_picstu";  
            
            $con = mysqli_connect($host, $user, $password, $db_name);  
            if(mysqli_connect_errno()) {  
                die("Failed to connect with MySQL: ". mysqli_connect_error());  
            } 
        
            $sql = "select * from pictures where puid = '$_GET[u]' and pnev = 'pfp' ORDER BY pdate DESC";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);
        
            for($i = 0; $i < $count; $i = $i + 1){
                
                echo "background-image: url('uploads/$row[plocation]');";
        
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
            }
        }
        else{
            $host = "localhost";  
            $user = "kldtkmkm_picstu";;  
            $password = 'TompaNagyTermetuFa#123';  
            $db_name = "kldtkmkm_picstu";  
            
            $con = mysqli_connect($host, $user, $password, $db_name);  
            if(mysqli_connect_errno()) {  
                die("Failed to connect with MySQL: ". mysqli_connect_error());  
            } 
        
            $sql = "select * from pictures where puid = '$_SESSION[uid]' and pnev = 'pfp' ORDER BY pdate DESC";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);
        
            for($i = 0; $i < $count; $i = $i + 1){
                
                print "background-image: url('uploads/$row[plocation]');";
        
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
            }
        }
        
    
    ?>
    background-size: 120%;
    background-position: 50%;
}

.card-avatar.avatar-border.mt-n5 {
    box-shadow: 0 -0.75px 0.5px 0 #212428 inset, 0 0.5px 0.5px #535d65 inset,
    0 0.5px 0.5px -0.25px rgb(5 6 6 / 50%),
    0 1.75px 1px -0.25px rgb(26 29 31 / 25%);
    padding: 36px !important;
    width: 36px;
    height: 36px;
    margin: auto;
}

.mt-n5,
.my-n5 {
    margin-top: -4rem !important;
}

.card-cup.bg-primary {
    height: 85px;
    width: 100%;
    background-image: url(https://marketplace.canva.com/EAFNFWNVous/1/0/1600w/canva-orange-watercolor-linktree-background-rOEQ08dE0ac.jpg) !important;
    background-size: cover;
    background-position: 50% 50%;
}










.Kovetokszama{
    position: relative;
    left: 150px;
    font-family: Hack, monospace;
    font-size: 25px;
}
.Kepekszama{
    position: relative;
    right: 150px;
    bottom: 103px;
    font-family: Hack, monospace;
    font-size: 25px;
}
.Kovetokszama_szam{
    position: relative;
    left: 150px;
    bottom: 20px;
    font-family: Hack, monospace;
    font-size: 18px;
}
.Kepekszama_szam{
    position: relative;
    right: 150px;
    bottom: 125px;
    font-family: Hack, monospace;
    font-size: 18px;
}

#kepek{
    position: absolute;
    background-color: rgb(246, 131, 54);
    bottom: 15%;
    left: calc(50% - 40%);
    border-top: 1px solid black;
    width: 80%;
    height: 45%;
    border-radius: 8px;
    border: 3px solid #00000020;
}

#kepek iframe{
    width: 100%;
    height: 100%;
}

@media screen and (max-width: 502px){
    #kepek{
    position: absolute;
    background-color: rgb(246, 131, 54);
    bottom: 15%;
    left: calc(50% - 40%);
    border-top: 1px solid black;
    width: 80%;
    height: 20%;
    border-radius: 8px;
    border: 3px solid #00000020;
    }
    #likeorprofile{
    position: absolute;
    background-color: rgb(246, 131, 54);
    bottom: 36%;
    left: calc(50% - 40%);
    border-top: 1px solid black;
    width: 80%;
    height: 5%;
    border-radius: 8px;
    border: 3px solid #00000020;
}
    
    .Kovetokszama{
        position: relative;
        left: 80px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 25px;
    }
    .Kepekszama{
        position: relative;
        right: 90px;
        bottom: 103px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 25px;
    }
    .Kovetokszama_szam{
        position: relative;
        left: 80px;
        bottom: 20px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 18px;
    }
    .Kepekszama_szam{
        position: relative;
        right: 90px;
        bottom: 125px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 18px;
    }
}

#logoutbtn{
    float:right;
    position: relative;
    right: 5%;
}

#unfollowbtn{
    float:right;
    position: relative;
    right: 5%;
}

#editprofilepicturebtn{
    float:left;
    position: relative;
    left: 5%;
}
    
</style>