<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
  <script type="text/javascript" src="public/backend/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="public/backend/js/JQuery/jquery.min.js"></script>
  <script type="text/javascript" src="public/backend/ckeditor/ckeditor.js"></script>


</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="font-size: 14px">
      <a class="navbar-brand" href="admin.php?controller=home">SanPham.com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          
        <!--   <li>
            <a class="nav-link" href="admin.php?controller=home">Trang chủ <span class="sr-only">(current)</span></a>
          </li> -->
            <li class="nav-item active">
          <a class="nav-link" href="admin.php?controller=contact">Hòm Thư</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=category_product">Danh mục sản phẩm</a>
          </li>
		      <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=product">Sản phẩm</a>
           
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=category_news">Danh mục tin tức</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=news">Tin tức</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=user">Danh sách người dùng</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=brand">Thương hiệu</a>
          </li>
           <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=order">Đơn hàng</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=probanner">Promotion Banner</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=slider">Slider</a>
          </li>
              <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=statistical">Thống kê</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=Logout">Logout</a>
          </li>

        </ul>        
      </div>
    </nav>
    <div class="container" style="margin-top: 70px;">
    <?php 
        //kiem tra, neu duong dan ton tai thi load mvc do ra
        if(file_exists($controller))
          include $controller;
     ?>
    </div>
</body>
</html>