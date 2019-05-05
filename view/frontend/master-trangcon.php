<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="public/frontend/images/favicon.png">
      <base href="http://localhost:8080/btl1/">
      <title>San Pham</title>
      <link href="public/frontend/css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="public/frontend/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="public/frontend/css/flexslider.css" type="text/css" media="screen"/>
      <link href="public/frontend/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="public/frontend/css/style.css" rel="stylesheet">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
            <?php include "remove_unicode.php"; ?>
         <!------- slider----->

         <?php 
         //load menu
            include "controller/frontend/controller_menu.php";
            
          ?>
          <?php 
        //kiem tra, neu duong dan ton tai thi load mvc do ra
        if(file_exists($file_controller))
          include $file_controller;
     ?>
          </div>
        
      
                <?php 

               // //load probanner
               // include "controller/frontend/controller_probanner.php";
               //    //load controller_product
               // include "controller/frontend/controller_hotproduct.php"; 
               //  //load controller_product
               // include "controller/frontend/controller_ftproduct.php"; 
                //load controller_brand
                // include "controller/frontend/controller_product_detail.php";
               include "controller/frontend/controller_brand.php"; 
               //load footer
               include "controller/frontend/controller_footer.php";

               ?> 
             
               
                  
   </body>
   <!-- Bootstrap core JavaScript==================================================-->
    <script type="text/javascript" src="public/frontend/js/jquery-1.10.2.min.js">
    </script>
       <script type="text/javascript" src="public/frontend/js/jquery-3.2.1.min.js">
    </script>
    <script type="text/javascript" src="public/frontend/js/bootstrap.min.js">
    </script>
    <script defer src="public/frontend/js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="public/frontend/js/jquery.carouFredSel-6.2.1-packed.js">
    </script>
    <script type="text/javascript" src='public/frontend/js/jquery.elevatezoom.js'>
    </script>
    <script type="text/javascript" src="public/frontend/js/script.min.js" >
    </script>
</html>
