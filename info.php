<?php 
if(isset($_POST["submit"])){
    if(!empty($_POST['username'])) 
    {  
        $username=$_POST['username'];  
        if($username == "abc"){                                 /*checking whether the input is correct*/
            $u_error = "<font color='green'>Verified";          /*message for correct input*/      
        }        
        else 
        {
            $u_error = "<font color='red'>Error";               /*error message for incorrect input*/ 
        }  
    }                            
}  
?>
