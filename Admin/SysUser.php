<?php
include("headerall.php");
?>
  <?php
      require("../Connect.php");
      $sql = "Select * from users,role where role.roleId = users.roleId and userId>1";
      mysqli_set_charset($conn,'UTF8');
      $result = mysqli_query($conn,$sql);
    ?>
  
    <div class="admin">

    <div class="container">
   
      
       </div>
        <div class="main">
          <div class="content">
            <!-- =================teacher=========== -->
            <div id="content-teacher">
            <p class="text-center dsgv">Users</p>
            <p class="text-center dsgv"><a href="addUsers.php">Thêm</a></p>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">ID</th>
                    <th scope="col" width="200">Tên người dùng</th>
                    <th scope="col">Nhóm người dùng</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Mã Giáo Viên</th>
                    <th scope="col" width="130">Activity</th>
                    <th scope="col" width="100">Sửa</th>
                    <th scope="col" width="100">Xóa</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $i = 1;
                  if(mysqli_num_rows($result)>0){
                      while($row = mysqli_fetch_assoc($result)){
                          echo '<tr>';
                          echo'<th scope="row">'.$i.'</th>';
                          echo'<td>'.$row['userId'].'</td>';
                          echo '<td>'.$row['name'].'</td>';
                          echo '<td>'.$row['roleName'].'</td>';
                          echo '<td>'.$row['Email'].'</td>';
                          echo '<td>'.$row['Sdt'].'</td>';
                          echo '<td>'.$row['teacherCode'].'</td>';
                          echo '<td>'.$row['activity'].'</td>';
                          echo '<td><a href="edituser.php?id='.$row['userId'].'"><img src="../skins/image/edit.gif" alt=""></a></td>';
                          echo '<td><a href="deleteuser.php?id='.$row['userId'].'"><img src="../skins/image/deleted.jpg" alt=""></a></td>';
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
        <?php
        include("footerall.php"); 
        ?>
