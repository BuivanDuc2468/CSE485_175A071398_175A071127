<?php
include("headerall.php");
?>
  <?php
      require("../connect.php");
      $sql = "Select * from teacher";
      mysqli_set_charset($conn,'UTF8');
      $result = mysqli_query($conn,$sql);
    ?>
   
    <div class="admin">
    <div class="container">
    
      
       </div>
        <div class="main">
          <div class="content">
            <div id="content_Post">
            <p class="text-center dsgv">Danh sách giáo Viên</p>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" width="30">STT</th>
                    <th scope="col">Mã Giáo Viên</th>
                    <th scope="col">Tên Giáo Viên</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Trình độ</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $i =1;
                  if(mysqli_num_rows($result)>0){
                      while($row = mysqli_fetch_assoc($result)){
                    echo '<tr>';
                    echo '<th scope="row">'.$i.'</th>';
                    echo '<td>'.$row['teacherCode'].'</td>';
                    echo '<td>'.$row['teacherName'].'</td>';
                    echo '<td>'.$row['Phone'].'</td>';
                    echo '<td>'.$row['sex'].'</td>';
                    echo '<td>'.$row['level'].'</td>';
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
