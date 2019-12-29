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
    <?php
      require("../Connect.php");
      $sql = "Select * from Student,ClassOne where ClassOne.ClassID = Student.ClassID";
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
                    echo '<td><a href="editStudent.php?id='.$row['StudentCode'].'"><img src="../Skins/Image/edit.gif" alt=""></a></td>';
                    echo '<td><a href="deleteStudent.php?id='.$row['StudentCode'].'"><img src="../Skins/Image/deleted.jpg" alt=""></a></td>';
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
