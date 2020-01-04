<?php
include("headerall.php");
?>
    <div class="admin">
        <div class="container">
        <?php
            require("../connect.php");
            
        ?>
      
       </div>
        <div class="main">
          <div class="content">
            <div id="content_Post">
            <p class="text-center dsgv">Thêm</p>
            

              <?php
                 
                
                echo '<form action="processaddclass-ass.php" method="POST">';
                echo '<table>';
                    echo '<tr>';
                        echo '<td>Giáo Viên</td>';
                        echo '<td>';
                        echo'<select class="inpbox w-100" name="teacher" id="class">';
                        $sql1 = "Select * from teacher";
                        $result1 = mysqli_query($conn,$sql1);
                        if(mysqli_num_rows($result1)>0){
                            while($row1 = mysqli_fetch_assoc($result1)){
                                echo'<option value="'.$row1['teacherCode'].'">'.$row1['teacherName'].'</option>';
                        }
                        }
                        echo'</select>';
                        echo '</td>';
                    echo '</tr>';
                    
                    echo '<tr>';
                        echo '<td>Lớp</td>';
                        echo '<td>';
                        echo'<select class="inpbox w-100" name="class" id="class">';
                        $sql2 = "Select * from classone";
                        $result2 = mysqli_query($conn,$sql2);
                        if(mysqli_num_rows($result2)>0){
                            while($row2 = mysqli_fetch_assoc($result2)){
                                echo'<option value="'.$row2['ClassID'].'">'.$row2['ClassName'].'</option>';
                        }
                        }
                        echo'</select>';
                        echo '</td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td>Môn học</td>';
                        echo '<td>';
                        echo'<select class="inpbox w-100" name="subject" id="class">';
                        $sql3 = "Select * from subject";
                        $result3 = mysqli_query($conn,$sql3);
                        if(mysqli_num_rows($result3)>0){
                            while($row3 = mysqli_fetch_assoc($result3)){
                                echo'<option value="'.$row3['SubjectID'].'">'.$row3['nameSubject'].'</option>';
                        }
                        }
                        echo'</select>';
                        echo '</td>';
                    echo '</tr>';
                
                    echo'<tr class="w-100 submitEditStudent">';
                        echo'<td colspan="2" style="text-align: center"><button type="submit">Lưu</button></td>';
                    echo'</tr>';
                    echo'</table>';
                    echo'</form>';
                ?>
            </div>
          </div>
        </div>
         <?php
         include("footerall.php");
         ?>
      