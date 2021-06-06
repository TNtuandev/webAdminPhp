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
    <title>Document</title>
</head>

<body>

    <?php
    if (isset($_GET["action"]) && $_GET["action"] == "add") {
        include "./connection.php";
        $username = $_POST["username"];
        $password = $_POST["password"];
        $status = $_POST["status"];
        $created_time = $_POST["created_time"];
        $last_updated = $_POST["last_updated"];
        $point = $_POST["point"];
        // echo $username."===========================".$password;
        $sql = "INSERT INTO user(username, password, status, created_time, last_updated, point)
         VALUES ('$username','$password','$status','$created_time','$last_updated', '$point')";
        // echo $sql;
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    ?>
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
                    <i class="fa fa-tachometer" aria-hidden="true"></i> Đăng Xuất
                </a>
            </li>
        </ul>
    </div>

    <div style="margin-left:400px ">
        <form action="addNewUser.php?action=add" method="POST">
            <label for="fname">Username:</label><br>
            <input type="text" id="fname" name="username"><br>
            <label for="lname">Password:</label><br>
            <input type="password" id="lname" name="password"><br><br>
            <label for="lname">Status:</label><br>
            <input type="status" name="status"><br><br>
            <label for="lname">Điểm Thưởng</label><br>
            <input type="point" name="point"><br><br>
            <label for="lname">Update Time:</label><br>
            <input type="date" name="last_updated"><br><br>
            <label for="lname">Create Time:</label><br>
            <input type="date" name="created_time"><br><br>


            <input type="submit" value="Submit">
        </form>
    </div>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>