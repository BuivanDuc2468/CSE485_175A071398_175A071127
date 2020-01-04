<?php 
   session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
<title>Register Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="skins/css/style-register.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Đăng ký tài khoản</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="processregister.php" method="POST">
                    <div class="row">
                        <label for=”uername”>Tên người dùng:</label>
                        <input class="text" type="text" name="nameUser" placeholder="Username">
                    </div>
					<div class="row">
                        <label for=”uername”>Email:</label>
                        <input class="text email" type="email" name="email" placeholder="Email">
                        
                    </div>
					<div class="row">
                        <label for=”uername”>Phone:</label>
                        <input class="text email" type="text" name="phone" placeholder="Số điện thoại">
                    </div>
                    <div class="row">
                        <label for=”uername”>Mã Giáo Viên</label>
                        <input class="text w3lpass" type="text" name="teacherCode" placeholder="Nhập mã giáo viên">
                    </div>
                    <div class="row">
                        <label for=”uername”>Password:</label>
                        <input class="text" type="password" name="password" placeholder="Nhập mật khẩu">
                    </div>
					<button type="submit" class="btn_dangkyUser">Đăng Ký</button>
				</form>
				<p>Bạn đã có tài khoản? <a href="/"> Đăng nhập ngay!</a></p>
			</div>
		</div>
		
		
	</div>
	<!-- //main -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="skins/js/bootstrap.min.js" ></script>
    <script src="skins/js/jqr.js"></script>
</body>
</html>