<?php
session_start();
if($_SESSION['role']!=1){
  header('Location: ../index.php');
  exit();
}?>
<!doctype html>
<html lang="en">
  <head>
    <title>admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../skins/css/style.css">
    <link rel="stylesheet" href="../skins/css/styleadmin.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../skins/css/bootstrap.min.css">
  </head>
  <body>
  
    <?php
        include 'header-admin.php';
    ?>