<?php
session_start();
if($_SESSION['role']!=1){
    echo header('Location: ../login.php');
  exit();
}?>
<?php
    
    $name=$_POST['name'];
    
    require('../Connect.php');
    $sql = "INSERT INTO subject(nameSubject) values ('$name');";
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_query($conn,$sql)){
        header("Location:manageSubject.php");
    }
    mysqli_close($conn);
?>