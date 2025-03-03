<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Picstures - Admin</title>

    <link href="admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="admin/Admin_Style.css" rel="stylesheet" media="all">

</head>
<body class="animsition">
    <div class="page-wrapper">

<!-- //Background -->
<div>
    <div class="wave"></div>
    <div class="wave"></div>
    <div class="wave"></div>
 </div>

<iframe style="display: none" name="my_iframe"></iframe>
<!-- //Logout -->
<div class="page-container">
<header class="header-desktop">
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="header-wrap">
            <div class="header-button">
                <div class="noti-wrap">
                <div class="account-wrap">
                    <div class="account-item clearfix js-item-menu">
                        <div class="image">
                            <img src="Images/avatar.png"/>
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#"><?php echo $_SESSION["uname"];?></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="Images/avatar.png" width="60px"/>
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#"><?php echo $_SESSION["uname"];?></a>
                                    </h5>
                                    <span class="email"><?php echo $_SESSION["uemail"];?></span>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="http://picsture.hu/?p=logout">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                <a href="http://picsture.hu/?p=main">
                                    <i class="zmdi zmdi-mood"></i>Back to the main page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </header>


<!-- //Statistics -->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row m-t-25">
 <div class="col-sm-6 col-lg-3">
     <div class="overview-item overview-item--c1">
         <div class="overview__inner">
             <div class="overview-box clearfix">
                 <div class="icon">
                     <i class="zmdi zmdi-account-o"></i>
                 </div>
                 <div class="text">
                     <h2><?php
                      
                      $host = "localhost";  
                      $user = "kldtkmkm_picstu";;  
                      $password = 'TompaNagyTermetuFa#123';  
                      $db_name = "kldtkmkm_picstu";  
                      
                      $con = mysqli_connect($host, $user, $password, $db_name);  
                      if(mysqli_connect_errno()) {  
                          die("Failed to connect with MySQL: ". mysqli_connect_error());  
                      } 
            
                     $sql = "select count(uid) as cn from user";
                      
                      $result = mysqli_query($con, $sql);  
                      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                      $count = mysqli_num_rows($result);
                      echo $row["cn"];
                      
                      ?></h2>
                     <span>members registered</span>
                 </div>
             </div>
             <div class="overview-chart">
                 <canvas id="widgetChart1"></canvas>
             </div>
         </div>
     </div>
 </div>
 <div class="col-sm-6 col-lg-3">
     <div class="overview-item overview-item--c2">
         <div class="overview__inner">
             <div class="overview-box clearfix">
                 <div class="icon">
                     <i class="zmdi zmdi-shopping-cart"></i>
                 </div>
                 <div class="text">
                     <h2><?php
                      
                      $host = "localhost";  
                      $user = "kldtkmkm_picstu";;  
                      $password = 'TompaNagyTermetuFa#123';  
                      $db_name = "kldtkmkm_picstu";  
                      
                      $con = mysqli_connect($host, $user, $password, $db_name);  
                      if(mysqli_connect_errno()) {  
                          die("Failed to connect with MySQL: ". mysqli_connect_error());  
                      } 
            
                     $sql = "select count(pid) as cn
                            FROM pictures
                            WHERE MONTH(pdate) = MONTH(CURRENT_DATE())
                            AND YEAR(pdate) = YEAR(CURRENT_DATE())";
                      
                      $result = mysqli_query($con, $sql);  
                      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                      $count = mysqli_num_rows($result);
                      echo $row["cn"];
                      
                      ?></h2>
                     <span>Month Posts</span>
                 </div>
             </div>
             <div class="overview-chart">
                 <canvas id="widgetChart2"></canvas>
             </div>
         </div>
     </div>
 </div>
 <div class="col-sm-6 col-lg-3">
     <div class="overview-item overview-item--c3">
         <div class="overview__inner">
             <div class="overview-box clearfix">
                 <div class="icon">
                     <i class="zmdi zmdi-calendar-note"></i>
                 </div>
                 <div class="text">
                     <h2><?php
                      
                      $host = "localhost";  
                      $user = "kldtkmkm_picstu";;  
                      $password = 'TompaNagyTermetuFa#123';  
                      $db_name = "kldtkmkm_picstu";  
                      
                      $con = mysqli_connect($host, $user, $password, $db_name);  
                      if(mysqli_connect_errno()) {  
                          die("Failed to connect with MySQL: ". mysqli_connect_error());  
                      } 
            
                     $sql = "select count(pid) as cn from pictures";
                      
                      $result = mysqli_query($con, $sql);  
                      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                      $count = mysqli_num_rows($result);
                      echo $row["cn"];
                      
                      ?></h2>
                     <span>Posts</span>
                 </div>
             </div>
             <div class="overview-chart">
                 <canvas id="widgetChart3"></canvas>
             </div>
         </div>
     </div>
 </div>
 <div class="col-sm-6 col-lg-3">
     <div class="overview-item overview-item--c4">
         <div class="overview__inner">
             <div class="overview-box clearfix">
                 <div class="icon">
                     <i class="zmdi zmdi-money"></i>
                 </div>
                 <div class="text">
                     <h2>$0</h2>
                     <span>total earnings</span>
                 </div>
             </div>
             <div class="overview-chart">
                 <canvas id="widgetChart4"></canvas>
             </div>
         </div>
     </div>
 </div>
