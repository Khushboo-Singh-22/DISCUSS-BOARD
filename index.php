<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <title>Discuss Project</title>
   <?php include('./client/commonFiles.php'); ?>
</head>

<body>
   <?php
   include('./client/header.php');

   $username = $_SESSION['user']['username'] ?? null;

   if (isset($_GET['signup']) && !$username) {
      include('./client/signup.php');

   } elseif (isset($_GET['login']) && !$username) {
      include('./client/login.php');

   } elseif (isset($_GET['ask'])) {
      include('./client/ask.php');

   } elseif (isset($_GET['q-id'])) {
      $qid = intval($_GET['q-id']);
      include('./client/question-details.php');

   } elseif (isset($_GET['c-id'])) {
      $cid = intval($_GET['c-id']);
      include('./client/questions.php');

   } elseif (isset($_GET['u-id'])) {
      $uid = intval($_GET['u-id']);
      include('./client/questions.php');

   } elseif (isset($_GET['latest'])) {
      include('./client/questions.php');

   } elseif (isset($_GET['search'])) {
      $search = $_GET['search'];
      include('./client/questions.php');

   } else {
      include('./client/questions.php');
   }
   ?>
</body>

</html>