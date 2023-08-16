<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require 'config/database.php';


//fetch current user from database
if(isset($_SESSION['user-id'])) {
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT avatar FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $avatar = mysqli_fetch_assoc($result);
}
?>



<!DOCTYPE html>
                <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link
                        rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
                        <!---------ICONSCOUT CDN------>
                        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
                        <!---------GOOGLE FONT MONTSERRAT------>
                        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;0,800;1,600&display=swap" rel="stylesheet">


                        <title>PHP & Mysql blog Application with Admin Panel</title>
                    </head>
                    <body>
                        <nav>
                            <div class="container nav-container">
                                <a href="<?= ROOT_URL ?>" class="nav-logo">PROPELOND</a>
                                <ul class="nav-items">
                                    <li>
                                        <a href="<?= ROOT_URL ?>blog.php">Blog</a>
                                    </li>
                                    <li>
                                        <a href="<?= ROOT_URL ?>about.php">About</a>
                                    </li>
                                    <li>
                                        <a href="<?= ROOT_URL ?>services.php">Services</a>
                                    </li>
                                    <li>
                                        <a href="<?= ROOT_URL ?>contact.php">Contact</a>
                                    </li>
                                    <?php if (isset($_SESSION['user-id'])) :  ?>

                                        <li class="nav-profile">
                                        <div class="avatar">
                                            <img src="<?= ROOT_URL . 'images/' . $avatar['avatar'] ?>"></div>
                                        <ul>
                                            <li><a href="<?= ROOT_URL ?>admin/index.php">Dashboard</a></li>
                                            <li><a href="<?= ROOT_URL ?>logout.php">Logout</a></li>
                                        </ul>
                                    </li> 
                                    <?php else : ?>
                                    <li>
                                    <a href="<?= ROOT_URL ?>signin.php">Signin</a>
                                    </li> 
                                    <?php endif  ?>
                                
                                </ul>
                                <button id="open-nav-btn">
                                    <i class="uil uil-bars"></i>
                                </button>
                                <button id="close-nav-btn">
                                    <i class="uil uil-multiply"></i>
                                </button>
                            </div>
                        </nav>
                        <!---------END OF NAV------>

