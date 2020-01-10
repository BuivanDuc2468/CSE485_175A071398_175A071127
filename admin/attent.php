<?php
session_start();
if ($_SESSION['role'] != 2) {
  header('Location: ../index.php');
  exit();
} ?>
<!doctype html>
<html lang="en">

<head>
  <title>Diem danh</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../skins/css/style.css">
  <link rel="stylesheet" href="../skins/css/styleadmin.css">

  <link rel="stylesheet" href="../skins/css/bootstrap.min.css">
</head>

<body>

  <?php
  include 'header-teacher.php';
  $teacherID = $_GET['id'];
  ?>
  <div class="admin">
    <div class="container">
      <?php
      require("../connect.php");
      $sqltch = "Select * from tch_sub_class,classone,subject where teacherCode = '$teacherID' and tch_sub_class.SubjectID = subject.SubjectID and classone.ClassID = tch_sub_class.ClassID";
      mysqli_set_charset($conn, 'UTF8');
      $resulttch = mysqli_query($conn, $sqltch);
      ?>
    </div>
    <div class="main">
      <div class="content">
        <div id="content_Post">
          <p class="text-center dsgv">Điểm danh sinh viên</p>
          <?php
          echo '<form action="attend.php?id=' . $teacherID . '" method="POST" class="form1">';
          ?>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3">
              <p>Lớp học</p>
              <?php
              echo '<select class="class1" name="class12" id="class1">';
              if (mysqli_num_rows($resulttch) > 1) {
                while ($rowtch = mysqli_fetch_assoc($resulttch)) {
                  echo '<option value="' . $rowtch['ID'] . '">' . $rowtch['ClassName'] . '-' . $rowtch['nameSubject'] . '</option>';
                }
              }
              echo '</select>';
              ?>
            </div>
            <div class="col-md-3">
              <p>Ngày học</p>
              <input type="date" name="dateattend">
              <div class="clear"></div>
            </div>
            <div class="col-md-2">
              <p>Hiển thị danh sách sv</p>

              <input type="submit" value="       Hiển thị     ">
            </div>
          </div>
          </form>
          <?php
          if (isset($_POST['class12'])) {
            $class1ID = $_POST['class12'];
            $sqlsldv = "select * from student,registration,tch_sub_class where student.StudentCode = registration.StudentID and  registration.tch_sub_class_ID = tch_sub_class.ID and tch_sub_class.ID ='$class1ID'";
            $resultslsv = mysqli_query($conn, $sqlsldv);

          ?>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col"><input type="checkbox" id="checkall"></th>
                  <th scope="col">Mã Sinh Viên</th>
                  <th scope="col">Tên Sinh Viên</th>
                  <th scope="col">Phone</th>
                  <th scope="col" width="20"><input type="checkbox" id="checkall1"></th>
                  <th scope="col">Ghi chú</th>
                  <!-- <th scope="col">Lưu</th> -->
                </tr>
              </thead>
              <tbody>
                <?php
                echo '<form action="attent.php?id=' . $teacherID . '" method="POST" class="form1">';
                //if (mysqli_num_rows($resultslsv) > 1) {
                while ($rowslsv = mysqli_fetch_array($resultslsv)) {
                  $idsv = $rowslsv['StudentCode'];
                  $name = $rowslsv['name'];
                  $phone = $rowslsv['phone'];



                  if (isset($_POST['class12'])) {


                ?>
                    <tr>
                      <td> <input type="checkbox" name="update[]" value='<?= $idsv ?>' class="checkbox2"></td>

                      <td><input type="text" class="w-100" name="idsv_<? $idsv ?>" readonly value="<? $idsv ?>"></td>
                      <td><input type="text" class="w-100" name="namestudent_<? $idsv ?>" readonly value="<? $name ?>"></td>
                      <td><input type="text" class="w-100" name="phone_<? $idsv ?>" readonly value='<? $phone ?>'></td>
                      <td> <input type="checkbox" name="attend_<? $idsv ?>" value="1" class="checkbox1"></td>
                      <td><input type="text" class="w-100" name="note_<? $idsv ?>"></td>
                    </tr>
              <?php
                  }


                  echo '<input type="submit" class = "but_insert" value="Điểm danh" name = "insertall">';
                  echo '<input type="submit" class = "but_update" value="UPDATE" name = "updateall">';
                  if (isset($_POST['class12'])) {
                    echo '<td>' . '<input type="hidden" class="w-100"  name = "idclass" readonly value = "' . $_POST['class12'] . '">' . '</td>';
                    echo '<br></br>';
                    echo '<td>' . '<input type="hidden" class="w-100"  name = "dateattend1" readonly value = "' . $_POST['dateattend'] . '">' . '</td>';
                  }
                  echo '</form>';
                }
              }
              ?>
            </table>
        </div>
      </div>
    </div>
    <?php
    if (isset($_POST['but_update'])) {
      if (isset($_POST['update'])) {
        foreach ($_POST['update'] as $updateid) {

          $idsv = $_POST['idsv_' . $updateid];
          $dateattend1 = $_POST['dateattend1_' . $updateid];
          $idclass = $_POST['idclass_' . $updateid];
          $checkbox1 = $_POST['attend_' . $updateid];
          $note = $_POST['note_' . $updateid];

          if ($idsv != ''  && $dateattend1 != '') {
            $updateattend = "UPDATE attend SET status='" . $checkbox1 . "' WHERE studentCode ='" . $idsv . "' and Dayattend = '" . $dateattend1 . "'";
            if (mysqli_query($conn, $updateattend)) {
              echo 'thành công';
              header('Location: attent.php?id=' . $teacherID . '');
            } else {

              die();
            }
          }
        }
      }
    }
    if (isset($_POST['but_insert'])) {
      if (isset($_POST['update'])) {
        foreach ($_POST['update'] as $updateid) {
          $idsv = $_POST['idsv_' . $updateid];
          $dateattend1 = $_POST['dateattend1_' . $updateid];
          $idclass = $_POST['idclass_' . $updateid];
          $checkbox1 = $_POST['attend_' . $updateid];
          $note = $_POST['note_' . $updateid];

          if ($idsv != ''  && $dateattend1 != '') {
            //$inserttend = "insert into attend(Dayattend,note,status,studentCode,tch_sub_class_ID) values('" . $dateattend1 . "','" . $note . "','" . $checkbox1 . "','" . $idsv . "','" . $idclass . "')";
            $insert = "insert into attend(Dayattend,studentCode,tch_sub_class_ID,status,note) values('$dateattend1','$idsv','$idclass','$checkbox1','$note');";
            if (mysqli_query($conn, $insert)) {
              echo 'thành công';
              header('Location: attent.php?id=' . $teacherID . '');
            } else {

              die();
            }
          }
        }
      }
    }
    ?>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="../skins/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../skins/js/jqr_admin.js"></script>
    <script src="../skins/js/jqr.js"></script>
</body>

</html>