<?php
//This file is used for logging into the user database @ myFirst_DB >> GroupUsers
session_start();
require('mysql_connect.php');
$userName = $_POST['username'];
$passWord = sha1($_POST['password']);
$output = ['success'=>false, 'msg'=>'Username or Password incorrect, please try again'];
$query ="SELECT firstName, lastName, id, softDelete, userLevel FROM GroupUsers WHERE `userName`='$userName' AND `password`='$passWord'"; //check username / pw against database
$result= mysqli_query($conn, $query);
if (mysqli_num_rows($result)==1) // if the query to sql matches username and password
{
    $output['success']=true;
    $output['msg']='You have been logged in successfully';
    $user_info=mysqli_fetch_assoc($result);
    $_SESSION['user']=$user_info['id']; // store into session superglobal
    $output['user']=$user_info;
}

// json encode output and print
$json_output=json_encode($output);
print($json_output);


