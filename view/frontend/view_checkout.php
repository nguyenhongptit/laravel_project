<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="static/css/style.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>


   <style type="text/css">
     .wapper{
        width: 100%;
        height: 100%;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        position:fixed;
        z-index: 1000000000000000000;
        background: rgba(0,0,0, 0.6);
      }

      .wapper .content{

        width: 400px;
        height: 200px;
        border: solid 1px #CCD6DF;
        background: #fff;
        border-radius: 10px;
        position: absolute;
        left: calc(50% - 100px);
        top: calc(50% - 200px);
      }

      .wapper .content .title_content{
        width: 100%;
        height: 20%;
        background: #6390CF;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
      }
      .wapper .content .title_content h3{

        display: flex;
        justify-content: center;
        font-family: initial;
        line-height: 40px;
        font-size: 30px;
      }

      .wapper .content .Between_content{
        width: 100%;
        height: 70%;
        padding: 10px;
      }

      .wapper .content .Between_content p{

        font-size: 20px;
        
        font-weight: 600;

      }
      .wapper .content .Between_content form {


        margin-top: 20px;

      }
      .wapper .content .Between_content form input{

        width: 80%;
        height: 30px;
        border-color: #99B5DC;
        border-radius: 8px;
        margin-top: 10px;

      }
    .btn {
      color: blue;
    }

   </style>

<div class="page-index">
  <div class="container">
    <p>
      Home - Nhập Thông Tin Giao Dịch
    </p>
  </div>
</div>
</div>
<div class="clearfix">
</div>
<div class="container_fullwidth">
  <div class="container">
    <div class="row">
      <?php 
                //load sidebar
      include  "controller/frontend/controller_leftbar.php";
      ?>

      <?php 
      $Province = $this->model->get_all("select * from province");
      $htmlTinh = "";
      foreach ($Province as $rows) {
        $htmlTinh .="<option value='".$rows->provinceid."'>".$rows->name."</option>";
      }


      ?>
      <div class="col-md-9">
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

          </tr>
        </thead>
        <tbody>
          <?php foreach ($_SESSION["cart"] as $product): 
            ?>
            <tr>
              <td style="text-align: center;">
                <img  src="public/upload/product/<?php echo $product["c_img"];  ?>" alt="">
              </td>
              <td style="width: 180px; text-align: center;">
                <div class="shop-details">
                  <div class="productname">
                    <?php echo $product["c_name"]; ?>
                  </div>


                </div>
              </td>

              <td style="width: 100px">
                <h5>
                  <?php echo number_format($product["c_price"]); ?>
                  <sup style="font-size: 8px; color: red;">VNĐ</sup>
                </h5>
              </td>
              <td>
               <?php echo $product['number']; ?>
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


            </tr>
          <?php endforeach; ?>


        </tbody>

      </table>

      <div class="checkout-page">
        <ol class="checkout-steps">

          <li class="steps active">
            <a href="#" class="step-title">
              Nhập thông tin
            </a>
            <div class="step-description">
              <form action="checkout.html"  method="POST">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="your-details">
                      <h5>
                        Chi Tiết Người Mua
                      </h5>
                      <div class="form-row">
                        <label class="lebel-abs">
                          Họ và tên:
                          <strong class="red">
                            *
                          </strong>
                        </label>
                        <input type="text" class="input namefild" name="hovaten" required>
                      </div>
                      <div class="form-row">
                        <label class="lebel-abs">
                          Email 
                          <strong class="red">
                            *
                          </strong>
                        </label>
                        <input type="email" class="input namefild" name="email" required>
                      </div>
                      <div class="form-row">
                        <label class="lebel-abs">
                          Điện thoại 
                          <strong class="red">
                            *
                          </strong>
                        </label>
                        <input type="number" class="input namefild" name="dienthoai" required>
                      </div>
                    </div>
                    <div class="form-row">

                      <select name="province" id="province" >
                        <option value="" name ="tinh">---Chọn Tinh---</option>
                              

                        <?php echo $htmlTinh; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">

                    <select name="district" id="district" >
                      <option value="" >---Chọn Quận/Huyện---</option>
                    </select>
                  </div>
                  <div class="form-row" class="col-md-6 col-sm-6">

                    <select name="ward" id="ward">
                      <option value="">---Chọn Phường/Xã---</option>
                    </select>
                  </div>
                </div>
                <div class="form-row" style="width: 400px">
                  <label class="lebel-abs">
                    Số nhà                                  <strong class="red">
                      *
                    </strong>
                  </label>
                  <input type="text" class="input namefild" name="sonha" required>
                </div>

              </div>
              <div class="col-md-6 col-sm-6">
                <div class="your-details">


                  <div class="form-row">

                  </div>
                  <input type="submit" class="btn btn-primary" name="btn_buy" value="Mua hàng" style="text-align: center; position: relative; left: 82%; background:   #41A317; font-size: 23px; color: red; font-family: serif;font-weight: 700" >

                </div>
              </div>
            </div>
          </form>
        </div>
      </li>

    </ol>
  </div>

</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#province').change(function(){
      let provinceID = $('#province').val();
      $.get("http://localhost:8080/btl1/controller/frontend/controller_quan.php", {'id': provinceID} ,function(data){
        var data= "<option>--Chọn Quận/Huyện--</option>"+data;
        $('#district').html(data);
      });
    });
    $('#district').change(function(){
      let districtID = $('#district').val();
      $.get("http://localhost:8080/btl1/controller/frontend/controller_xa.php", {'id': districtID} ,function(data){
        var data = "<option>--Chọn Phường/Xã--</option>"+data;
        $('#ward').html(data);
      });
    });
  });
</script>
