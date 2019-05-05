<div class="clearfix">
        </div>
        <div class="page-index">
          <div class="container">
            <p>
              Home - Chi tiết tin tức!
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
             
              <div class="clearfix">
              </div>
              <div class="tab-box">
                <div id="tabnav">
                  <ul>
                    <li>
                      <a href="?">
                        Chi tiết
                      </a>
                    </li>
                    
                  </ul>
                </div>
                <?php 
                $id = isset($_GET["id"])?$_GET["id"]:0;
                $record = $this->model->get_a_record("select * from tbl_news  where pk_news_id = $id");
                
                 ?>
                <div class="tab-content-wrap">
                  <div class="tab-content" id="Descraption">
                    <p>
                     <?php echo $record->c_description; ?>
                    </p>
                    <p>
                      <?php echo $record->c_content; ?>
                    </p>
                  </div>
                
              </div>
              </div>
                </div>
                <div class="clearfix">
                </div>
              
            

          