</div>


<center><form action="http://picsture.hu/admin/checkimgs.php" method="POST" target="my_iframe"><button type="submit">Képek ellenőrzése</button></form></center>
<br>

<script>
function isNumeric(str) {
  if (typeof str != "string") return false // we only process strings!  
  return !isNaN(str) && // use type coercion to parse the _entirety_ of the string (`parseFloat` alone does not do this)...
         !isNaN(parseFloat(str)) // ...and ensure strings of whitespace fail
}

function searchName() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchName");
  filter = input.value.toUpperCase();
  table = document.querySelector(".table");
  tr = table.children[1].getElementsByTagName("tr");
  if(isNumeric(input.value)){
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[4];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
  }else{
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
  }
  
}

function searchImg() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchImg");
  filter = input.value.toUpperCase();
  table = document.querySelectorAll(".table")[1];
  tr = table.children[1].getElementsByTagName("tr");
  if(isNumeric(input.value)){
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
  }else{
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
  }
  
}

</script>

<!-- //Table -->
<div class="row">
 <div class="col-lg-12">
     <h2 class="title-1 m-b-25 text-center text-white"><b>User informations</b></h2><br>
     <div class="table-responsive table--no-card m-b-40">
         <table class="table table-borderless table-striped table-earning">
             <thead>
                 <tr>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Register</th>
                     <th>Session</th>
                     <th>Id</th>
                     <th><input type="text" id="searchName" onkeyup="searchName()" placeholder="Search for names.."></th>
                     <th class="text-right">Permission</th>
                 </tr>
             </thead>
             <tbody>
                 <?php
                      
                      $host = "localhost";  
                      $user = "kldtkmkm_picstu";;  
                      $password = 'TompaNagyTermetuFa#123';  
                      $db_name = "kldtkmkm_picstu";  
                      
                      $con = mysqli_connect($host, $user, $password, $db_name);  
                      if(mysqli_connect_errno()) {  
                          die("Failed to connect with MySQL: ". mysqli_connect_error());  
                      } 
            
                     $sql = "select * from user";
                      
                      $result = mysqli_query($con, $sql);  
                      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                      $count = mysqli_num_rows($result);
                      
                      for($i = 0; $i < $count; $i = $i + 1){
                            $status = $row['ustatus'] == '2' ? 'Banned' : 'Member';
                            if($row["ustatus"] != "1"){
                            echo " <tr id='user".$row['uid']."'>
                                 <td>".$row['unick']."</td>
                                 <td>".$row['uemail']."</td>
                                 <td>".$row['udate']."</td>
                                 <td>".$row['usession']."</td>
                                 <td>".$row['uid']."</td>
                                 <td><form action='http://picsture.hu/admin/banuser.php' method='POST'><input style='display: none;' value='".$row['uid']."' name='uid'><button class='Button_UserBan'>Ban</button></form> <form action='http://picsture.hu/admin/addadmin.php' method='POST'><input style='display: none;' value='".$row['uid']."' name='uid'><button class='Button_Useradminadd'>Admin add</button></form> <form action='http://picsture.hu/admin/unbanuser.php' method='POST'><input style='display: none;' value='".$row['uid']."' name='uid'><button class='Button_UserunBan'>User Unban</button></form></td>
                                 <td class='text-right'>".$status."</td>
                             </tr>";
                            }
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
                      }
                      
                      
                ?>
             </tbody>
         </table>
     </div>
 </div>
 </div>
 
 
 
 <!-- //Table -->
