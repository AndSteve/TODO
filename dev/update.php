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
if (isset($_SESSION['user'])) {
    $query = "UPDATE GroupTodo SET `title` = $title, `details` = $details, `updated` = CURRENT_TIMESTAMP, `dueDate` = $dueDate, `status` = $status, `priority` = $priority WHERE `id`=$selector AND `user_id` =$currentUser";
    mysqli_query($conn, $query);
} else {
    exit();
}