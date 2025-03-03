<?php


    if(isset($_COOKIE["error"])){
        if($_COOKIE["error"][0] != "!"){
            if(isset($_COOKIE["error"])){
                print('<div id="error" onclick="hideerror()" class="alert-box">
  <span class="message">'.$_COOKIE["error"].'</span>
</div>');
                setcookie("error", "asd", time() - 3600, "/");
            }
            print("
            
            <style>
            
                #error{
                    animation: errorpopup 10s linear 0s 1 forwards;
                    position: absolute;
                    top: 0%;
                    left: calc(50% - 200px);
                    z-index: 9999;
                }
            
                .alert-box {
                    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                    background-color: #ffffff9c;
                    color: #000000;
                    border: 1px solid #ffffff9c;
                    border-radius: 20px;
                    padding: 15px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    max-width: 400px;
                    width: 100%;
                    font-size: 13px;
                    display: flex;
                    align-items: center;
                }
            
                .alert-box .icon {
                    font-size: 24px;
                    margin-right: 15px;
                }
            
                .alert-box .message {
                    flex-grow: 1;
                    text-align: center;
                }
            
            
                @keyframes errorpopup {
                    0%{opacity: 0.0; top: 0%}
                    5%{opacity: 0.8; top: 25%}
                    75%{opacity: 0.8;}
                    100%{opacity: 0.0; display: none;}
                }
            
            </style>
    
            <script>
                function hideerror(){
                    document.getElementById(\"error\").style.display = \"none\";
                }
            </script>
            
            ");
    
            
        }
        else{
            if(isset($_COOKIE["error"])){
                print('<div id="error" onclick="hideerror()" class="alert-box">
  <span class="message">'.ltrim($_COOKIE["error"], $_COOKIE["error"][0]).'</span>
</div>');
                setcookie("error", "asd", time() - 3600, "/");
            }

            print("
            
            <style>
            
                #error{
                    animation: errorpopup 10s linear 0s 1 forwards;
                    position: absolute;
                    top: 0%;
                    left: calc(50% - 200px);
                    z-index: 9999;
                }
                
                .alert-box {
                    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                    background-color: #ffffff9c;
                    color: #000000;
                    border: 1px solid #ffffff9c;
                    border-radius: 20px;
                    padding: 15px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    max-width: 400px;
                    width: 100%;
                    font-size: 13px;
                    display: flex;
                    align-items: center;
                }
            
                .alert-box .icon {
                    font-size: 24px;
                    margin-right: 15px;
                }
            
                .alert-box .message {
                    flex-grow: 1;
                    text-align: center;
                }
            
                
                @keyframes errorpopup {
                    0%{opacity: 0.0; top: 0%}
                    5%{opacity: 0.8; top: 25%}
                    75%{opacity: 0.8;}
                    100%{opacity: 0.0; display: none;}
                }
            
            
            </style>
    
            <script>
                function hideerror(){
                    document.getElementById(\"error\").style.display = \"none\";
                }
            </script>
            
            ");
    
            
        }
    }
    

    
?>