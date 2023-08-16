<?php
session_start();
require 'config/constants.php';
//destroy all session and user to home page
session_destroy();
header('Location: ' . ROOT_URL);
die();

?>