<!doctype html>
<html lang="en">
  <head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Skins/Css/style.css">
    <link rel="stylesheet" href="Skins/Css/styleAdmin.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Skins/Css/bootstrap.min.css">
  </head>
  <body>
    <div class="admin">
    <div class="container">
    <?php
        include 'header-admin.php';
    ?>
      
       </div>
        <div class="main">
          <div class="content">
            <div id="content_Post">
            <p class="text-center dsgv">Điểm Danh Sinh Viên</p>
            <select>
              <option value="b1">Cơ sở Dữ liệu</option>
              <option value="b2">Công Nghệ Web</option>
              <option value="b3">Lý Thuyết tính toán</option>
            </select>
            <select>
              <option value="b1">Buổi 1</option>
              <option value="b2">Buổi 2</option>
              <option value="b3">Buổi 3</option>
              <option value="b4">Buổi 4</option>
              <option value="b5">Buổi 5</option>
              <option value="b6">Buổi 6</option>
              <option value="b7">Buổi 7</option>
              <option value="b8">Buổi 8</option>
              <option value="b9">Buổi 9</option>
              <option value="b10">Buổi 10</option>
            </select>
            <select>
              <option value="b1">59TH1</option>
              <option value="b2">59TH2</option>
              <option value="b3">59TH3</option>
              <option value="b4">59TH4</option>
              <option value="b5">59HT</option>
              <option value="b6">59PM1</option>
              <option value="b7">59PM2</option>
            </select>
           

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" width="50">STT</th>
                    <th scope="col">Mã Sinh Viên</th>
                    <th scope="col">Tên Sinh Viên</th>
                    <th scope="col">Phone</th>
                    <th scope="col" width="120">Điểm Danh</th>
                    <th scope="col">Ghi chú</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>175A071398</td>
                    <td>Bùi Văn Đức</td>
                    <td>0978891268</td>
                    <td> <input type="checkbox" name="gender" value="male"></td>
                    <td>Công Nghệ Web</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>175A071398</td>
                    <td>Bùi Văn Đức</td>
                    <td>0978891268</td>
                    <td> <input type="checkbox" name="gender" value="male"></td>
                    <td>Công Nghệ Web</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>175A071398</td>
                    <td>Bùi Văn Đức</td>
                    <td>0978891268</td>
                    <td> <input type="checkbox" name="gender" value="male"></td>
                    <td>Công Nghệ Web</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>175A071398</td>
                    <td>Bùi Văn Đức</td>
                    <td>0978891268</td>
                    <td> <input type="checkbox" name="gender" value="male"></td>
                    <td>Công Nghệ Web</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>175A071398</td>
                    <td>Bùi Văn Đức</td>
                    <td>0978891268</td>
                    <td> <input type="checkbox" name="gender" value="male"></td>
                    <td>Công Nghệ Web</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>175A071398</td>
                    <td>Bùi Văn Đức</td>
                    <td>0978891268</td>
                    <td> <input type="checkbox" name="gender" value="male"></td>
                    <td>Công Nghệ Web</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>175A071398</td>
                    <td>Bùi Văn Đức</td>
                    <td>0978891268</td>
                    <td> <input type="checkbox" name="gender" value="male"></td>
                    <td>Công Nghệ Web</td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>175A071398</td>
                    <td>Bùi Văn Đức</td>
                    <td>0978891268</td>
                    <td> <input type="checkbox" name="gender" value="male"></td>
                    <td>Công Nghệ Web</td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>175A071398</td>
                    <td>Bùi Văn Đức</td>
                    <td>0978891268</td>
                    <td> <input type="checkbox" name="gender" value="male"></td>
                    <td>Công Nghệ Web</td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>175A071398</td>
                    <td>Bùi Văn Đức</td>
                    <td>0978891268</td>
                    <td> <input type="checkbox" name="gender" value="male"></td>
                    <td>Công Nghệ Web</td>
                  </tr>
                  
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
    
    <script src="Skins/JS/bootstrap.min.js" ></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="Skins/JS/jqr_Admin.js"></script>
  </body>
  
</html>
