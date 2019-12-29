<?php
    $getID = $_GET['id'];
    require('../Connect.php');
    $sql = "Delete From Student where StudentCode = '$getID'";
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_query($conn,$sql)){
        header("Location:manageStudent.php");
    };
    mysqli_close($conn);
?>