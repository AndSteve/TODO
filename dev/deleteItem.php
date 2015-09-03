<?php
session_start();
require('mysql_connect.php');
print_r($_SESSION['user']);
if (isset ($_SESSION['user'])== false) // if user not logged in
{
    print('not logged in');
    return(isset($_SESSION));
}
else // if user logged in
{
    $newItem = $_POST;
    $id = $_POST['id'];
    $user = "'".$_SESSION['user']."'";
    $updated = CURRENT_TIMESTAMP; // adds datestamp
    $status=-1;

    $query = "UPDATE GroupTodo SET `status` = -1 WHERE `id`=$id AND `user_id` =$user"; // sets status to -1 (soft delete)
    print_r ($query);

    // return false and some message, or template file that will give a message. if feeding back a message, simplest will be alert popup message,
    // function that pups up a modal with a message. can have that as a standard
// function that adds an errogit r message to a given element - pass back info of a target- can add to each of our rows or inputs, a span that
    // is a container for an error message.

    $result= mysqli_query($conn, $query);
    return(mysqli_affected_rows($conn));
    print_r(mysqli_affected_rows($conn));

};


?>