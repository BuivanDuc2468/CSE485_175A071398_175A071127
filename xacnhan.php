<?php
//Khai báo sử dụng session
session_start();

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
if (isset($_POST["btn_xacnhan"])) {
    //Lấy dữ liệu nhập vào
    $mail = $_SESSION['emaildk'];
    //kết nối tới mySQL
	require('connect.php');
	
    $sql = "SELECT * FROM users WHERE  Email='$mail' ";
    $query = mysqli_query($conn, $sql);

    //kiểm tra email
    if (!(mysqli_num_rows($query) == 0)) {
        $sql = "UPDATE users SET activity = b'1' WHERE Email = '$mail'";
        mysqli_query($conn, $sql);
        echo'<a href="index.php">Đăng Nhập ngay</a>';
    }
}
?>
