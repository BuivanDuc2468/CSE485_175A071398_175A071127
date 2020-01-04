<?php
include("headerall.php");
?>
    <div class="admin">

    <div class="container">
    <?php
      require("../connect.php");
      $sql = "Select * from classone,teacher where classone.homeroomTeacher = teacher.teacherCode";
      mysqli_set_charset($conn,'UTF8');
      $result = mysqli_query($conn,$sql);
    ?>
      
       </div>
        <div class="main">
          <div class="content">
            <!-- =================teacher=========== -->
            <div id="content-teacher">
            <p class="text-center dsgv">Danh sách Lớp học</p>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" width="30">STT</th>
                    <th scope="col" width="170">Mã lớp</th>
                    <th scope="col" width="170">Tên lớp</th>
                    <th scope="col">Giáo Viên Chủ nhiệm</th>
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
                          echo'<th scope="row">'.$i.'</th>';
                          echo'<td>'.$row['ClassID'].'</td>';
                          echo '<td>'.$row['ClassName'].'</td>';
                          echo '<td>'.$row['teacherName'].'</td>';
                          echo '<td><a href="#"><img src="../skins/image/edit.gif" alt=""></a></td>';
                          echo '<td><a href="deleteClass.php?id='.$row['ClassID'].'"><img src="../skins/image/deleted.jpg" alt=""></a></td>';
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