<div class="row">
 <div class="col-lg-12">
     <h2 class="title-1 m-b-25 text-center text-white"><b>Image informations</b></h2><br>
     <div class="table-responsive table--no-card m-b-40">
         <table class="table table-borderless table-striped table-earning">
             <thead>
                 <tr>
                     <th>Title</th>
                     <th>Uploader</th>
                     <th>Preview</th>
                     <th><input type="text" id="searchImg" onkeyup="searchImg()" placeholder="Search for ids.."></th>
                     <th class="text-right">Status</th>
                 </tr>
             </thead>
             <tbody>
                 
                 <?php
                      
                      $host = "localhost";  
                      $user = "kldtkmkm_picstu";;  
                      $password = 'TompaNagyTermetuFa#123';  
                      $db_name = "kldtkmkm_picstu";  
                      
                      $con = mysqli_connect($host, $user, $password, $db_name);  
                      if(mysqli_connect_errno()) {  
                          die("Failed to connect with MySQL: ". mysqli_connect_error());  
                      } 
            
                     $sql = "select * from pictures";
                      
                      $result = mysqli_query($con, $sql);  
                      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                      $count = mysqli_num_rows($result);
                      
                      for($i = 0; $i < $count; $i = $i + 1){
                            $status = $row['pstatus'] == '2' ? 'Banned' : 'Visible';
                            if($row["pstatus"] != "1"){
                            echo " <tr id='img".$row['pid']."'>
                                 <td>".$row['pnev']."</td>
                                 <td>".$row['puid']."</td>
                                 <td><img src='uploads/".$row['plocation']."' width='32px' height='32px' class='felhasznalokep'></td>
                                 <td><form action='http://picsture.hu/admin/banimg.php' method='POST'><input style='display: none;' value='".$row['pid']."' name='pid'><button class='Button_UserBan'>Ban img</button></form> <form action='http://picsture.hu/admin/banuser.php' method='POST'><input style='display: none;' value='".$row['puid']."' name='uid'><button class='Button_Useradminadd'>Ban user</button></form> <form action='http://picsture.hu/admin/unbanimg.php' method='POST'><input style='display: none;' value='".$row['pid']."' name='pid'><button class='Button_UserunBan'>Image Unban</button></form></td>
                                 <td class='text-right'>".$status."</td>
                             </tr>";
                            }
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
                      }
                      
                      
                ?>
             </tbody>
         </table>
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

<script>

    document.querySelectorAll(".felhasznalokep").forEach(element => {
        element.onclick = function(){
            localStorage.setItem("overlayimg", element.src);
            localStorage.setItem("overlayShown", true);
        }
    });

</script>

<!-- //Statistics -->
 <div class="col-lg-6"><br>
     <h2 class="title-1 m-b-25 text-center text-white">Country Activity</h2>
     <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
         <div class="au-card-inner">
             <div class="table-responsive">
                 <table class="table table-top-countries">
                     <tbody>
                         <tr>
                             <td>United States</td>
                             <td class="text-right">1</td>
                         </tr>
                         <tr>
                             <td>Australia</td>
                             <td class="text-right">1</td>
                         </tr>
                         <tr>
                             <td>United Kingdom</td>
                             <td class="text-right">1</td>
                         </tr>
                         <tr>
                             <td>Turkey</td>
                             <td class="text-right">1</td>
                         </tr>
                         <tr>
                             <td>Germany</td>
                             <td class="text-right">1</td>
                         </tr>
                         <tr>
                             <td>France</td>
                             <td class="text-right">1</td>
                         </tr>
                         <tr>
                             <td>Australia</td>
                             <td class="text-right">1</td>
                         </tr>
                         <tr>
                             <td>Italy</td>
                             <td class="text-right">1</td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>
 <div class="col-lg-6"><br>
     <h2 class="title-1 m-b-25 text-center text-white">Country Activity</h2>
     <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
         <div class="au-card-inner">
             <div class="table-responsive">
                 <table class="table table-top-countries">
                     <tbody>
                         <tr>
                             <td>Hungary</td>
                             <td class="text-right">1</td>
                         </tr>
                         <tr>
                             <td>Japan</td>
                             <td class="text-right">1</td>
                         </tr>
                         <tr>
                             <td>Jamaica</td>
                             <td class="text-right">1</td>
                         </tr>
                         <tr>
                             <td>Spain</td>
                             <td class="text-right">1</td>
                         </tr>
                         <tr>
                             <td>Slovakia</td>
                             <td class="text-right">1</td>
                         </tr>
                         <tr>
                             <td>Serbia</td>
                             <td class="text-right">1</td>
                         </tr>
                         <tr>
                             <td>Russia</td>
                             <td class="text-right">1</td>
                         </tr>
                         <tr>
                             <td>Romania</td>
                             <td class="text-right">1</td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>


</body>
<script src="admin/vendor/jquery-3.2.1.min.js"></script>
<script src="admin/vendor/animsition/animsition.min.js"></script>
<script src="admin/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="admin/Admin_Script.js"></script>
</html>
