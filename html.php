<?php require "info.php"; ?>                                <!--connect with info.php-->
<html>  
<head>
    <title>Login</title>
    <script defer src="verify_ajax.js"></script>            <!--connect with verify_ajax.js-->
</head>  
<center>
    <style>
        form{
            padding: 30px 40px;
        } 
        body {
            background-repeat : repeat;
            background-size: cover;
        }
        section{
            position: fixed;
            width: 340px;
            height: 250px;
            top: 40%;
            left: 50%;
            margin-top: -140px;
            margin-left: -170px;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
            border: 1px solid #c7d0d2;
            border-radius: 2px;
            box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;   
        }
        button{
            font-size: 14px;
            font-weight: bold;
            background-color: #acd6ef; /*IE fallback*/
            color: black;                
            border: #0D7EC3;
            width: 80px;
            height: 30px;
            border-radius: 30px;
        }        
    </style>
<section>
<form id="form" action="" method="POST">
        <h2>Log In</h2>
        <label for"username">User Name :  </label>           <!--user enter their username-->
        <input name="username" type="text" id="username">
        <br><br><br>          
        <button  type="submit" value="submit" name="submit">Submit</button>
        <br><br>
        <div id="error"></div>
        <?php if(isset($u_error)){ ?>                        <!--display error messages from info.php-->
            <p><?php echo $u_error ?></p>   
        <?php }?>                                            <!--display error message from verify_ajax.js-->
</form>
</section>
</body>
</center>
</html>   
