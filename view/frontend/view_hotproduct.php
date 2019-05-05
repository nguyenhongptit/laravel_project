

<!-- <head>
   

   <style type="text/css">
      
      .products:hover{
 transform: scale(1.5);
        -webkit-transform: scale(1.5); 
        -moz-transform: scale(1.5); 
        -o-transform: scale(1.5);
        -ms-transform: scale(1.5);
    cursor: pointer; 
      }
   </style>
</head> -->

<div class="clearfix"></div>
         <div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
                  <h3 class="title"><strong>SẢN PHẨM</strong> MỚI</h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>


                  <ul id="hot">
                     <li>
                        <div class="row">
                           <?php 
                  $product = $this->model->get_all("select * from tbl_product order by pk_product_id desc limit 0,8");
                        foreach ($product as $rows): {
                         
                     
                        }
                   ?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">%<?php echo $rows->c_sale; ?></div>
                                 <div class="thumbnail"><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>"><img src="public/upload/product/<?php echo $rows->c_img; ?>" alt="<?php echo $rows->c_name; ?>"></a></div>
                                 <div class="productname"><?php echo $rows->c_name; ?></div>
                                 <h4 class="price"><?php  echo number_format($rows->c_price); ?> VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button"><a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>">Thêm vào giỏ</a></button><button class="button compare" type="button"><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>"><i class="fa fa-exchange"></a></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>

                        <?php endforeach; ?>
                           
                        </div>
                     </li>
                  </ul>
               </div>

