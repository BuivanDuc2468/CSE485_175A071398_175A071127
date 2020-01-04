<?php
include("headerall.php");
?>
    <?php
      require("../connect.php");
      $sql = "Select * from subject";
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
            
            <p class="text-center dsgv">Danh sách Môn học</p>
            <p class="text-center dsgv"><a href="addSubject.php">Thêm môn học</a></p>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" width="30">STT</th>
                    <th scope="col" width="250">Tên Môn học</th>
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
                    echo '<td>'.$row['nameSubject'].'</td>';
                    echo '<td><a href="editsubject.php?id='.$row['SubjectID'].'"><img src="../skins/image/edit.gif" alt=""></a></td>';
                    echo '<td><a href="deletesubject.php?id='.$row['SubjectID'].'"><img src="../skins/image/deleted.jpg" alt=""></a></td>';
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