 <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="category leftbar">
                <h3 class="title">
                  Danh Mục
                </h3>
                <ul>
                  <?php 
                     $category = $this->model->get_all("select * from tbl_category_product");
                     foreach ($category as $rows): {
                        # code...
                     }
                   ?>
                  <li>
                    <a href="index.php?controller=category_product&id=<?php echo $rows->pk_category_product_id; ?>">
                      <?php echo $rows->c_name; ?>
                    </a>
                  </li>
               <?php endforeach; ?>
                </ul>
              </div>
              
              <div class="clearfix">
              </div>
             <div class="price-filter leftbar">
                <h3 class="title">
                  Tìm kiếm theo Giá
                </h3>
               
                   <label>
                      <a href="san-pham/tim-kiem/0k-1000k"><button style="width:230px;">Từ 0k - 1000k</button></a>
                      <a href="san-pham/tim-kiem/2000k-4000k"><button style="width:230px;">Từ 2000k - 4000k</button></a>
                      <a href="san-pham/tim-kiem/4000k-6000k"><button style="width:230px;">Từ 4000k - 6000k</button></a>
                     <a href="san-pham/tim-kiem/6000k-8000k"> <button style="width:230px;">Từ 6000k - 8000k</button></a>
                     <a href="san-pham/tim-kiem/8000k-10000k"> <button style="width:230px;">Từ 8000k - 10triệu </button></a>
                      <a href="san-pham/tim-kiem/hon10tr"><button style="width:230px;">Trên 10 triệu</button></a>
                  </label>
                  
               
              </div>
              
              <div class="clearfix">
              </div>
              <div class="product-tag leftbar">
                <h3 class="title">
                  Tin tức 
                  <strong>
                    Tags
                  </strong>
                </h3>
                <ul>
                  <?php 
                        $category = $this->model->get_all("select * from tbl_category_news");
                        foreach ($category as $rows): {
                           # code...
                        }
                   ?>
                  <li>
                    <a href="index.php?controller=category_news&id=<?php echo $rows->pk_category_news_id; ?>">
                      <?php echo $rows->c_name; ?>
                    </a>
                  </li>
               <?php endforeach; ?>
                  
                </ul>
              </div>
              <div class="clearfix">
              </div>
              <div class="others leftbar">
                <h3 class="title">
                  Khác
                </h3>
              </div>
              <div class="clearfix">
              </div>
              <div class="others leftbar">
                <h3 class="title">
                  Khác
                </h3>
              </div>
              <div class="clearfix">
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
                      <img src="images/fbicon.png" alt="">
                    </span>
                    Facebook social plugin
                  </a>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="leftbanner">
                <img src="images/banner-small-01.png" alt="">
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
              <div class="products-grid">
                <div class="toolbar">
                  <!-- <div class="sorter">
                    <div class="view-mode">
                      
                      <a href="#" class="grid active">
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
                    <a href="#" class="prev-page">
                      <i class="fa fa-angle-left">
                      </i>
                    </a>
                     <?php
                    for($i = 0; $i <= $num_page; $i++)
                    {
                    ?>
                    <a href="index.php?controller=searchprice&gia=<?php echo $gia; ?>&p=<?php echo $i; ?>">
                      <?php echo $i; ?>
                    </a>
                <?php } ?>
                    <a href="#" class="next-page">
                      <i class="fa fa-angle-right">
                      </i>
                    </a>
                  </div>
                </div>
                <div class="clearfix">
                </div>
                <div class="row">
                  <?php if($total==0){ ?>
                  <div class="col-md-12 col-sm-6">
                    
                      <h1 style="margin: 30px auto;">Danh Sách Sản Phẩm Trống!</h1>
                    
                  </div>
                 
                   <?php 
                     
                  }else{ 
                   foreach ($arr as $rows): {
                    
                  } ?>
                  <div class="col-md-4 col-sm-6">
                    <div class="products">
                      <div class="thumbnail">
                        <a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>">
                          <img src="public/upload/product/<?php echo $rows->c_img; ?>" alt="<?php echo $rows->c_name; ?>">
                        </a>
                      </div>
                      <div class="productname">
                        <?php echo $rows->c_name; ?>

                      </div>
                      <h4 class="price">
                        <?php echo number_format($rows->c_price); ?>
                      </h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">
                          <a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>">Thêm vào giỏ</a>
                        </button>
                        <button class="button compare" type="button">
                          <i class="fa fa-exchange">
                          </i>
                        </button>
                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>
               <?php endforeach; 
              }
               ?> 
                  
                <div class="clearfix">
                </div>
                <div class="toolbar">
                  <!-- <div class="sorter bottom">
                    <div class="view-mode">
                      
                      <a href="#" class="grid active">
                        Grid
                      </a>
                    </div>
                    <div class="sort-by">
                      Sort by : 
                      <select name="">
                        <option value="Default" selected>
                          Default
                        </option>
                        <option value="Name">
                          Name
                        </option>
                        <option value="
<strong>
#
</strong>
">
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
                    <a href="#" class="prev-page">
                      <i class="fa fa-angle-left">
                      </i>
                    </a>
                    <?php
                  for($i = 1; $i <= $num_page; $i++)
                     {
                     ?>
                    <a href="index.php?controller=searchprice&p=<?php echo $i; ?>">
                      <?php echo $i; ?>
                    </a>
                <?php } ?>
                    <a href="#" class="next-page">
                      <i class="fa fa-angle-right">
                      </i>
                    </a>
                  </div>
                </div>
                <div class="clearfix">
                </div>
              </div>
            </div>
          </div>