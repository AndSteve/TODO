<?php
session_start();
$searchString = $_POST['id'];
require("mysql_connect.php");
if (isset($_SESSION['user'])) {
    $currentUser = $_SESSION['user'];
    $query = "SELECT `title`, `details`, `created`, `updated`, `dueDate`, `status`, `priority` FROM `GroupTodo` WHERE `id` = $searchString";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 0) {
        $noRows="There are no to do list items yet, MAKE SOME!";
        $encoded_results = json_encode($elseIf);
        print_r($encoded_results);
    } else if (mysqli_num_rows($results) > 0) {
        $elseIf = mysqli_fetch_assoc($results);
        $encoded_results = json_encode($elseIf);
        print_r($encoded_results);
    }
} else {
    print("User not found, please log in");
    $else ='User not found, please log in';
    $encoded_results = json_encode($else);
    print_r($encoded_results);
}
