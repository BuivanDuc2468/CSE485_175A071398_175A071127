<?php
session_start();
if($_SESSION['role']!=1){
    echo header('Location: ../login.php');
  exit();
}?>
<?php
    $getID = $_POST['roleId'];
    $name=$_POST['name'];
    
    require('../Connect.php');
    $sql = "INSERT INTO role(roleName) values ('$name');";
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_query($conn,$sql)){
        header("Location:SysRole.php");
    };
    mysqli_close($conn);
?>