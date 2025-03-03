<script>
    async function sendPostRequest(pid, ertek) {
        const data = new FormData();
        data.append('pid', pid); // A pid paraméter hozzáadása a kéréshez
        data.append('srate', ertek); // A pid paraméter hozzáadása a kéréshez
    
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'http://picsture.hu/admin/banimg.php', true);
    
        // Add event listener to handle the response
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log('Request successful:', xhr.responseText);
                } else {
                    console.log('Request failed:', xhr.status);
                }
            }
        };
    
        // Send the request with the FormData object containing the pid
        xhr.send(data);
    }
    
    async function checkimg(urlimg, imgid) {
    	const data = urlimg;
    	const response = await fetch(
    		"https://router.huggingface.co/hf-inference/models/Falconsai/nsfw_image_detection",
    		{
    			headers: {
    				Authorization: "Bearer hf_idfkwsig",
    				"Content-Type": "application/json",
    			},
    			method: "POST",
    			body: data,
    		}
    	);
    	const result = await response.json();
    	if(result[0]["label"] == "nsfw"){
    	    await sendPostRequest(imgid, "2");
    	}else{
    	    await sendPostRequest(imgid, "3");
    	}
    	return result
    }
    
    
    
</script>

<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $requestMethod = $_SERVER["REQUEST_METHOD"]; 
    if ($requestMethod !== 'POST') {
        http_response_code(400);
    }else{ 

        $host = "localhost";  
        $user = "kldtkmkm_picstu";;  
        $password = 'TompaNagyTermetuFa#123';  
        $db_name = "kldtkmkm_picstu";  
        
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        } 
        
        $sql = "SELECT * from pictures WHERE pstatus != '3'";
        
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        
        for($i = 0; $i < $count; $i = $i + 1){
            sleep(1);
            echo "<script>checkimg('http://picsture.hu/uploads/".$row['plocation']."', '".$row["pid"]."')</script>";
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
            
        }
    }

?>