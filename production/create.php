<?php
session_start();
require('mysql_connect.php');


if (isset ($_SESSION['user'])== false) // if user not logged in
{
    print('not logged in');
    return(isset($_SESSION));
}
else // if user logged in
{
    $newItem = $_POST;
    $title = "'".$_POST['title']."'";
    $details = "'".$_POST['details']."'";
    $dueDate = "'".$_POST['dueDate']."'";
    $priority = "'".$_POST['priority']."'";
    $user = "'".$_SESSION['user']."'";
    $created = CURRENT_TIMESTAMP; // adds datestamp
    $updated = CURRENT_TIMESTAMP; // adds datestamp
    $status=1;


    $query = "INSERT INTO `GroupTodo` SET `user_id`= $user, `title`= $title, `details`=$details, `created`=$created,
        `updated`=$updated, `dueDate`=$dueDate,`status`=$status, `priority`=$priority";
    $result= mysqli_query($conn, $query);
    return(mysqli_affected_rows($conn));

};
