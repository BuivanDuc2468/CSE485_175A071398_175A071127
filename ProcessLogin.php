<?php
session_start();

?>
<?php
if (isset($_POST['btnlogin'])) {
    $email = trim($_POST['email']);
    $pass = trim($_POST['pass']);

    require("connect.php");

    $sql = "Select * from users where Email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass,$row['password'])) { 
            $_SESSION['role'] = $row['roleId'];

            if ($_SESSION['role'] == 1) {
                header('Location: admin/admin.php');
            } 
            else if ($_SESSION['role'] == 2) {
                if ($row['activity'] == 1) {
                   header('Location: admin/diemdanh.php');
                } else {
                   
                    echo '<script language="javascript">';
                    echo 'alert("Tài khoản của bạn chưa được kích hoạt")';
                    echo '</script>';
                    echo "<a href='index.php'> Click để về lại trang chủ</a>";
                    header('Location: index.php');
                }
            } 
            else {
                header('Location: index.php');
            }
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Sai Mật Khẩu")';
            echo '</script>';
            echo "<a href='index.php'> Click để về lại trang chủ</a>";
        }
    } 
    else {
        echo'Email sai';
        header('Location: index.php');
    }
    mysqli_close($conn);
    exit();
}
?>
