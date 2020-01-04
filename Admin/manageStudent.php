
    <?php
        include 'headerall.php';
    ?>
    <?php
      require("../connect.php");
      $sql = "Select * from student,classone where classone.ClassID = student.ClassID";
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
            
            <p class="text-center dsgv">Danh sách sinh viên</p>
            <p class="text-center dsgv"><a href="addstudent.php">Thêm sinh viên</a></p>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" width="30">STT</th>
                    <th scope="col" width="200">MSV</th>
                    <th scope="col" width="250">Họ tên</th>
                    <th scope="col" width="200">Giới tính</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Lớp</th>
                    <th scope="col" width="30">Sửa</th>
                    <th scope="col" width="30">Xóa</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i =1;
                  if(mysqli_num_rows($result)>0){
                      while($row = mysqli_fetch_assoc($result)){
                    echo '<tr>';
                    echo '<th scope="row">'.$i.'</th>';
                    echo '<td>'.$row['StudentCode'].'</td>';
                    echo '<td>'.$row['name'].'</td>';
                    echo '<td>'.$row['sex'].'</td>';
                    echo '<td>'.$row['phone'].'</td>';
                    echo '<td>'.$row['ClassName'].'</td>';
                    echo '<td><a href="editstudent.php?id='.$row['StudentCode'].'"><img src="../skins/image/edit.gif" alt=""></a></td>';
                    echo '<td><a href="deletestudent.php?id='.$row['StudentCode'].'"><img src="../skins/image/deleted.jpg" alt=""></a></td>';
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
    