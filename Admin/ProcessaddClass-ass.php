<?php
session_start();
if($_SESSION['role']!=1){
    echo header('Location: ../index.php');
  exit();
}?>
<?php

    $teacher=$_POST['teacher'];
    $class=$_POST['class'];
    $subject=$_POST['subject'];
    
    require('../connect.php');
    $sql = "INSERT INTO tch_sub_class(teacherCode,SubjectID,ClassID) values ('$teacher','$subject','$class');";
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_query($conn,$sql)){
        header("Location:manageclass-assignment.php");
    };
    mysqli_close($conn);
?>