<?php
session_start();
if($_SESSION['role']!=1){
    echo header('Location: ../index.php');
  exit();
}?>
<?php
    $getID = $_GET['id'];
    require('../connect.php');
    $sql = "Delete From classone where ClassID = '$getID'";
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_query($conn,$sql)){
        header("Location:manageclass.php");
    };
    mysqli_close($conn);
?>