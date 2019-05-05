<div class="clearfix"></div>
               <div class="our-brand">
                  <h3 class="title"><strong>THƯƠNG </strong> HIỆU</h3>
                  <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand" class="next" href="#">&gt;</a></div>

                  <ul id="braldLogo">

                     <li>

                        <ul class="brand_item" >
                           <?php 
                                 $brand = $this->model->get_all("select * from tbl_brand order by pk_brand_id desc limit 0,5");
                                 foreach ($brand as $rows): {
                                  
                                 }
                               ?>
                           <li>
                              
                              <a href="#">

                                 <div class="brand-logo" ><img src="public/upload/brand/<?php echo $rows->c_img; ?>" alt="<?php echo $rows->c_name; ?>"></div>
                              </a>
                           <?php endforeach; ?>
                           </li>
                          
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>