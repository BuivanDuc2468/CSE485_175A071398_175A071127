<?php
include("headerall.php");
?>
  <?php
      $getId = $_GET['id'];
      require("../connect.php");
      $sql = "Select * from role where roleId = '$getId'";
      mysqli_set_charset($conn,'UTF8');
      $result = mysqli_query($conn,$sql);
    ?>
    
    <div class="admin">
        <div class="container">
    
      
       </div>
        <div class="main">
          <div class="content">
            <div id="content_Post">
            <p class="text-center dsgv">Chỉnh Sửa nhóm quyền</p>
            

              <?php
                 
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                    echo '<form action="processeditsysrole.php" method="POST">';
                    echo '<table>';
                        echo '<tr>';
                            echo '<td>ID</td>';
                            echo '<td><input  class="inpbox" id="masv" type="text" name="roleId" value="'.$getId.'" readonly></td>';
                        echo '</tr>';
                        
                        echo '<tr>';
                            echo '<td>Tên quyền</td>';
                            echo '<td><input  class="inpbox" id="name" type="text" name="name" value="'.$row['roleName'].'"></td>';
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