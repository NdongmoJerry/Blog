<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require 'config/constants.php';
// get back form data if there was a registration error
$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;
// delete signup data session
unset($_SESSION['signup-data']);
?>


<!DOCTYPE html>
                <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link
                        rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
                        <!---------ICONSCOUT CDN------>
                        <link
                        rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
                        <!---------GOOGLE FONT MONTSERRAT------>
                        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;0,800;1,600&display=swap" rel="stylesheet">

                        <title>PHP & Mysql blog Application with Admin Panel</title>
                    </head>
                    <body>
                        <section class="form-section">
                            <div class="container form-section-container">
                                <h2>Sign Up</h2>
                                <?php if(isset($_SESSION['signup'])): ?> 
                                        <div class="alert-message error">
                                    <p>
                                        <?= $_SESSION['signup'];
                                        unset($_SESSION['signup']); 
                                        ?>
                                </p>
                                </div>
                                    <?php endif ?>
                                <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
                                    <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="First Name">
                                    <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Last Name">
                                    <input type="text" name="username" value="<?= $username ?>" placeholder="UserName">
                                    <input type="email" name="email" value="<?= $email ?>" placeholder="Email">
                                    <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="Create Password">
                                    <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Confirm Password">
                                    <div class="form-control">
                                        <label for="avatar">User Avatar</label>
                                        <input type="file" name="avatar" id="avatar">
                                    </div>
                                    <button type="submit" name="submit" class="btn">Sign Up</button>
                                    <small>Already have account?
                                        <a href="signin.php">Sign In</a>
                                    </small>
                                </form>

                            </div>
                        </section>


                    </body>
                </html>
