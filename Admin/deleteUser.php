<?php
    $getID = $_GET['id'];
    require('../Connect.php');
    $sql = "Delete From users where userId = '$getID'";
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_query($conn,$sql)){
        header("Location:SysUser.php");
    };
    mysqli_close($conn);
?>