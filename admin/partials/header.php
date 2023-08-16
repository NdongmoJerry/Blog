<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require '../partials/header.php';

//check login status
if (!isset($_SESSION['user-id'])) {
    header('Location: ' . ROOT_URL . 'signin.php');
    die();
}





