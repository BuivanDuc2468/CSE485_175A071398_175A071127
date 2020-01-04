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
            <p class="text-center dsgv">Thêm User</p>
            

              <?php
                 
               
                    echo '<form action="processaddsysuser.php" method="POST">';
                      echo '<table>';
                        
                        
                        echo '<tr>';
                            echo '<td>Tên người dùng</td>';
                            echo '<td><input  class="inpbox" id="name" type="text" name="name" value=""></td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<td>Email</td>';
                            echo '<td><input  class="inpbox" id="Email" type="Email" name="Email" value=""></td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<td>Số Điện thoại</td>';
                            echo '<td><input  class="inpbox" id="phone" type="text" name="phone" value=""></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Password</td>';
                        echo '<td><input  class="inpbox" id="pass" type="text" name="pass" value=""></td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<td>Quyền</td>';
                            echo'<td>';
                            echo'<select class="inpbox w-100" name="roleID" id="class">';
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
                            echo '<td><input  class="inpbox" id="name" type="checkbox" name="activity" value="1"></td>';
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