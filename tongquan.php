<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="./CSS/sidebar.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://www.w3schools.com/lib/w3.js"></script>
  <title>Document</title>
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
          <i class="fa fa-users" aria-hidden="true"></i> Thêm Mới
        </a>
      </li>
      <li>
        <a href="./login.php">
          <i class="fa fa-tachometer" aria-hidden="true"></i>Đăng Xuất
        </a>
      </li>
    </ul>
  </div>

  <body>


    <div>
      <h1 style="margin-left: 500px;">Danh Sách Tài Khoản Đặc Biệt</h1>
      <?php
      include './connection.php';
      $result = mysqli_query($conn, "SELECT *
      from user
      order by point desc
      limit 3");
      mysqli_close($conn);
      ?>
      <table class="table table-striped" style="margin-left: 280px; width: 70%"> >
        <thead>
          <tr>
            <th scope="col">Stt</th>
            <th scope="col">Tài Khoản</th>
            <th scope="col">Điểm Thưởng</th>

          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <tr>
              <th scope="row"><?= $row['id'] ?></th>
              <td><?= $row['username'] ?></td>
              <td><?= $row['point'] ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <?php

    include './connection.php';
    $result = mysqli_query($conn, "SELECT * FROM user");
    mysqli_close($conn);
    ?>

    <div id="user-info">
      <h2 style="margin-left: 500px; margin-top:50px ">Danh Sách Tài Khoản</h2>
      <!-- <a href="./create_user.php">Tạo tài khoản mới</a> -->
      <table id="user-listing" class="table table-striped" style="margin-left: 280px; width: 70%; margin-top:100px ">
        <thead>
          <tr>
            <td onclick="w3.sortHTML('#user-listing', '.item', 'td:nth-child(1)')" scope="col">Tài Khoản</td>
            <td onclick="w3.sortHTML('#user-listing', '.item', 'td:nth-child(2)')" scope="col">Trạng thái</td>
            <td onclick="w3.sortHTML('#user-listing', '.item', 'td:nth-child(4)')" scope="col">Điểm Thưởng</td>
            <td onclick="w3.sortHTML('#user-listing', '.item', 'td:nth-child(3)')" scope="col">Cập nhật lần cuối</td>
            <td onclick="w3.sortHTML('#user-listing', '.item', 'td:nth-child(4)')" scope="col">Ngày lập</td>
            <td scope="col">Sửa</td>
            <td scope="col">Xóa</td>
          </tr>
        </thead>
        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
          <tbody>
            <tr class="item">
              <td><?= $row['username'] ?></td>
              <td><?= $row['status'] == 1 ? "Kích hoạt" : "Block" ?></td>
              <td><?= $row['point'] ?></td>
              <td><?= $row['last_updated'] ?></td>
              <td><?= $row['created_time'] ?></td>
              <td><a href="./edit_user.php?id=<?= $row['id'] ?>">Sửa</a></td>
              <td><a href="./delete_user.php?id=<?= $row['id'] ?>">Xóa</a></td>
            </tr>
          </tbody>
        <?php } ?>
      </table>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

</html>