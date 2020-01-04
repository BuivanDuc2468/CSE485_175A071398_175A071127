<?php
include("headerall.php");
?>
    <div class="admin">
        <div class="container">
    
        <?php
          require("../connect.php");
          mysqli_set_charset($conn,'UTF8');
        ?>
       </div>
        <div class="main">
          <div class="content">
            <div id="content_Post">
            <p class="text-center dsgv">Thêm Giáo Viên</p>
            

              <?php
                 
               
                    echo '<form action="processaddteacher.php" method="POST">';
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
         include("footerall.php");
         ?>