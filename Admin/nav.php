
<?php
if($_SESSION['role']!=1){
    echo header('Location: ../index.php');
  exit();
}?>
<div class="clear"></div>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <div class="dashboard-stat blue-madison">
            <div class="visual">
                <i class="fa fa-th"></i>
            </div>
            <div class="details">
                <div class="number">Giáo Viên</div>
            </div>
            <a href="manageteacher.php" class="more" id="qlgv">Xem thêm<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <div class="dashboard-stat red-intense">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">Sinh Viên</div>
            </div>
            <a href="managestudent.php" class="more" id="qlsv">Xem thêm<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <div class="dashboard-stat purple-plum">
            <div class="visual">
                <i class="fa fa-list-alt"></i>
            </div>
            <div class="details">
                <div class="number">Bài Viết</div>
            </div>
            <a href="#" class="more" id="qlpst">Xem thêm<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div> -->
    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <div class="dashboard-stat green-haze">
            <div class="visual">
                <i class="fa fa-money"></i>
            </div>
            <div class="details">
                <div class="number">Lớp Học</div>
            </div>
            <a href="manageclass.php" class="more" id="qlcls">Xem thêm<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <div class="dashboard-stat blue-madison">
            <div class="visual">
                <i class="fa fa-folder"></i>
            </div>
            <div class="details">
                <div class="number">Môn học</div>
            </div>
            <a href="managesubject.php" class="more">Xem thêm<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <div class="dashboard-stat red-intense">
            <div class="visual">
                <i class="fa fa-columns"></i>
            </div>
            <div class="details">
                <div class="number">Phân Lớp</div>
            </div>
            <a href="manageclass-assignment.php" class="more">Xem thêm<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div> -->
    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <div class="dashboard-stat purple-plum">
            <div class="visual">
                <i class="fa fa-user"></i>
            </div>
            <div class="details">
                <div class="number">Người sử dụng</div>
            </div>
            <a href="sysuser.php" class="more">Xem thêm<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <div class="dashboard-stat green-haze">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number">Hệ thống</div>
            </div>
            <a href="diemdanh.php" class="more">Xem thêm<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
<div class="clear"></div>