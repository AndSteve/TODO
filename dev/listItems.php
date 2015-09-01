<?php
session_start();
require("mysql_connect.php");
if (isset($_SESSION['user'])) {
    $currentUser = $_SESSION['user'];
    $query = "SELECT `title`, `details`, `created`, `updated`, `dueDate`, `status`, `priority` FROM `GroupTodo` WHERE `user_id` = $currentUser";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 0) {
        print("There are no to do list items yet, MAKE SOME!");
    } else if (mysqli_num_rows($results) > 0) {
        $list = mysqli_fetch_assoc($results);
        $encoded_results = json_encode($list);
        print_r($encoded_results);
    }
} else {
    print("User not found, please log in");
}
