<?php
session_start(); //open session first
session_unset($_SESSION); // remove variables in session
session_destroy(); // destroy session
?>



