<?php
include("headerall.php");
?>
    <div class="admin">

    <div class="container">
    <?php
      require("../connect.php");
      $sql = "Select * from teacher_subject_class,teacher,subject,classone where teacher_subject_class.ClassID = classone.ClassID and teacher_subject_class.SubjectID = subject.SubjectID and teacher_subject_class.teacher_ID = teacher.teacherCode";
      mysqli_set_charset($conn,'UTF8');
      $result = mysqli_query($conn,$sql);
    ?>
      
       </div>
        <div class="main">
          <div class="content">
            <!-- =================teacher=========== -->
            <div id="content-teacher">
                <p class="text-center dsgv">Phân Công giảng dạy</p>
                <p class="text-center dsgv"><a href="addclass-assignment.php">Thêm</a></p>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" width="30">ID</th>
                        <th scope="col" >Tên lớp</th>
                        <th scope="col" >Giáo Viên</th>
                        <th scope="col">Môn Học</th>
                        <th scope="col" width="30">Xóa</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo'<td>'.$row['ID'].'</td>';
                            echo '<td>'.$row['ClassName'].'</td>';
                            echo '<td>'.$row['teacherName'].'</td>';
                            echo '<td>'.$row['nameSubject'].'</td>';
                            echo '<td><a href="deleteclass-ass.php?id='.$row['ID'].'"><img src="../skins/image/deleted.jpg" alt=""></a></td>';
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