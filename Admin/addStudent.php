
    <?php
        include 'headerall.php';
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
            <p class="text-center dsgv">Thêm Sinh Viên</p>
            

              <?php
                 
               
                    echo '<form action="processaddstudent.php" method="POST">';
                      echo '<table>';
                        
                      echo '<tr>';
                      echo '<td>Mã sinh viên</td>';
                      echo '<td><input  class="inpbox" id="StudentCode" type="text" name="StudentCode" value=""></td>';
                      echo '</tr>';
                        echo '<tr>';
                            echo '<td>Tên sinh viên</td>';
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
                        echo '<td>Lớp</td>';
                        echo '<td>';
                        echo'<select class="inpbox w-100" name="ClassID" id="class">';
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
   