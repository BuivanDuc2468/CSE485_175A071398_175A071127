<?php
session_start();
if($_SESSION['role']!=1){
    echo header('Location: ../index.php');
    exit();
}?>
<?php
    $getID = $_POST['id'];
    $name=$_POST['name'];
    
    require('../Connect.php');
    $sql = "UPDATE subject SET nameSubject = '$name' where SubjectID = '$getID'";
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_query($conn,$sql)){
        echo'Thanh cong';
        header("Location:manageSubject.php");
    };
    mysqli_close($conn);
?>