<?php
include("headerall.php");
?>
    <div class="admin">
        <div class="container">
    
      
       </div>
        <div class="main">
          <div class="content">
            <div id="content_Post">
            <p class="text-center dsgv">Thêm nhóm quyền</p>
            

              <?php
                 
               
                    echo '<form action="processaddsysrole.php" method="POST">';
                    echo '<table>';
                        
                        
                        echo '<tr>';
                            echo '<td>Nhóm quyền</td>';
                            echo '<td><input  class="inpbox" id="name" type="text" name="name" value=""></td>';
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
