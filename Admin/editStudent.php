<?php
include("headerall.php");
?>

<?php
    $getId = $_GET['id'];
      require("../connect.php");
      $sql = "Select * from Student,ClassOne Where ClassOne.ClassID = Student.ClassID and StudentCode= '$getId'";
      mysqli_set_charset($conn,'UTF8');
      $result = mysqli_query($conn,$sql);
    ?>
    <div class="admin">
        <div class="container">
    
      
       </div>
        <div class="main">
          <div class="content">
            <div id="content_Post">
            <p class="text-center dsgv">Chỉnh Sửa sinh Viên</p>
            

              <?php
                 
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                    echo '<form action="processeditstudent.php" method="POST">';
                    echo '<table>';
                        echo '<tr>';
                            echo '<td>Mã Sinh Viên</td>';
                            echo '<td><input  class="inpbox" id="masv" type="text" name="msv" value="'.$getId.'"></td>';
                        echo '</tr>';
                        
                        echo '<tr>';
                            echo '<td>Họ tên</td>';
                            echo '<td><input  class="inpbox" id="name" type="text" name="name" value="'.$row['name'].'"></td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<td>Giới tính</td>';
                            echo '<td><input  class="inpbox" id="sex" type="text" name="sex" value="'.$row['sex'].'"></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Lớp</td>';
                        echo '<td>';
                            echo'<select class="inpbox w-100" name="class" id="class">';
                            echo'<option value selected="false" disabled="true">'.$row['ClassName'].'</option>';
                            $sql2 = "Select * from classone";
                            $result2 = mysqli_query($conn,$sql2);
                            if(mysqli_num_rows($result2)>0){
                                while($row2 = mysqli_fetch_assoc($result2)){
                                    echo'<option value="'.$row2['ClassID'].'">'.$row2['ClassName'].'</option>';
                            }
                            }
                            echo'</select>';
                        echo '</td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<td>Số Điện thoại</td>';
                            echo '<td><input  class="inpbox" id="masv" type="text" name="phone" value="'.$row['phone'].'"></td>';
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
         include("footerall.php");
         ?>
