<?php

if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
unset($_COOKIE[session_name()]);
unset($_SESSION['authorized']);
$_SESSION = [];
session_destroy();
header("Location: login.php");