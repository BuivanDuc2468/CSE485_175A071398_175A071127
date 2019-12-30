<?php
session_start();
if($_SESSION['role']!=1){
    echo header('Location: ../login.php');exit();
}?>
<?php
    $roleID1 = $_POST['roleId'];
    $name=$_POST['name'];
    $email =$_POST['Email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $id = $_GET['id'];
    $password = password_hash($pass,PASSWORD_DEFAULT);
    
    $activity =$_POST['activity'];
    require('../Connect.php');
    
        if(!($pass =="")){
            $sql = "UPDATE users set name = '$name',email = '$email',password = '$password',roleId = '$roleID1',Sdt = '$phone',activity = '$activity' where userId = '$id' ";
            mysqli_set_charset($conn,'UTF8');
            if(mysqli_query($conn,$sql)){
                echo'Thanh cong';
                header("Location:SysUser.php");
            };
        }
        else{
            $sql = "UPDATE users set name = '$name',email = '$email',roleId = '$roleID1',Sdt = '$phone',activity = '$activity' where userId = '$id' ";
            mysqli_set_charset($conn,'UTF8');
            if(mysqli_query($conn,$sql)){
                echo'Thanh cong';
                header("Location:SysUser.php");
            };
        }
    
    
    mysqli_close($conn);
?>