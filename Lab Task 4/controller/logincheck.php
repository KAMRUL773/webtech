<?php
    session_start();
    if(empty($_POST['username']) && empty($_POST['password']))
    {
        echo "One or more of the fields are empty!";
    }
    else if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $rememberMe = '';
        if(isset($_POST['rememberMe'])) {
            $rememberMe = $_POST['rememberMe'];
        }

        $dataString = file_get_contents('../model/login.json');
        $dataJSON = json_decode($dataString, true);
        $userFoundFlag = false;

        foreach($dataJSON as $user)
        {
            if($user['username'] == $username && $user['password'] == $password)
            {
                if($rememberMe == 'on') {
                    setcookie('username', $username, time() + (10 * 365 * 24 * 60 * 60), '/');
                    setcookie('password', $password, time() + (10 * 365 * 24 * 60 * 60), '/');
                }
                else {
                    setcookie('username', '', time() + (10 * 365 * 24 * 60 * 60), '/');
                    setcookie('password', '', time() + (10 * 365 * 24 * 60 * 60), '/');
                }
                $_SESSION['flag'] = true;
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];                
                $_SESSION['gender'] = $user['gender'];                                
                $_SESSION['dob'] = $user['dob'];                                                
                $_SESSION['username'] = $user['username'];                                                
                $_SESSION['password'] = $user['password'];                
                $userFoundFlag = true;
                header('location: ../view/dashboard.php');
            }
        }
        if($userFoundFlag == false)
        {
            echo "\nInvalid user!";
        }
    }
    else {
        echo "TEST";
    }
?>