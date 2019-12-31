<?php
session_start();
if($_SESSION['role']!=1){
  echo header('Location: ../index.php');
}?>
<!doctype html>
<html lang="en">
  <head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Skins/Css/style.css">
    <link rel="stylesheet" href="../Skins/Css/styleAdmin.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Skins/Css/bootstrap.min.css">
  </head>
  <body>
  <?php
     $getId = $_GET['id'];
      require("../Connect.php");
      $sql = "Select * from users,role where userId =  '$getId' and users.roleId = role.roleId";
      mysqli_set_charset($conn,'UTF8');
      $result = mysqli_query($conn,$sql);
    ?>
    <?php
        include 'header-admin.php';
    ?>
    <div class="admin">
        <div class="container">
    
      
       </div>
        <div class="main">
          <div class="content">
            <div id="content_Post">
            <p class="text-center dsgv">Chỉnh Sửa Tài khoản</p>
            

              <?php
                 
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                    echo '<form action="ProcessEditUser.php?id='.$row['userId'].'" method="POST">';
                    echo '<table>';
                        
                        
                        echo '<tr>';
                            echo '<td>Tên người dùng</td>';
                            echo '<td><input  class="inpbox" id="name" type="text" name="name" value="'.$row['name'].'"></td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<td>Email</td>';
                            echo '<td><input  class="inpbox" id="Email" type="Email" name="Email" value="'.$row['Email'].'"></td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<td>Số Điện thoại</td>';
                            echo '<td><input  class="inpbox" id="phone" type="text" name="phone" value="'.$row['Sdt'].'"></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Password</td>';
                        echo '<td><input  class="inpbox" id="pass" type="text" name="pass" value="" placeholder="Nhập mật khẩu mới(Nếu cần)"></td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<td>Quyền</td>';
                            echo'<td>';
                                echo'<select class="inpbox w-100" name="roleId" id="class">';
                                echo'<option value selected="false" disabled="true">'.$row['roleName'].'</option>';
                                
                                $sql3 = "Select * from role";
                                $result3 = mysqli_query($conn,$sql3);
                                if(mysqli_num_rows($result3)>0){
                                    while($row3 = mysqli_fetch_assoc($result3)){
                                        echo'<option value="'.$row3['roleId'].'">'.$row3['roleName'].'</option>';
                                    }
                                }
                                echo'</select>';
                            echo '</td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<td>Activity</td>';
                            echo '<td><input  class="inpbox" id="name" type="checkbox" name="activity" value="1" checked></td>';
                        echo '</tr>';
                        echo'<tr class="w-100 submitEditStudent">';
                            echo'<td colspan="2" style="text-align: center"><button type="submit">Lưu</button></td>';
                        echo'</tr>';
                        echo'</table>';
                        echo'</form>';
                            }
                        
                        }
                ?>
            </div>
          </div>
        </div>
         
      <?php
        include("footer.php"); 
        ?>
    </div>
  
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script src="../Skins/JS/bootstrap.min.js" ></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../Skins/JS/jqr_Admin.js"></script>
  </body>
  
</html>
