 <body id="home">
      <div class="wrapper">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                     <div class="logo"><a href="trang-chu.html"><img src="public/frontend/images/logo1.png" alt="FlatShop"></a></div>
                  </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                        <div class="row">
                           <div class="col-md-3">
                              <ul class="option_nav">
                                 <!-- <li class="dorpdown">
                                    <a href="#">VN</a>
                                    <ul class="subnav">
                                       <li><a href="#">Eng</a></li>
                                       <li><a href="#">Vns</a></li>
                                       <li><a href="#">Fer</a></li>
                                       <li><a href="#">Gem</a></li>
                                    </ul>
                                 </li>
                                 <li class="dorpdown">
                                    <a href="#">VNĐ</a>
                                    <ul class="subnav">
                                       <li><a href="#">VNĐ</a></li>
                                       
                                    </ul>
                                 </li> -->
                              </ul>
                           </div>
                           <div class="col-md-6">
                              <ul class="topmenu">
                                 <li><a href="lien-he.html">Liên hệ</a></li>
                                 <li><a href="tin-tuc.html">Tin tức</a></li>
                                 <li><a href="#">Dịch Vụ</a></li>
                                 <li><a href="#">Yêu cầu</a></li>
                                 <li><a href="#">Phương tiện</a></li>
                                 <li><a href="gio-hang.html">Giỏ hàng</a></li>
                              </ul>
                           </div>
                           <!-- <div class="col-md-3">
                              <ul class="usermenu">
                                 <li><a href="checkout.html" class="log">Đăng Nhập</a></li>
                                 <li><a href="checkout2.html" class="reg">Đăng ký</a></li>
                              </ul>
                           </div> -->
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <form method="GET">
                                 
                                 <input class="search-submit" type="submit" value="">
                                 <input class="search-input" placeholder="Tìm kiếm..." type="text" value="" name="search" >
                               </form>
                               <!------ Xử lý chức năng search --->
                               <?php 
                                if(isset($_GET["search"])&&$_GET["search"]!=""){
                                  $keyword = $_GET["search"];
                                  $link = "index.php?controller=search&key=".$keyword;
                                  echo "<script>location.href='$link';</script>";
                                }

                                ?>
                                <!------End  Xử lý chức năng search --->
                           </li>
                            <li class="option-cart">
                              <a href="gio-hang.html" class="cart-icon">Giỏ hàng <span class="cart_no">
                                 <?php 
                                  $num_cart = 0;
                                  if(isset($_SESSION["cart"])){
                                  foreach($_SESSION["cart"] as $rows){
                                      $num_cart++;
                                      }
                                  }
                                  echo $num_cart;
                          ?>   </span></a>
                              <!-- <ul class="option-cart-item">

                                <?php if(isset($_SESSION["cart"])): ?>
                                 <?php foreach ($_SESSION["cart"] as $rows): {
                                   
                                 } ?>
                                  <li>
                                    <div class="cart-item">
                                       <div class="image"><img src="public/upload/product/<?php echo $rows["c_img"]; ?>" alt=""></div>
                                       <div class="item-description">
                                          <p class="name"><?php echo $rows["c_name"]; ?></p>
                                          <p>Cỡ: <span class="light-red">One size</span><br>Số lượng: <span class="light-red"><?php echo $rows["number"]; ?></span></p>
                                       </div>
                                       <div class="right">
                                          <p class="price"></p>
                                          <a href="index.php?controller=cart&act=delete&id=<?php echo $rows['pk_product_id']; ?>" class="remove"><img src="public/frontend/images/remove.png" alt="remove"></a>
                                       </div>
                                    </div>
                                 </li> 
                                 <?php endforeach; ?>
                                 
                                 <li><span class="total">Tổng tiền: <strong><?php  ?></strong></span><button class="checkout" onClick="location.href='index.php?controller=checkout'">Tiếp tục thanh toán</button></li>

                              </ul> -->
                           <!-- <?php endif; ?> -->
                           </li>
                        </ul>

                        <!-----Menu Ngang ----->
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              
                              <li class="active dropdown"><a href="trang-chu.html"><i class="fa fa-home"></i></a></li>
                              <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Danh mục Sản phẩm</a>
                                 <div class="dropdown-menu mega-menu">
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             <?php 
                                                $category = $this->model->get_all("select * from tbl_category_product ");
                                                foreach ($category as $rows) {
                                                   # code...
                                               
                                              ?>
                                             <li><a href="san-pham/danh-muc/<?php echo $rows->pk_category_product_id; ?>/<?php echo remove_unicode($rows->c_name); ?>"><?php echo $rows->c_name; ?></a></li>
                                             <?php } ?>
                                          </ul>
                                       </div>
                                       
                                    </div>
                                 </div>
                              </li>
                              <li><a href="trang-san-pham.html">sản phẩm</a></li>
                              <li><a href="tin-tuc.html">Tin tức</a></li>
                              <li class="dropdown">
                                 <a href="tin-tuc.html" class="dropdown-toggle" data-toggle="dropdown">Danh mục tin tức</a>
                                 <div class="dropdown-menu mega-menu">
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             <?php 
                                                $category = $this->model->get_all("select * from tbl_category_news");
                                                foreach ($category as $rows): {
                                                   # code...
                                                }
                                              ?>
                                             <li><a href="tin-tuc/danh-muc/<?php echo $rows->pk_category_news_id; ?>/<?php echo remove_unicode($rows->c_name); ?>"><?php echo $rows->c_name; ?></a></li>
                                          <?php endforeach; ?>
                                          </ul>
                                       </div>
                                       
                                    </div>
                                 </div>
                              </li>

                              
                              <li><a href="lien-he.html">Liên Hệ</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>