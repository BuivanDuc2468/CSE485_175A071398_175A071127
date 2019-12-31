<?php
session_start();

if(isset($_SESSION['role']) && $_SESSION['role'] != NULL){

   //kiểm tra nếu có session tên us thì xóa nó đi
    unset($_SESSION['role']);
    //unset($_SESSION['email']);
    echo header('Location: index.php');
}

?>