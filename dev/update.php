<?php
session_start();
require("mysql_connect.php");
$selector = $_POST['id'];
$title = $_POST['title'];
$details = $_POST['details'];
$dueDate = $_POST['dueDate'];
$status = $_POST['status'];
$priority = $_POST['priority'];
$currentUser = $_SESSION['user'];
if (isset($_SESSION['user'])) { // if user is logged in
    $query = "UPDATE GroupTodo SET `title` = $title, `details` = $details, `updated` = CURRENT_TIMESTAMP, `dueDate` = $dueDate, `status` = $status, `priority` = $priority WHERE `id`=$selector AND `user_id` =$currentUser";
    mysqli_query($conn, $query);
    $update = mysqli_fetch_assoc($results);
    $encoded_results = json_encode($update);
    print_r($encoded_results);

} else {
    $userLoggedIn=false; // if user not logged in
    $encoded_results=json_encode($noUserLoggedIn);
    print_r($encoded_results);
    exit();
}