 <div class="clearfix"></div>
         <div class="hom-slider">
            <div class="container">
               <div id="sequence">
                  <ul class="sequence-canvas">
                     <div class="slider"  style="width: 100%; height: 100%; float: left">
                     <?php 
                        $maxTime = 0;
                        $slider = $this->model->get_all("select * from tbl_slider order by pk_slider_id desc");
                        foreach ($slider as $rows): {
                           if ((int)$rows->c_time > $maxTime) {
                              $maxTime = (int)$rows->c_time;
                           }
                           # code...
                        }
                      ?>
                      <div class="test" style="width: 100%; height: 100%; float: left">
                        <li class="animate-in">
                           <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead"><?php echo $rows->c_title; ?></span></div>
                           <div class="flat-caption caption2 formLeft delay400 text-center">
                              <h1><?php echo $rows->c_name; ?></h1>
                           </div>
                           <div class="flat-caption caption3 formLeft delay500 text-center">
                              <p><?php echo $rows->c_des; ?></p>
                           </div>
                           <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="<?php echo $rows->c_link; ?>">Chi tiết</a></div>
                           <div class="flat-image formBottom delay300" data-duration="5" data-bottom="true"><img src="public/upload/slider/<?php echo $rows->c_img; ?>" alt="<?php echo $rows->c_name; ?>"></div>
                        </li>
                     </div>
                     <?php endforeach; ?>
                     <!-- <li>
                        <div class="flat-caption caption2 formLeft delay400">
                           <h1>Collection For Winter</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500">
                           <h2>Etiam velit purus, luctus vitae velit sedauctor<br>egestas diam, Etiam velit purus.</h2>
                        </div>
                        <div class="flat-button caption5 formLeft delay600"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="public/frontend/images/slider-image-02.png" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>New Fashion of 2013</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="public/frontend/images/slider-image-03.png" alt=""></div>
                     </li> -->
                     </div>
                  </ul>
               </div>
            </div>



            <script>
    $(document).ready(function(){
      $('.slider').bxSlider({
        auto: true,
        // autoControls: true,
        autoStart: true,
        infiniteLoop: true,
        pager: true,
        pause: <?php echo $maxTime; ?>,
      });
    });
  </script>
  <style type="text/css">
    .bx-viewport {
      height: 450px!important;
      margin: 10px 0 0 0 !important;
      background: none !important;
      border: 0 !important;
      box-shadow: none !important;
    }
    .bx-wrapper {
      background: none !important;
      border: 0 !important;
      box-shadow: none !important;
    }
  </style>