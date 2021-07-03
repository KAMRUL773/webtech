<?php
    $userErr = $passErr ="";
    $user = $pass ="";
    $message = '';  

    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {  
        if(empty($_POST["user"]))  
        {  
            $userErr = "Required!";  
        }
        else if(strlen($_POST["user"]) <2)
        {
            $userErr = "least two (2) characters";
        }
        else
        {
            $user = $_POST['user'];
            if(!preg_match("/^[a-zA-Z0-9_ .-]*$/",$user))
            {
                $userErr = "alpha numeric characters, period, dash or underscore only!";
            }

        }
        
        if(empty($_POST["pass"]))  
        {  
            $passErr = "Password Required!";  
        }  
        else if(strlen($_POST['pass']) <8)
        {
            $passErr = "Password must not be less than eight (8) characters";
        }
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body class="font">
        <form method="post" action="">
            <fieldset>
                <legend><strong>LOGIN</strong></legend>
                <label for="user">User Name &nbsp;&nbsp;&nbsp;</label> 
                <input type="text" id="user" name="user" placeholder="Type User Name">
                <span class="error">* <?php echo $userErr; ?></span>
                <br>
                <label for="pass">Password</label>
                <input type="password" id="pass" name="pass" placeholder="Type Password">
                <span class="error">* <?php echo $passErr; ?></span>
                <br>
                <input type="checkbox" name="remember" value="remember">Remember Me
                <input type="submit" name="submit" value="Submit" style="font-size: 15px;"> <a href="#">Forgot Password?</a>
                </table>
            </fieldset>
        </form>      
    </body>
</html>