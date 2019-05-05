 
 <div class="clearfix">
        </div>
        <div class="page-index">
          <div class="container">
            <p>
              Home - Shopping Cart
            </p>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container shopping-cart">
          <div class="row">
            <div class="col-md-12">
              <h3 class="title">
                Shopping Giỏ Hàng
              </h3>
              <div class="clearfix">
              </div>
              <form action="index.php?controller=cart&act=update" method="post" name="theForm">
              <table class="shop-table">
                <thead>
                  <tr>
                    <th>
                      Ảnh
                    </th>
                    <th>
                      Tên vật phẩm
                    </th>
                    
                    <th>
                      Giá
                    </th>
                    <th>
                      Số lượng
                    </th>
                    <th>
                      Tổng Tiền
                    </th>
                    <th>
                      Xóa
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($_SESSION["cart"] as $product): 
                  ?>
                  <tr>
                    <td style="text-align: center;">
                      <img  src="public/upload/product/<?php echo $product["c_img"];  ?>" alt="">
                    </td>
                    <td style="width: 200px; text-align: center;">
                      <div class="shop-details">
                        <div class="productname">
                          <?php echo $product["c_name"]; ?>
                        </div>
                       
                        <!-- <div class="color-choser">
                          <span class="text">
                            Màu sắc 
                          </span>
                          <ul>
                            <li>
                              <a class="black-bg " href="">
                                black
                              </a>
                            </li>
                            <li>
                              <a class="red-bg" href="#">
                                light red
                              </a>
                            </li>
                          </ul>
                        </div> -->
                       
                      </div>
                    </td>

                    <td>
                      <h5>
                        <?php echo number_format($product["c_price"]); ?>
                        <sup style="font-size: 8px; color: red;">VNĐ</sup>
                      </h5>
                    </td>
                    <td>
                      <input type="number" name="<?php echo $product['pk_product_id']; ?>" style="width: 80px;" min="0" value="<?php echo $product['number']; ?>">
                    </td>
                    <td>
                      <h5>
                        <strong class="red">
                          <?php 
                          $gia =  $product["c_price"]*$product["number"] ;
                          echo number_format(isset($gia)?$gia:""); ?>
                        <sup style="font-size: 8px; color: red;">VNĐ</sup>
                        </strong>
                      </h5>
                    </td>
                    <td>
                      <a href="index.php?controller=cart&act=delete&id=<?php echo $product['pk_product_id']; ?>">
                        <img src="public/frontend/images/remove.png" alt="">
                      </a>
                    </td>
                  </tr>
               <?php endforeach; ?>
                  
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="6">
                      <button class="pull-left">
                        <a href="index.php">Trở lại SHOP</a>
                      </button>

                      <button class="pull-right" onclick="placeOrder()">Cập nhật giỏ hàng</button>
                      <script>
                        function placeOrder(){
                          document.theForm.action="index.php?controller=cart&act=update";
                          document.theForm.submit();
                          }
                      </script>

                    </td>
                  </tr>
                </tfoot>
              </table>
              
               
                
              </div>
              </form>
              <?php if($this->cart_number() > 0): ?>
              <div class="col-md-4 col-sm-6">
                  <div class="shippingbox">
                    <div class="subtotal">
                      <h5>
                        Số lượng: 
                      </h5>
                      <span>
                        <?php echo $this->cart_number(); ?>
                      </span>
                    </div>
                    <div class="grandtotal">
                      <h5>
                        Tổng tiền: 
                      </h5>
                      <span>
                        <?php echo number_format($this->cart_total()); $_SESSION['gia']=$this->cart_total(); ?><sup style="font-size: 10px; color: red;">VNĐ</sup>

                      </span>
                    </div>
                    <button onclick="location.href='index.php?controller=cart&act=destroy'">Xóa giỏ hàng</button>
                    <button onclick="location.href='checkout.html'">
                      Tiếp tục thanh toán
                    </button>
                  </div>
                </div>
              <?php endif; ?>
            
            
         