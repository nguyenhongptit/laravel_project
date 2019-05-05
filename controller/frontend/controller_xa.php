<?php 


include   "../../config.php";
include  "../../model/model.php";


class controller_xa{
	public $model;
	public function __construct(){
		$this->model = new model();


		$Id  = $_GET['id'];
		echo $Id;	
		$arr = 	$this->model->get_all("select *from ward where districtid = '$Id'");

		$htmlArr = "";
		foreach ($arr as $value) {
			$htmlArr .= "<option value='".$value->wardid."'>".$value->name."</option>";
		}
		echo $htmlArr;

	}
}
new controller_xa();

?>