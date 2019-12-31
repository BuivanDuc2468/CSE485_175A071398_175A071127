<?php
session_start();
if($_SESSION['role']!=1){
  echo header('Location: ../index.php');
  exit();
}?>
<!doctype html>
<html lang="en">
  <head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Skins/Css/style.css">
    <link rel="stylesheet" href="../Skins/Css/styleAdmin.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Skins/Css/bootstrap.min.css">
  </head>
  <body>
  
    <?php
        include 'header-admin.php';
    ?>
    <div class="admin">
        <div class="container">
        <?php
            require("../Connect.php");
            
        ?>
      
       </div>
        <div class="main">
          <div class="content">
            <div id="content_Post">
            <p class="text-center dsgv">Thêm</p>
            

              <?php
                 
                
                echo '<form action="ProcessaddClass-ass.php" method="POST">';
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
        include("footer.php"); 
        ?>
    </div>
  
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script src="../Skins/JS/bootstrap.min.js" ></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../Skins/JS/jqr_Admin.js"></script>
  </body>
  
</html>
