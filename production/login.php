<?php
//This file is used for logging into the user database @ myFirst_DB >> GroupUsers
session_start();
require('mysql_connect.php');
if (isset($_POST['username'])) {
    $userName = $_POST['username'];
    $passWord = sha1($_POST['password']);
    $output = ['success' => false, 'msg' => 'Username or Password incorrect, please try again'];
    $query = "SELECT firstName, lastName, userName, id, softDelete, userLevel FROM GroupUsers WHERE `userName`='$userName' AND `password`='$passWord'"; //check username / pw against database
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) // if the query to sql matches username and password
    {
        $user_info = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $user_info['id']; // store into session superglobal
        $_SESSION['username'] = $user_info['userName'];
        $_SESSION['user_id'] = $user_info['id'];
        $output['success'] = true;
        $output['msg'] = 'You have been logged in successfully';
        $output['user'] = $user_info;
        $output["user_id"] = $user_info['id'];
        $output["message"] = "Login Successful";
        $output["success"] = true;
        $output['reloads'] =
            [
                ['target' => '.header', 'url' => 'templates/header.php'],
                ['target' => '.contents', 'url' => 'pages/landing.php']
            ];
    }
    // json encode output and print
    $json_output = json_encode($output);
    print($json_output);
};
