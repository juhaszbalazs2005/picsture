<?php      

    

    session_start();

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxy';
        $charactersLength = strlen($characters);
        $randomString = '';
    
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
    
        return $randomString;
    }

    $requestMethod = $_SERVER["REQUEST_METHOD"]; 
    if ($requestMethod !== 'POST') {
        http_response_code(400);
    }else{ 

        include("mysqlconn.php");
        $pictitle = $_POST['pictitle'];
        if(!isset($pictitle) || $pictitle == ""){
            setcookie("error", "You didn't provide a title for the image!", time() + (60 * 30), "/");
            header('Location: ../?p=upload'); 
            die();
        }
        if($pictitle == "pfp" && $_SERVER['HTTP_REFERER'] != "http://picsture.hu/?p=editprofilepicture"){
            setcookie("error", "This address is blocked in the system!", time() + (60 * 30), "/");
            header('Location: ../?p=upload'); 
            die();
        }
    
        $piclocation = generateRandomString(6);
        while(file_exists("../uploads/".$piclocation.".png" || "../uploads/".$piclocation.".jpg" || "../uploads/".$piclocation.".jpeg")){
            $piclocation = generateRandomString(6);
        }

        $data = $_POST['kep'];
        
        // Távolítsd el a "data:image/png;base64," előtagot, ha létezik
        $imageData = str_replace('data:image/png;base64,', '', $data);
        $imageData = str_replace('data:image/jpeg;base64,', '', $imageData); // Ha JPEG a formátum
        $imageData = base64_decode($imageData); // Dekódolás
        
        if ($imageData === false) {
            die('Base64 kódolás hiba!');
        }
        
        preg_match('/^data:image\/(png|jpeg|jpg|gif);base64,/', $_POST['kep'], $matches);
        $imageType = $matches[1]; // Az "image/png", "image/jpeg", stb.
    
        // Fájl kiterjesztésének beállítása a MIME típus alapján
        switch ($imageType) {
            case 'jpeg':
            case 'jpg':
                $extension = 'jpg';
                break;
            case 'gif':
                $extension = 'gif';
                break;
            case 'png':
            default:
                $extension = 'png';
                break;
        }
        
        // Új fájl nevet generálj (például időbélyeggel)
        $fileName = '../uploads/' . $piclocation . '.' . $extension;
        
        // Fájl létrehozása és írása
        $success = file_put_contents($fileName, $imageData);
        
        if(!$success){
            setcookie("error", "You didn't provide the picture!", time() + (60 * 30), "/");
            var_dump($_POST);
            var_dump($success);
            die();
        }else{
            $uploadOk = 1;
        }

        

        if ($uploadOk == 1) {

                $session_id = session_id();

                $sql = "INSERT INTO `pictures`(`pid`, `puid`, `pnev`, `plocation`, `pusession`) VALUES (null,".$_SESSION['uid'].",'".$pictitle."','".$piclocation.".".$extension."','".$session_id."')";  
                $result = mysqli_query($con, $sql);  
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);
        
                setcookie("error", "!Successful image upload!", time() + (60 * 30), "/");
                header('Location: ../?p=profile');
                die();

        }
         
    }
        mysqli_close($con);
        
?>  