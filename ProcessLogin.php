
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
                        echo header('Location: login.php');
                        echo '<script language="javascript">';
                        echo 'alert("Tài khoản của bạn chưa được kích hoạt")';
                        echo '</script>';
                        echo "<a href='login.php'> Click để về lại trang chủ</a>";
			            exit();
                        
                    }
                }
                else{

                }
            }
            else{
                
            }
        }
        else{
            echo header('Location: login.php');
        }
        mysqli_close($conn);
    
?>