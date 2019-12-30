<?php
if($_SESSION['role']!=1){
	echo header('Location: ../login.php');
  exit();
}?>
<header id="header" class="page-header">
	<div class="container-fluid d-flex-wrap">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="logo col-md-3">
				<a href="/">
					<img src="../Skins/Image/logo.png" alt="">
				</a>
			</div>
			<div class="hor-menu nav-desktop col-md-6">
				<ul class="navmenu">
					<li class="item active">
						<a href="admin.php">Home</a>
					</li>
					<li class="item">
						<a href="javascript:;">Quản lý <i class="fa fa-angle-down"></i></a>
						<ul class="sub-menu">
							
							<li><a href="manageTeacher.php"><i class="fa fa-folder"></i>Giáo Viên</a></li>
							
							<li><a href="manageStudent.php"><i class="fa fa-folder"></i>Sinh Viên</a></li>
							
							<li><a href="manageClass.php"><i class="fa fa-folder"></i>Lóp học</a></li>
							
							<li><a href="manageclass-assignment.php"><i class="fa fa-folder"></i>Phân công lớp</a></li>
							
							<li><a href="#"><i class="fa fa-list-alt"></i>Lớp học - môn học</a></li>
							
						</ul>
					</li>
					<li class="item">
						<a class="a-open-down"></a>
						<a href="javascript:;">Thống kê<i class="fa fa-angle-down"></i></a>
						<ul class="sub-menu">
							<li><a href="ListTeacher.php"><i class="fa fa-th" aria-hidden="true"></i>Danh sách Giáo viên</a></li>
							<li><a href="ListClass.php"><i class="fa fa-eye" aria-hidden="true"></i>Danh sách lớp học</a></li>
							<li><a href="ListSubject.php"><i class="fa fa-eye" aria-hidden="true"></i>Danh sách môn học</a></li>
						</ul>
					</li>
					
					<li class="item">
						<a class="a-open-down"></a>
						<a href="javascript:;">Hệ thống <i class="fa fa-angle-down"></i></a>
						<ul class="sub-menu">
							<li><a href="SysRole.php"><i class="fa fa-users"></i>Nhóm người sử dụng</a></li>
							<li><a href="SysUser.php"><i class="fa fa-user"></i>Người sử dụng</a></li>
							
						</ul>
					</li>
				</ul>
			</div>
			<div class="top-menu col-md-2">
				<ul class="nav">
					<li class="dropdown-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
							<img src="../skins/image/avatar3_small.jpg" class="userimg" alt="">
							<span class="username">admin</span>
						</a>
						<ul class="dropdown-menu">
							
							<li>
								<a href="InfoUser.php?ID=1">
									<i class="icon-user"></i>Thông tin tài khoản
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-lock"></i>Đổi mật khẩu
								</a>
							</li>
							<li>
								<a href="../logout.php">
									<i class="icon-key"></i>Thoát
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>

