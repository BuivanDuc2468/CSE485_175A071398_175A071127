<?php
    $getID = $_GET['id'];
    require('../Connect.php');
    $sql = "Delete From teacher where teacherCode = $getID";
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_query($conn,$sql)){
        header("Location:manageTeacher.php");
    };
    mysqli_close($conn);
?>