<div class="promotion-banner">
               <div class="container">
                  <div class="row">
                     <?php 
                        $prob = $this->model->get_all("select * from tbl_probanner order by pk_probanner_id desc limit 0,3");
                        foreach ($prob as $rows):
                      ?>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="public/upload/probanner/<?php echo $rows->c_img; ?>" alt="<?php echo $rows->c_name; ?>"></div>
                     </div>
                   <?php endforeach; ?>
                  </div>
                 
               </div>
            </div>
         </div>