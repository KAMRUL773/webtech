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
    <link rel='icon' href='./images/favicon.png'>
    <title>X company</title>
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
        <form>
            <fieldset>
                <table align="left">
                    <tr>
                        <td align="left"><b>Welcome to Ecommerce Company</b></td>
                        <td><br><br><br><br><br><br></td>
                    </tr>                
                </table>
            </fieldset>
            <?php include('./footer.php'); ?>
        </form>        
    </div>
    
</body>
</html>