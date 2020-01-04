<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="skins/css/style-login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="skins/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Đăng Nhập Hệ Thống</h5>
            <form class="form-signin" method="POST" action="processlogin.php">

              <div class="form-label-group">
                <input type="email" class="form-control" id="defaultForm-email" name="email" placeholder="Email address" required autofocus>
              </div>
              <div class="form-label-group">
                <input type="password" class="form-control" id="defaultForm-password" name="pass" placeholder="Password" required>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="btnLogin" name="btnlogin">Đăng nhập</button>
              <hr class="my-4">
            </form>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="button"><a href="registerusers.php">Đăng ký</a></button>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Quên Mật Khẩu</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="skins/js/bootstrap.min.js"></script>
  <script src="skins/js/jqr.js"></script>
</body>

</html>