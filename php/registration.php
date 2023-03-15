<?php 
    $username = $_REQUEST['username'];
    $password = $_REQUEST["password"];
    
    
    if(file_exists("database/".$username.".txt")){
        
        $file = fopen("database/".$username.".txt","r");
        $username = fgets($file);
        $email = fgets($file);
        $password2 = trim(fgets($file));
        fclose($file);
        
        if($password == $password2){
            echo "Login Successful";
        }else{
            echo "Password or Username is incorrect";
        }
        
    }else{
        
        echo "Password or Username is incorrect";
    }
    
    

?>