<?php 
	//start session
	session_start();
	//load file model
	include "config.php";
	//load file model
	include "model/model.php";
	//lay bien controller truyen tu url
	$controller = isset($_GET["controller"]) ? $_GET["controller"] : "home";
		//noi cac thanh phan de ra duong dan vat ly
	$file_controller = "controller/frontend/controller_$controller.php";
	//load file master
	//kiem tra neu ton tai MVC o phan main thi load file master-trangcon.php, con neu khong ton tai MVC o phan main thi load file master_trangchu.php
	if (file_exists($file_controller))
		include "view/frontend/master-trangcon.php";
	else
		include "view/frontend/master-trangchu.php";
?>
 <!-- Subiz --> <!-- Subiz -->
                    <script>
                      (function(s, u, b, i, z){
                        u[i]=u[i]||function(){
                          u[i].t=+new Date();
                          (u[i].q=u[i].q||[]).push(arguments);
                        };
                        z=s.createElement('script');
                        var zz=s.getElementsByTagName('script')[0];
                        z.async=1; z.src=b; z.id='subiz-script';
                        zz.parentNode.insertBefore(z,zz);
                      })(document, window, 'https://widgetv4.subiz.com/static/js/app.js', 'subiz');
                      subiz('setAccount', 'acqibcohgaljhgiyjnnd');
                    </script>
                    <!-- End Subiz -->
                    <!-- End Subiz -->