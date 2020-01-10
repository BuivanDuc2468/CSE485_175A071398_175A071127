<?php
include("headerall.php");
?>
    <div class="admin">

    <div class="container">
   
      
       </div>
        <div class="main">
          <div class="content">
            <!-- =================teacher=========== -->
            <div id="content-teacher">
            
                <p class="text-center dsgv">Nhóm quyền</p>
                <p class="text-center dsgv"><a href="addSysrole.php">Thêm</a></p>
                
                <?php
                    require("../connect.php");
                    $sql = "Select * from role";
                    mysqli_set_charset($conn,'UTF8');
                    $result = mysqli_query($conn,$sql);
                ?>

            
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">ID</th>
                            <th scope="col">Nhóm người dùng</th>
                            <th scope="col" width="130">Sửa</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        <?php
                            $i =1;
                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo'<tr>';
                                    echo'<td>'.$i.'</td>';
                                    echo'<td>'.$row['roleId'].'</td>';
                                    echo'<td>'.$row['roleName'].'</td>';
                                    echo'<td><a href="editsysrole.php?id='.$row['roleId'].'"><img src="../skins/image/edit.gif" alt=""></a></td>';
                                    
                                    //echo'<td><a href="deletesysrole.php?id='.$row['roleId'].'"><img src="../skins/image/deleted.jpg" alt=""></a></td>';
                                    echo'</tr>';
                                    $i++;
                                }
                            }
                            mysqli_close($conn);
                        ?>
                        
                        </tbody>
                    </table>
                </div>

             
              
                    
               
             
            </div>
          </div>
        </div>
        <?php
        include("footerall.php"); 
        ?>
