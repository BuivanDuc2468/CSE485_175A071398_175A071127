<?php
    $getID = $_GET['id'];
    require('../Connect.php');
    $sql = "Delete From role where roleId = '$getID'";
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_query($conn,$sql)){
        header("Location:SysRole.php");
    };
    mysqli_close($conn);
?>