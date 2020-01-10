<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
if (isset($_SERVER['REQUEST_METHOD'])) {
    if (isset($_POST['nameUser']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['teacherCode'])) {
        include('connect.php');
        $nameUser = $_POST['nameUser'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        //$makichhoat=makichhoat();

        $teacherCode = $_POST['teacherCode'];
        $sqlInsert = "INSERT INTO users(name,Email,password,roleId,Sdt,teacherCode,activity) values ('$nameUser','$email','$password','2','$phone', $teacherCode,b'0' );";
        mysqli_set_charset($conn, 'UTF8');
        $sqlSelectEmail = "Select * from users where Email = '$email'";
        $sqlSelectTeacherCode = "Select * from teacher where teacherCode = '$teacherCode'";
        $resultEmail = mysqli_query($conn, $sqlSelectEmail);
        
        $sqlSelectEmailvsteachercode = "Select * from users where Email = '$email' and teahcherCode = '$teacherCode'";
        $resultTeacherCode = mysqli_query($conn, $sqlSelectTeacherCode);
        $resultEmailvsteachercode = mysqli_query($conn, $sqlSelectEmailvsteachercode);



        if ((mysqli_num_rows($resultEmail) > 0)) {
            echo '<script language="javascript">';
            echo 'alert("Email đã tồn tại")';
            echo '</script>';
            echo "<a href='registerusers.php'> Click để quay lại</a>";
        } else {
            if ((mysqli_num_rows($resultTeacherCode) > 0)) {
                if ((mysqli_num_rows($resultEmailvsteachercode) > 0)) {
                    echo 'Tài khoản của bạn đã được đăng ký với mã giáo viên' . $teacherCode . '';
                    echo '<a href="registerusers.php"> Click để quay lại</a>';
                } else {
                    $_SESSION['namedk'] = $nameUser;
                    $_SESSION['emaildk'] = $email;
                    $name = $_SESSION['namedk'];
                    $to = $email;
                    $subject = "Xác nhân đăng ký tài khoản";
                    $message = "<form action='http://localhost/175A071398_175A071127/xacnhan.php' method='POST'>" .
                        "Hello " . $name . "!" .
                        "<h5 style='color: black;'>Vui lòng click vào nút dưới để xác nhận tài khoản đăng ký</h5>" .
                        "<div class='container-login100-form-btn'>" .
                        "<button class='login100-form-btn' name='btn_xacnhan'>" .
                        "Xác nhận" .
                        "</button>" .
                        "</div>" .
                        "</form>";
                    $header  =  "From:myemail@exmaple.com \r\n";
                    $header .=  "Cc:other@exmaple.com \r\n";
                    $header .= "MIME-Version: 1.0\r\n";
                    $header .= "Content-type: text/html\r\n";
                    $success = mail($to, $subject, $message, $header);
                    if ($success) {
                        if (mysqli_query($conn, $sqlInsert)) {
                            echo '<script language="javascript">';
                            echo 'alert("Vui lòng xác nhận đăng ký qua email")';
                            echo '</script>';
                            echo "<a href='index.php'> Click để quay về trang chủ</a>";
                        } else {
                            echo 'không thể thêm user';
                            echo '<div class = "clear"></div>';
                            echo '<a href="registerusers.php"> Click để quay lại</a>';
                        }
                    } else {
                        echo 'Email không tồn tại';
                        echo '<a href="registerusers.php"> Click để quay lại</a>';
                    }
                }
            } else {
                echo '<script language="javascript">';
                echo 'alert("Sai mã giáo viên")';
                echo '</script>';
                echo "<a href='/'> Click để về trang chủ</a>";
            }
        }



        mysqli_close($conn);
    }
    //nếu chưa nhập đủ thông tin
    else {
    }
}
// function makichhoat()
// {
// 	$makichhoat="";
// 	for($i=0;$i<10;$i++)
// 	{
// 		$makichhoat.=chr(rand(65,90));
// 	}
// 	return $makichhoat;
// }
