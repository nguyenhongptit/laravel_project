
<div class="clearfix">
        </div>
        <div class="page-index">
          <div class="container">
            <p>
              Danh sách tin tức
            </p>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="category leftbar">
                <h3 class="title">
                  Danh Mục Tin Tức
                </h3>
                <ul>
                <?php 
                  $category = $this->model->get_all("select * from tbl_category_news");
                  foreach ($category as $rows) {
                   
                 ?>
                  <li>
                    <a href="tin-tuc/danh-muc/<?php echo $rows->pk_category_news_id; ?>/<?php echo remove_unicode($rows->c_name); ?>">
                      <?php echo $rows->c_name; ?>
                    </a>
                  </li>
                  <?php } ?>
                </ul>
              </div>
             
             
             
              <div class="product-tag leftbar">
                <h3 class="title">
                  Sản phẩm 
                  <strong>
                    Tags
                  </strong>
                </h3>
                <ul>
                  <?php 
                      $tagp = $this->model->get_all("select * from tbl_category_product");
                      foreach ($tagp as $rowss) {
                        # code...
                     
                   ?>
                  <li>
                    <a href="san-pham/danh-muc/<?php echo $rowss->pk_category_product_id; ?>/<?php echo $rowss->c_name; ?>">
                      <?php echo $rowss->c_name; ?>
                    </a>
                  </li>
                  <?php  } ?>
                  
                </ul>
              </div>
              
              <div class="fbl-box leftbar">
                <h3 class="title">
                  Facebook
                </h3>
                <span class="likebutton">
                  <a href="#">
                    <img src="images/fblike.png" alt="">
                  </a>
                </span>
                <p>
                  12k people like Flat Shop.
                </p>
                <ul>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                </ul>
                <div class="fbplug">
                  <a href="#">
                    <span>
                      <img src="public/frontend/images/fbicon.png" alt="">
                    </span>
                    Facebook social plugin
                  </a>
                </div>
              </div>
              <div class="leftbanner">
                <img src="public/frontend/images/toctien.png" alt="">
              </div>
            </div>
            <div class="col-md-9">
              <div class="banner">
                <div class="bannerslide" id="bannerslide">
                  <ul class="slides">
                    <li>
                      <a href="#">
                        <img src="public/frontend/images/tung.jpg" alt=""/>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="public/frontend/images/tung.jpg" alt=""/>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="products-list">
                <div class="toolbar">
                  <!-- <div class="sorter">
                    <div class="view-mode">
                      
                      <a href="index.php?controller=allnews" class="grid">
                        Grid
                      </a>
                    </div>
                    <div class="sort-by">
                      Sắp xếp : 
                      <select name="" >
                        <option value="Default" selected >
                          Mặc định
                        </option>
                        <option value="Tên">
                          Name
                        </option>
                        <option value="Giá">
                          Price
                        </option>
                      </select>
                    </div>
                  
                  </div> -->
                  <div class="pager">
                    <!-- <a href="#" class="prev-page">
                      <i class="fa fa-angle-left">
                      </i>
                    </a> -->
                  <?php
                  for($i = 1; $i <= $num_page; $i++)
                  {
                 ?>
                    <a href="trang-tin-tuc/trang/<?php echo $i; ?>">
                      <span style="border: 1px solid #222; padding: 4px;"><?php echo $i; ?></span>
                    </a>
                <?php } ?>
                    <!-- <a href="#" class="next-page">
                      <i class="fa fa-angle-right">
                      </i>
                    </a> -->
                  </div>
                </div>
                <ul class="products-listItem">
                  <?php 
                   
                  foreach ($arr as $rows): {
                    # code...
                  }
                   ?>
                  <li class="products">
                    <div class="offer">
                      New
                    </div>
                    <div class="thumbnail">
                      <img src="public/upload/news/<?php echo $rows->c_img ?>" alt="Product Name">
                    </div>
                    <div class="product-list-description">
                      <div class="productname">
                        <?php echo $rows->c_name; ?>
                      </div>
                      
                      <p>
                        <?php echo $rows->c_description; ?>
                      </p>
                      <div class="list_bottom">
                        
                        <div class="button_group">
                          <button class="button">
                           <a href="tin-tuc/chi-tiet/<?php echo $rows->pk_news_id; ?>/<?php echo remove_unicode($rows->c_name).".html" ?>">Đọc tiếp</a>
                           <i class="fa fa-heart-o">
                            </i>
                          </button>
                         
                        </div>
                      </div>
                    </div>
                  </li>
                <?php endforeach; ?>
                  
                </ul>
                <div class="toolbar">
                  <!-- <div class="sorter bottom">
                    <div class="view-mode">
                      <a href="#" class="list active">
                        List
                      </a>
                      <a href="productgird.html" class="grid">
                        Grid
                      </a>
                    </div>
                    <div class="sort-by">
                      Sort by : 
                      <select name="" >
                        <option value="Default" selected>
                          Default
                        </option>
                        <option value="Name">
                          Name
                        </option>
                        <option value="Price">
                          Price
                        </option>
                      </select>
                    </div>
                    <div class="limiter">
                      Show : 
                      <select name="" >
                        <option value="3" selected>
                          3
                        </option>
                        <option value="6">
                          6
                        </option>
                        <option value="9">
                          9
                        </option>
                      </select>
                    </div>
                  </div> -->
                  <div class="pager">
                    <!-- <a href="index.php?controller=allnews&p=<?php echo --$i; ?>" class="prev-page"> -->
                     <!--  <i class="fa fa-angle-left"> -->
                      </i>
                    </a>
                    <?php
                  for($i = 1; $i <= $num_page; $i++)
                  {
                 ?>
                     <a href="trang-tin-tuc/trang/<?php echo $i; ?>">
                      <span style="border: 1px solid #222; padding: 4px;"><?php echo $i; ?></span>
                    </a>
                <?php } ?>
                   <!--  <a href="index.php?controller=allnews&p=<?php echo ++$i; ?>" class="next-page"> -->
                      <!-- <i class="fa fa-angle-right"> -->
                      </i>
                    </a>
                   </div>
                </div>
                <div class="clearfix">
                </div>
              </div>
            </div>