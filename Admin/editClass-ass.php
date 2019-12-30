<?php
session_start();
if($_SESSION['role']!=1){
    echo header('Location: ../login.php');
  exit();
}?>