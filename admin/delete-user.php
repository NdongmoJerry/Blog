<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


require 'config/database.php';

if(isset($_GET['id'])) {
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
 // fetch user from database
$query = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($connection, $query);
$user = mysqli_fetch_assoc($result);

// make sure we got back only one user
if(mysqli_num_rows($result) == 1) {
  $avatar_name = $user['avatar'];
  $avatar_path = '../images/' . $avatar_name;
  // delete image if available
  if ($avatar_path) {
    unlink($avatar_path);
  }
}
// For later
// fetch all thumbnails of users and delete them



// delete user from database or users table;
$delete_user_query = "DELETE FROM users WHERE id=$id";
$delete_user_result = mysqli_query($connection, $delete_user_query);
if(mysqli_errno($connection)) {
  $_SESSION['delete-user'] = "Couldn't delete user {$user['firstname']} {$user['lastname']}";
} else {
  $_SESSION['delete-user-success'] = "{$user['firstname']} {$user['lastname']} deleted successfully.";
}
}
header('location: ' . ROOT_URL . 'admin/manage-user.php');
die();