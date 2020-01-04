<?php
include("headerall.php");
?>
    <div class="admin">

    <div class="container">
    <?php
      require("../connect.php");
      $sql = "Select * from users,role where userId = '1' and users.roleId = role.roleId";
      mysqli_set_charset($conn,'UTF8');
      $result = mysqli_query($conn,$sql);
     
    ?>
      
       </div>
        <div class="main">
          <div class="content">
            <!-- =================teacher=========== -->
            <div id="content-teacher">
            <p class="text-center dsgv">Thông tin tài khoản</p>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên người dùng</th>
                    <th scope="col">Nhóm người dùng</th>
                    <th scope="col" width="270">Email</th>
                    <th scope="col" width="200">Số điện thoại</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                if(mysqli_num_rows($result)>0){
                  while($row = mysqli_fetch_assoc($result)){
                    echo'<tr>';
                      echo'<td>'.$row['userId'].'</td>';
                      echo'<td>'.$row['name'].'</td>';
                      echo'<td>'.$row['roleName'].'</td>';
                      echo'<td>'.$row['Email'].'</td>';
                      echo'<td>'.$row['Sdt'].'</td>';
                    echo'</tr>';
                  }
                }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <?php
        include("footerall.php"); 
        ?>