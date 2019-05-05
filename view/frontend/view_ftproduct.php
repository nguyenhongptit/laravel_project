<div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title"><strong>SẢN PHẨM </strong> NỔI BẬT</h3>
                  <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
                  <ul id="featured">
                     <li>
                        <div class="row">
                           <?php 
                           $ftproduct = $this->model->get_all("select * from tbl_product order by c_count desc  limit 0,4");
                           foreach ($ftproduct as $rows): {
                       
                    
                           }

                            ?>
                           <div class="col-md-3 col-sm-6" >
                              <div class="products" >
                                 <div class="offer">%<?php echo $rows->c_sale; ?></div>
                                 <div class="thumbnail"><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>"><img src="public/upload/product/<?php echo $rows->c_img; ?>" alt="<?php echo $rows->c_name; ?>"></a></div>
                                 <div class="productname"><?php echo $rows->c_name; ?></div>
                                 <h4 class="price"><?php echo number_format($rows->c_price); ?> VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button"><a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>">Thêm vào giỏ</a></button><button class="button compare" type="button"><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>"><i class="fa fa-exchange"></a></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>

                        <?php endforeach; ?>
                        </div>
                     </li>
                  </ul>
               </div>