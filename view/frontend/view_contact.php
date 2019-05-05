<div class="clearfix">
        </div>
        <div class="page-index">
          <div class="container">
            <p>
              Home - Liên hệ
            </p>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h5 class="title contact-title">
                Liên hệ cho chúng tôi!
              </h5>
              <div class="clearfix">
              </div>
              <div class="map">
                <div id="googleMap" style="width:100%;height:400px;"></div>

                      <script>
                      function myMap() {
                      var mapProp= {
                          center:new google.maps.LatLng(20.980428,105.787571),
                          zoom:16,
                      };
                      var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                      }
                      </script>

                      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSxLoeVH330_x1JYvbWXnNmGFAKFKOPeE&callback=myMap">
                      </script>
              </div>
              <div class="clearfix">
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="contact-infoormation">
                    <h5>
                      Thông tin liên hệ
                    </h5>
                    <p>
                      Mô tả về liên hệ
                    </p>
                    <ul>
                      <li>
                        <span class="icon">
                          <img src="public/frontend/images/message.png" alt="">
                        </span>
                        <p>
                          contact@gmail.com
                          <br>
                          trandoandat38@com
                        </p>
                      </li>
                      <li>
                        <span class="icon">
                          <img src="public/frontend/images/phone.png" alt="">
                        </span>
                        <p>
                         01663877693
                          <br>
                         01663877692
                        </p>
                      </li>
                      <li>
                        <span class="icon">
                          <img src="public/frontend/images/address.png" alt="">
                        </span>
                        <p>
                          Ptit nguyentrai St, hanoi Dt,
                          <br>
                          Hanoi, Vietnam
                        </p>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="ContactForm">
                    <h5>
                      Mẫu liên hệ
                    </h5>
                    <form method="post" action="index.php?controller=contact">
                      <div class="row">
                        <div class="col-md-6">
                          <label>
                            Tên Bạn
                            <strong class="red">
                              *
                            </strong>
                          </label>
                          <input class="inputfild" type="text" name="c_name" required="">
                        </div>
                        <div class="col-md-6">
                          <label>
                            Email của bạn
                            <strong class="red">
                              *
                            </strong>
                          </label>
                          <input class="inputfild" type="email" name="c_email" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <label>
                            Tin Nhắn Cần Gửi
                            <strong class="red">
                              *
                            </strong>
                          </label>
                          <textarea class="inputfild" rows="8" name="c_content" required>
                          </textarea>
                        </div>
                      </div>
                    
                        
                        <button type="submit" name="btn_send" >Gửi thư</button> 

                        
                      
                    </form>
                   </div>
                </div>
                <div class="clearfix">
                </div>
              </div>
            </div>