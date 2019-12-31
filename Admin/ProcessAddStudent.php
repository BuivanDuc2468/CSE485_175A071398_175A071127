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
    $ClassID = $_POST['ClassID'];
    $StudentCode = $_POST['StudentCode'];
    require('../Connect.php');
    $selectStudentCode = "Select * from student where StudentCode = '$StudentCode' ";
    $result2 = mysqli_query($conn,$selectStudentCode);
    if(!(mysqli_num_rows($result2)>0)){

        $sql = "INSERT INTO student(name,sex,phone,ClassID,StudentCode) values ('$name','$sex','$phone','$ClassID','$StudentCode');";
        mysqli_set_charset($conn,'UTF8');
        if(mysqli_query($conn,$sql)){
            echo'Thanh cong';
            header("Location:manageStudent.php");
        };
    }
    else{
        echo "Mã sinh viên này đã tồn tại";
        echo'<div class = "clear"</div>';
        echo'<a href="addStudent.php">Nhấn để quay lại</a>';
        echo'<div class = "clear"</div>';
        
        echo'<a href="manageStudent.php">Nhấn để hủy</a>';
        
    }
    mysqli_close($conn);
?>