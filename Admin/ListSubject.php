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
            <div id="content_Post">
            <p class="text-center dsgv">Danh sách Môn học</p>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" width="100">Mã Môn</th>
                    <th scope="col">Tên Môn</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  
                  if(mysqli_num_rows($result)>0){
                      while($row = mysqli_fetch_assoc($result)){
                    echo '<tr>';
                    echo '<td>'.$row['SubjectID'].'</td>';
                    echo '<td>'.$row['nameSubject'].'</td>';
                    echo'</tr>';
                    
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
