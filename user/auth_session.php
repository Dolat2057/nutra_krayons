<?php

// user page authentication
session_start();
if (!isset($_SESSION["email"])) {
    header("Location:./login.php");
    exit();
}
