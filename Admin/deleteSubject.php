<?php
session_start();
if($_SESSION['role']!=1){
    echo header('Location: ../index.php');
  exit();
}?>
<?php
    $getID = $_GET['id'];
    require('../Connect.php');
    $sql = "Delete From subject where SubjectID = '$getID'";
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_query($conn,$sql)){
        header("Location:manageSubject.php");
    };
    mysqli_close($conn);
?>