<?php
session_start();
if($_SESSION['role']!=1){
    echo header('Location: ../index.php');
  exit();
}?>
<?php
    
    $name=$_POST['name'];
    
    require('../connect.php');
    $sql = "INSERT INTO subject(namesubject) values ('$name');";
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_query($conn,$sql)){
        header("Location:managesubject.php");
    }
    mysqli_close($conn);
?>