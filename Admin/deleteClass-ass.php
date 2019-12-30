<?php
session_start();
if($_SESSION['role']!=1){
    echo header('Location: ../login.php');
}?>
<?php
    $getID = $_GET['id'];
    require('../Connect.php');
    $sql = "Delete From teacher_subject_class where ID = '$getID'";
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_query($conn,$sql)){
        header("Location:manageclass-assignment.php");
    };
    mysqli_close($conn);
?>