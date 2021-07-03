<?php
    $currPassErr = $newPassErr = $cnewPassErr ="";
    $newPass = $cnewPass ="";
    $currPass = 'abc@1234';

    if(isset($_POST["submit"]))  
    {  
        if(empty($_POST["currPass"]))  
        {  
            $currPassErr = "Required!";  
        } 
        else if($currPass == $currPass)
        {
           echo "Mached";
        }
        else
        {
            $currPassErr = "password isn't maching!";
        }

        if($_POST["currPass"] != $_POST["newPass"]) 
        {
            $newPassErr = "cannot be the same as current Password!";
        }

        if(empty($_POST["newPass"]))
        {
            $newPassErr ="Required!";
        }
      
        if(empty($_POST["cnewPass"])) 
        {
            $cnewPassErr = "Retype New password!";
        } 
        else if($_POST["newPass"] !== $_POST["cnewPass"]) 
        {
            $cnewPassErr = "not mached!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body class="font">
        <form method="post" action="">
            <fieldset>
                <legend>CHANGE PASSWORD</legend>
                        <label for="currPass">Current Password</label>
                        <input type="text" id="currPass" name="currPass">
                        <span class="error"> <?php echo $currPassErr; ?></span>
                        <br>
                        <label for="newPass">New Password</label></td>
                        <input type="text" id="newPass" name="newPass">
                        <span class="error"> <?php echo $newPassErr; ?></span>
                        <br>
                        <label for="cnewPass"> Retype New Password </label>
                        <input type="text" id="cnewPass" name="cnewPass">
                        <span class="error"> <?php echo $cnewPassErr; ?></span>
                        <br>
                        <input type="submit" name="submit">
            </fieldset>
        </form>      
    </body>
</html>