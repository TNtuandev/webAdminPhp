<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
  <link rel="stylesheet" href="./CSS/sidebar.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Tạo tài khoản</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    .box-content {
      margin: 0 auto;
      width: 800px;
      border: 1px solid #ccc;
      text-align: center;
      padding: 20px;
    }

    #create_user form {
      width: 200px;
      margin: 40px auto;
    }

    #create_user form input {
      margin: 5px 0;
    }
  </style>
</head>

<body>
  <div class="sidebar-container">
    <div class="sidebar-logo">
      <a href="./admin.php">
        <img src="./assets/LOGO.png" width="160" , height="80">
      </a>
    </div>
    <ul class="sidebar-navigation">
      <li class="header">Quản lý Khách Hàng</li>
      <li>
        <a href="./tongquan.php">
          <i class="fa fa-home" aria-hidden="true"></i> Khách Hàng
        </a>
      </li>
      <li>
        <a href="./addNewUser.php">
          <i class="fa fa-users" aria-hidden="true"></i> Thêm mới
        </a>
      </li>
      <li>
        <a href="./login.php">
          <i class="fa fa-tachometer" aria-hidden="true"></i> Đăng Xuất
        </a>
      </li>
    </ul>
  </div>


  <?php
  $error = false;
  if (isset($_GET['id']) && !empty($_GET['id'])) {
    include './connection.php';
    $result = mysqli_query($conn, "DELETE FROM `user` WHERE `id` = " . $_GET['id']);
    if (!$result) {
      $error = "Không thể xóa tài khoản.";
    }
    mysqli_close($conn);
    if ($error !== false) {
  ?>
      <div id="error-notify" class="box-content">
        <h1>Thông báo</h1>
        <h4><?= $error ?></h4>
        <a href="./tongquan.php">Danh sách tài khoản</a>
      </div>
    <?php } else { ?>
      <div id="success-notify" class="box-content">
        <h1>Xóa tài khoản thành công</h1>
        <a href="./tongquan.php">Danh sách tài khoản</a>
      </div>
    <?php } ?>
  <?php } ?>
</body>

</html>