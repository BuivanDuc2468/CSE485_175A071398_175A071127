<?php
    $roleID = $_POST['roleID'];
    $name=$_POST['name'];
    $email =$_POST['Email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $password = password_hash($pass,PASSWORD_DEFAULT);
    $activity =$_POST['activity'];
    require('../Connect.php');
    $selectemail = "Select * from users where Email = '$email'";
    $result2 = mysqli_query($conn,$selectemail);
    if(!(mysqli_num_rows($result2)>0)){

        $sql = "INSERT INTO users(name,email,password,roleId,Sdt,activity) values ('$name','$email','$password','$roleID','$phone','$activity');";
        mysqli_set_charset($conn,'UTF8');
        if(mysqli_query($conn,$sql)){
            echo'Thanh cong';
            header("Location:SysUser.php");
        };
    }
    else{
        echo "Email đã tồn tại";
        echo'<div class = "clear"</div>';
        echo'<a href="addUsers.php">Nhấn để quay lại</a>';
        echo'<div class = "clear"</div>';
        
        echo'<a href="SysUser.php">Nhấn để hủy</a>';
        
    }
    mysqli_close($conn);
?>