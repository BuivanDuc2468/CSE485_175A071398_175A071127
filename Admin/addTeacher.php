<?php
session_start();
if($_SESSION['role']!=1){
  echo header('Location: ../login.php');
  exit();
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
        include 'header-admin.php';
    ?>
    <div class="admin">
        <div class="container">
    
        <?php
          require("../Connect.php");
          mysqli_set_charset($conn,'UTF8');
        ?>
       </div>
        <div class="main">
          <div class="content">
            <div id="content_Post">
            <p class="text-center dsgv">Thêm Giáo Viên</p>
            

              <?php
                 
               
                    echo '<form action="ProcessAddTeacher.php" method="POST">';
                      echo '<table>';
                        
                        
                        echo '<tr>';
                            echo '<td>Tên giáo viên</td>';
                            echo '<td><input  class="inpbox" id="name" type="text" name="name" value=""></td>';
                        echo '</tr>';
                        echo '<tr>';
                          echo '<td>Giới tính</td>';
                          echo '<td>';
                            echo'<select class="inpbox w-100" name="sex" id="class">';
                                
                              echo'<option value="Nam">Nam</option>';
                              echo'<option value="Nữ">Nữ</option>';
                             
                            
                            echo'</select>';
                          echo'</td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<td>Số Điện thoại</td>';
                            echo '<td><input  class="inpbox" id="phone" type="text" name="phone" value=""></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Ngày Sinh</td>';
                        echo '<td><input  class="inpbox" id="birthday" type="text" name="birthday" value=""></td>';
                    echo '</tr>';
                        echo '<tr>';
                            echo '<td>Trình độ</td>';
                            echo'<td>';
                            echo'<select class="inpbox" name="level" id="class">';
                              
                              echo'<option value="Thạc Sĩ">Thạc Sĩ</option>';
                              echo'<option value="Tiến Sĩ">Tiến Sĩ</option>';
                              echo'<option value="Đại Học">Đại Học</option>';
                              echo'<option value="Giáo Sư">Giáo Sư</option>';
                              
                            echo'</select>';
                          echo '</td>';
                        echo '</tr>';
                       
                        echo'<tr class="w-100 submitEditStudent">';
                            echo'<td colspan="2" style="text-align: center"><button type="submit">Thêm</button></td>';
                        echo'</tr>';
                        echo'</table>';
                    echo'</form>';
                    
            
                
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
