<div class="col-md-3">
              <div class="special-deal leftbar">
                <h4 class="title">
                  ƯU ĐÃI
                  <strong>
                    ĐẶC BIỆT
                  </strong>
                </h4>
                <?php 
                $special = $this->model->get_all("select * from tbl_product where c_sale > '50' order by pk_product_id desc limit 0,3");
                foreach ($special as $rows): 
               
                 ?>
                <div class="special-item">
                  <div class="product-image">
                    <a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>">
                      <img src="public/upload/product/<?php echo $rows->c_img; ?>" alt="<?php echo $rows->name; ?>">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      <?php echo "<strong>(SALE:".$rows->c_sale."%)</strong>".$rows->c_name; ?>
                    </p>
                    <h5 class="price">
                      <?php
                    
                      echo number_format($rows->c_price);

                      ?>
                      vnđ
                    </h5>
                  </div>
                </div>
              <?php endforeach; ?>
                
              <div class="clearfix">
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
                    $tag = $this->model->get_all("select c_name from tbl_category_product order by pk_category_product_id desc");
                    foreach ($tag as $rows): {
                      # code...
                    }
                   ?>
                  <li>
                    <a href="#">
                      <?php echo $rows->c_name; ?>
                    </a>
                  </li>
                <?php endforeach; ?>
                </ul>

              </div>
              <div class="clearfix">
              </div>
              <div class="get-newsletter leftbar">
                <h3 class="title">
                  Nơi  
                  <strong>
                    Nhận Thư
                  </strong>
                </h3>
                <p>
                  Thông tin đóng góp của khách hàng
                </p>
                <form>
                  <input class="noidungthu" type="text" name="" placeholder="Nội dung thư...">
                  <input class="submit" type="submit" value="Gửi đi ngay" style="margin-top: 5px;">
                </form>
              </div>
              <div class="clearfix">
              </div>
              <div class="fbl-box leftbar">
                <h3 class="title">
                  Facebook
                </h3>
                <span class="likebutton">
                  <a href="#">
                    <img src="public/frontend/images/fblike.png" alt="">
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
              <div class="clearfix">
              </div>
            </div>
          </div>
          