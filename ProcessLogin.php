
<?php
        
        $email = trim($_POST['email']);
        $pass = trim($_POST['pass']);
        
        require("Connect.php");
       
        $sql = "Select * from users where Email = '$email'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_assoc($result);
            
        
            if(password_verify($pass,$row['password']))
            { 
                session_start();
                //$_SESSION['email'] = $email;
                $_SESSION['name'] = $row['name'];
                $_SESSION['role'] = (int)$row['roleId'];
                $_SESSION['activity'] = $row['activity'];
                
                if($_SESSION['role']==1){
                    echo header('Location: Admin/admin.php');
                }
                else if($_SESSION['role']==2){
                    if($_SESSION['activity']==1){
                        echo header('Location: Admin/Diemdanh.php');
                    }
                    else{
                        echo header('Location: index.php');
                        echo '<script language="javascript">';
                        echo 'alert("Tài khoản của bạn chưa được kích hoạt")';
                        echo '</script>';
                        echo "<a href='index.php'> Click để về lại trang chủ</a>";
			            
                        
                    }
                }
                else{
                    echo header('Location: index.php');
                }
            }
            else{
                //echo header('Location: index.php');
                echo '<script language="javascript">';
                echo 'alert("Sai Mật Khẩu")';
                echo '</script>';
                echo "<a href='index.php'> Click để về lại trang chủ</a>";
                
            }
        }
        else{
            echo header('Location: index.php');
        }
        mysqli_close($conn);
        exit();
    
?>