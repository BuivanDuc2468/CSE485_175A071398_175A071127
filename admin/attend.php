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
        <?php
        require("../connect.php");
        $sqltch = "Select * from tch_sub_class,classone,subject where teacherCode = '$teacherID' and tch_sub_class.SubjectID = subject.SubjectID and classone.ClassID = tch_sub_class.ClassID";
        mysqli_set_charset($conn, 'UTF8');
        $resulttch = mysqli_query($conn, $sqltch);
        ?>


        <div class="main">
            <div class="content">
                <div id="content_Post">
                    <p class="text-center dsgv">Điểm danh sinh viên</p>

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
                        <?php
                        echo '<div class="col-md-3">';
                        echo ' <p>Ngày học</p>';
                        echo '<input type="date" name="dateattend" value="' . $_POST['dateattend'] . '">';
                        echo ' <div class="clear"></div>';
                        echo '</div>';
                        ?>
                        <!-- <div class="col-md-2">
                            <p>Hiển thị danh sách sv</p>

                            <input type="submit" value="       Hiển thị     ">
                        </div> -->
                    </div>

                    <?php

                    $idlop = $_POST['class12'];
                    $ngaydd = $_POST['dateattend'];

                    $class1ID = $_POST['class12'];
                    $sqlsldv = "select * from student,registration,tch_sub_class where student.StudentCode = registration.StudentID and  registration.tch_sub_class_ID = tch_sub_class.ID and tch_sub_class.ID ='$idlop'";
                    $resultslsv = mysqli_query($conn, $sqlsldv);

                    ?>
                    <?php
                    echo '<form action="attent.php?id=' . $teacherID . '" method="POST" class="form1">';
                    echo '<input type="submit" value="Lưu" name="but_insert"><br><br>';
                    echo '<input type="submit" value="Cập nhật" name="but_update"><br><br>';
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

                           

                            while ($rowslsv = mysqli_fetch_array($resultslsv)) {
                                $idsv = $rowslsv['StudentCode'];
                                $name = $rowslsv['name'];
                                $phone = $rowslsv['phone'];



                                if (isset($_POST['class12'])) {


                            ?>
                                    <tr>
                                        <td> <input type="checkbox" name="update[]" value='<?= $idsv ?>' class="checkbox2"></td>

                                        <td><input type="text" class="w-100" name="idsv_<?= $idsv ?>" readonly value="<?= $idsv ?>"></td>
                                        <td><input type="text" class="w-100" name="namestudent_<?= $idsv ?>" readonly value="<?= $name ?>"></td>
                                        <td><input type="text" class="w-100" name="phone_<?= $idsv ?>" readonly value='<?= $phone ?>'></td>
                                        <td> <input type="checkbox" name="attend_<?= $idsv ?>" value="1" class="checkbox1"></td>
                                        <td><input type="text" class="w-100" name="note_<?= $idsv ?>"></td>
                                    </tr>
                            <?php
                            }
                            echo'<td><input type="hidden" class="w-100"  name = "idclass_'.$idsv.'" readonly value = "'. $idlop .'"></td>';
                            echo'<td><input type="hidden" class="w-100"  name = "dateattend1_'.$idsv.'" readonly value = "'.$ngaydd .'"></td>';
                            }

                            ?>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

        <script src="../skins/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../skins/js/jqr_admin.js"></script>
        <script src="../skins/js/jqr.js"></script>
</body>

</html>