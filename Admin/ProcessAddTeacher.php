<?php
session_start();
if($_SESSION['role']!=1){
    echo header('Location: ../index.php');
  exit();
}?>
<?php
    $name=$_POST['name'];
    $sex =$_POST['sex'];
    $phone = $_POST['phone'];
    $birthday = $_POST['birthday'];
    $level = $_POST['level'];
    require('../connect.php');
    $selectemail = "Select * from teacher where teacherName = '$name' and sex = '$sex' and Phone = '$phone' and birthDay = '$birthday'";
    $result2 = mysqli_query($conn,$selectemail);
    if(!(mysqli_num_rows($result2)>0)){

        $sql = "INSERT INTO teacher(teacherName,sex,Phone,level,birthDay) values ('$name','$sex','$phone','$level','$birthday');";
        mysqli_set_charset($conn,'UTF8');
        if(mysqli_query($conn,$sql)){
            echo'Thanh cong';
            header("Location:manageteacher.php");
        };
    }
    else{
        echo "Giáo Viên này đã tồn tại";
        echo'<div class = "clear"</div>';
        echo'<a href="addteacher.php">Nhấn để quay lại</a>';
        echo'<div class = "clear"</div>';
        
        echo'<a href="manageteacher.php">Nhấn để hủy</a>';
        
    }
    mysqli_close($conn);
?>