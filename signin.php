<?php
session_start();
require 'config/constants.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);

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
                                <h2>Sign In</h2>
                                    <?php if (isset($_SESSION['signup-success'])) : ?>
                                        <div class="alert-message success">
                                            <p>
                                                <?= $_SESSION['signup-success'];  
                                                    unset($_SESSION['signup-success']); ?>
                                                </p>
                                        </div>
                                    <?php elseif (isset($_SESSION['signin'])) : ?> 
                                    <div class="alert-message error">
                                            <p>
                                                <?= $_SESSION['signin'];  
                                                    unset($_SESSION['signin']); ?>
                                                </p>
                                        </div>
                                    <?php endif  ?>                                                                       
                                <form action="<?= ROOT_URL ?>signin-logic.php" method="POST">
                                    <input type="text" name="username_email"  value="<?= $username_email ?>" placeholder="UserName or Email">
                                    <input type="password" name="password"  value="<?= $password ?>" placeholder="password">
                                    <button name="submit" type="submit" class="btn">Sign In</button>
                                    <small>Don't have an account?
                                        <a href="<?= ROOT_URL ?>signup.php">Sign Up</a>
                                    </small>
                                </form>

                            </div>
                        </section>


                    </body>
                </html>
