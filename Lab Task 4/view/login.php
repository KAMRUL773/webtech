<?php 
    session_start();
    if (isset($_SESSION['flag']) && $_SESSION['flag'] == true) {
        header('location: ../view/dashboard.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='../images/icon.png'>
    <title>Log In</title>
</head>
<body>
    <?php include('./header.php'); ?>

    <fieldset>
    <table align="right">
    <tr>
        <td>
            <nav>
                <a href="./index.php">Home</a> ||
                <a href="./login.php">Log in</a> ||
                <a href="./registration.php">Registration</a>
            </nav>
        </td>
    </tr>        
    </table>
    </fieldset>

    <div width='100px'>
        <form action='../controller/logincheck.php' method="POST">
            <fieldset>
                <legend>
                    <b>LOG IN</b>
                </legend>
                <table align="center">
                    <tr>
                        <td align="right">User Name:</td>
                        <td><input type='text' name='username'
                        value="<?php if(isset($_COOKIE["username"])) { echo 'koushik'; } ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Password:</td>
                        <td><input type='password' name='password'
                        value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Remember Me:</td>
                        <td><input type='checkbox' name='rememberMe'/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td align="left"><input type='submit' value="Submit"></td>
                        <td align="left"><a href="./forgotpass.php">Forgot Password</a></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
    <?php include('./footer.php'); ?>
</body>
</html>