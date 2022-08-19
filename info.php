<?php 
if(isset($_POST["submit"])){
    if(!empty($_POST['username'])) 
    {  
        $username=$_POST['username'];  
        if($username == "abc"){  
            $u_error = "<font color='green'>Verified";                
        }        
        else 
        {
            $u_error = "<font color='red'>Error";    
        }  
    }                            
}  
?>
