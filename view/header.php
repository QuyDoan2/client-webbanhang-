<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Top Bar Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="view/stylebar.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
  <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> -->
  <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
  <link rel="icon" href="favicon.svg" type="image/svg+xml">
</head>

<body>
  <div class="top-bar">
    <div class="container">
      <div class="logo">
        <a href="index.php"><i class="fas fa-store"></i> X-Shop</a>
      </div>
      <div class="menu">
        <ul>
          <li>
            <!-- <a href="index.php?act=danhmucsp"><i class="fas fa-bars"></i> Danhmuc</a> -->
            <div class="dropdown">
              <button class="dropbtn">
                <i class="fa fa-bars"></i>
                Danh mục
              </button>
              <div class="dropdown-content">
                <?php
                $dsdm = fetch_list_danhmuc();
                foreach ($dsdm as $dm) {
                  extract($dm);
                  $linkdm = "index.php?act=danhmucsp&iddm=" . $id;
                  echo ' <a href="' . $linkdm . '">' . $name . '</a> ';
                }
                ?>
              </div>
            </div>
          </li>
          <li><a href="index.php?act=gioithieu"><i class="fas fa-info-circle"></i> Giới thiệu</a></li>
          <li><a href="index.php?act=hoidap"><i class="fas fa-question-circle"></i> Hỏi đáp</a></li>
        </ul>
      </div>
      <div class="search">
        <form action="index.php?act=danhmucsp" method="post">
          <input type="text" placeholder="Search..." name="keyword">
          <button type="submit"><i class="fas fa-search"></i></button>
        </form>
      </div>
      <?php
      if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);
      ?>
        <!-- <div class="user-name">         -->
          <div class="user-info">
            <div class="user-icon">
            <a href="index.php?act=updatetk"><i class="fas fa-user-circle"></i></a>
            </div>
            <div class="user-name">
                <a href="index.php?act=updatetk">Welcome,<?= $name ?></a>
            </div>           
            <a style="color:white;" href="index.php?act=thoat"><i class="fas fa-sign-out-alt"></i>Logout</a>           
          </div>
        <!-- </div> -->
      <?php
      } else {
      ?>
        <div class="user-name">
          <a href="index.php?act=dangki"><i class="fas fa-user-plus"></i>Đăng kí</a>
          <a href="index.php?act=dangnhap"><i class="fas fa-user-circle"></i>Đăng nhập</a>
        </div>
      <?php } ?>
    </div>
  </div>