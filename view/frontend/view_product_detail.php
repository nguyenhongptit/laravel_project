.



<?php 
  $id = isset($_GET['id'])?$_GET['id']:0;
  $detail = $this->model->get_a_record("select * from tbl_product where pk_product_id=$id");
  $detail_pri = $this->model->get_all("select c_img from tbl_product order by pk_product_id desc")
 ?>
  
        <div class="clearfix">
        </div>
        <div class="page-index">
          <div class="container">
            <p>
              Home - Chi tiết sản phẩm!
            </p>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="products-details">
               <!------ 
                  privew_image
                
                ---->
              <div class="preview_image">
      
                  <div class="preview-small">

                    <img style="width: 300px;" id="zoom_03" src="public/upload/product/<?php echo $detail->c_img; ?>" data-zoom-image="public/upload/product/<?php echo $detail->c_img; ?>" alt="<?php echo $detail->c_name; ?>">
                  </div>
                  <div class="thum-image">
                    <ul id="gallery_01" class="prev-thum">
                      <li>
                        <a href="index.php?controller=product_detail&id=<?php echo $id; ?>" data-image="public/upload/product/<?php echo $detail->c_img; ?>" data-zoom-image="public/upload/product/<?php echo $detail->c_img; ?>">
                          <img src="public/upload/product/<?php echo $detail->c_img; ?>" alt="">
                        </a>
                      </li>
                     
                    </ul>
                    <a class="control-left" id="thum-prev" href="javascript:void(0);">
                      <i class="fa fa-chevron-left">
                      </i>
                    </a>
                    <a class="control-right" id="thum-next" href="javascript:void(0);">
                      <i class="fa fa-chevron-right">
                      </i>
                    </a>
                  </div>
                </div>


                <!-----end prieview ---->
                 

                <div class="products-description">
                  <h5 class="name">
                    <?php echo $detail->c_name; ?>
                  </h5>
                  <p>
                    <img alt="" src="public/frontend/images/star.png">
                    <a class="review_num" href="#">
                      02 Đánh giá(s)
                    </a>
                  </p>
                  <p>
                    Tình trạng: 
                    <span class=" light-red">
                      Còn hàng
                    </span>
                  </p>
                  <p>
                    <?php echo $detail->c_description; ?>
                  </p>
                  <hr class="border">
                  <div class="price">
                    Giá : 
                    <span class="new_price">
                     <?php
                     
                      echo number_format($detail->c_price);
                      ?>
                      <sup>
                        VNĐ
                      </sup>
                    </span>
                    <span class="old_price">

                         <?php 
                          $sale = $detail->c_sale;
                         

                         if($sale>0){
                           $price_old =$detail->c_price + $detail->c_price * ($sale/100);
                          echo number_format($price_old);
                         }
                         else{
                          echo number_format($detail->c_price);
                         }
                         ?>
                       
                      <sup>
                        VNĐ
                      </sup>
                    </span>
                  </div>
                  <hr class="border">
                  <div class="wided">
                    <div class="qty">
                      Số lượng:
                      <select>
                        <option value="1">
                          1
                        </option>
                         <option value="2">
                          2
                        </option>
                         <option value="3">
                          3
                        </option>
                         <option value="4">
                          4
                        </option>
                         <option value="5">
                          5
                        </option>
                         <option value="6">
                          6
                        </option>
                         <option value="7">
                          7
                        </option>
                         <option value="8">
                          8
                        </option>
                         <option value="9">
                          9
                        </option>
                         <option value="10">
                          10
                        </option>
                        
                          
                        
                      </select>
                    </div>
                    <div class="button_group">
                      <button class="button" >
                        <a href="index.php?controller=cart&act=add&id=<?php echo $id; ?>">Thêm vào giỏ</a>
                      </button>
                      <button class="button compare">
                        <i class="fa fa-exchange">
                        </i>
                      </button>
                      <button class="button favorite">
                        <i class="fa fa-heart-o">
                        </i>
                      </button>
                      <button class="button favorite">
                        <i class="fa fa-envelope-o">
                        </i>
                      </button>
                    </div>
                  </div>
                  <div class="clearfix">
                  </div>
                  <hr class="border">
                  <img src="public/frontend/images/share.png" alt="" class="pull-right">
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="tab-box">
                <div id="tabnav">
                  <ul>
                    <li>
                      <a href="index.php?controller=product_detail&id=8">
                        Giới thiệu
                      </a>
                    </li>
                    
                  </ul>
                </div>
                <div class="tab-content-wrap">
                  <div class="tab-content" id="Descraption">
                    <p>
                     <?php echo $detail->c_description; ?>
                    </p>
                    <p>
                      <?php echo $detail->c_content; ?>
                    </p>
                  </div>
                  
                  <div class="tab-content" id="tags">
                    <div class="tag">
                      Add Tags : 
                      <input type="text" name="">
                      <input type="submit" value="Tag">
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div id="productsDetails" class="hot-products">
                <h3 class="title">
                  <strong>
                    SẢN PHẨM
                  </strong>
                  MỚI NHẤT
                </h3>
                <div class="control">
                  <a id="prev_hot" class="prev" href="#">
                    &lt;
                  </a>
                  <a id="next_hot" class="next" href="#">
                    &gt;
                  </a>
                </div>
                <ul id="hot">
                     <li>
                        <div class="row">
                           <?php 
                  $product = $this->model->get_all("select * from tbl_product order by pk_product_id desc limit 0,3");
                        foreach ($product as $rows): {
                            
                        }
                   ?>
                           <div class="col-md-4 col-sm-4">
                              <div class="products">
                                 <div class="offer">%<?php echo $rows->c_sale; ?></div>
                                 <div class="thumbnail"><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>"><img src="public/upload/product/<?php echo $rows->c_img; ?>" alt="<?php echo $rows->c_name; ?>"></a></div>
                                 <div class="productname"><?php echo $rows->c_name; ?></div>
                                 <h4 class="price"><?php echo number_format($rows->c_price); ?> VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button"><a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>">Thêm vào giỏ</a></button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>

                        <?php endforeach; ?>
                           
                        </div>
                     </li>
                  </ul>
              </div>
              <div class="clearfix">
              </div>
            </div>
            <?php 
              //load slide left
            include "controller/frontend/controller_leftbar.php";
             ?>