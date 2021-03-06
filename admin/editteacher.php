<?php
session_start();
if ($_SESSION['role'] != 1) {
    echo header('Location: ../index.php');
} ?>
<!doctype html>
<html lang="en">

<head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../skins/css/style.css">
    <link rel="stylesheet" href="../skins/css/styleAdmin.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../skins/css/bootstrap.min.css">
</head>

<body>
    <?php
    $getId = $_GET['id'];
    require("../Connect.php");
    $sql = "Select * from teacher where teacherCode= '$getId'";
    mysqli_set_charset($conn, 'UTF8');
    $result = mysqli_query($conn, $sql);
    ?>
    <?php
    include 'header-admin.php';
    ?>
    <div class="admin">
        <div class="container">


        </div>
        <div class="main">
            <div class="content">
                <div id="content_Post">
                    <p class="text-center dsgv">Chỉnh Sửa Giáo Viên</p>


                    <?php

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<form action="processeditteacher.php" method="POST">';
                            echo '<table>';

                            echo '<tr>';
                            echo '<td>Mã giáo viên</td>';
                            echo '<td><input  class="inpbox" id="mgv" type="text" name="mgv" value="' . $row['teacherCode'] . '" readonly></td>';
                            echo '</tr>';
                            echo '<tr>';
                            echo '<td>Tên giáo viên</td>';
                            echo '<td><input  class="inpbox" id="name" type="text" name="name" value="' . $row['teacherName'] . '"></td>';
                            echo '</tr>';

                            echo '<tr>';
                            echo '<td>Giới tính</td>';
                            echo '<td><input  class="inpbox" id="sex" type="text" name="sex" value="' . $row['sex'] . '"></td>';
                            echo '</tr>';;
                            echo '<tr>';
                            echo '<td>Ngày sinh</td>';
                            echo '<td><input  class="inpbox" id="phone" type="text" name="birthDay" value="' . $row['birthDay'] . '"></td>';
                            echo '</tr>';
                            echo '<tr>';
                            echo '<td>Số Điện thoại</td>';
                            echo '<td><input  class="inpbox" id="phone" type="text" name="phone" value="' . $row['Phone'] . '"></td>';
                            echo '</tr>';



                            echo '<tr>';
                            echo '<td>Trình độ</td>';
                            echo '<td>';
                            echo '<select class="inpbox" name="level" id="class">';

                            echo '<option value="Thạc Sĩ">Thạc Sĩ</option>';
                            echo '<option value="Tiến Sĩ">Tiến Sĩ</option>';
                            echo '<option value="Đại Học">Đại Học</option>';
                            echo '<option value="Giáo Sư">Giáo Sư</option>';

                            echo '</select>';
                            echo '</td>';
                            echo '</tr>';

                            echo '<tr class="w-100 submiteditstudent">';
                            echo '<td colspan="2" style="text-align: center"><button type="submit">Lưu</button></td>';
                            echo '</tr>';
                            echo '</table>';
                            echo '</form>';
                        }
                    }


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

    <script src="../skins/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../skins/js/jqr_admin.js"></script>
</body>

</html>