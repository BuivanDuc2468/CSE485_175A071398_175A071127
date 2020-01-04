<?php
session_start();
if($_SESSION['role']!=1){
    echo header('Location: ../index.php');
    exit();
}?>
<?php
    $getID = $_POST['msv'];
    $name=$_POST['name'];
    $sex =$_POST['sex'];
    $phone = $_POST['phone'];
    $classId = $_POST['class'];
    require('../connect.php');
    $sql = "UPDATE student SET name = '$name', sex = '$sex' , phone = '$phone' , ClassID = '$classId'  where StudentCode = '$getID'";
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_query($conn,$sql)){
        echo'Thanh cong';
        header("Location:managestudent.php");
    };
    mysqli_close($conn);
?>