<?php

    $teacher=$_POST['teacher'];
    $class=$_POST['class'];
    $subject=$_POST['subject'];
    
    require('../Connect.php');
    $sql = "INSERT INTO teacher_subject_class(teacher_ID,SubjectID,ClassID) values ('$teacher','$subject','$class');";
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_query($conn,$sql)){
        header("Location:class-assignment.php");
    };
    mysqli_close($conn);
?>