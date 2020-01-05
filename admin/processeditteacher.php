<?php
session_start();
if($_SESSION['role']!=1){
    echo header('Location: ../index.php');
    exit();
}?>
<?php
    $birthDay = $_POST['birthDay'];
    $level = $_POST['level'];
    $Phone = $_POST['phone'];
    $sex =$_POST['sex'];
    $teacherCode=$_POST['mgv'];
    $teacherName=$_POST['name'];
    
    
    require('../connect.php');
    $sql = "UPDATE teacher SET birthDay = '$birthDay', level = '$level' , Phone = '$Phone' , sex = '$sex',teacherName = '$teacherName' where TeacherCode = '$teacherCode'";
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_query($conn,$sql)){
        echo'Thanh cong';
        header("Location:manageTeacher.php");
    };
    mysqli_close($conn);
?>