<?php
include 'models/model.php';
/**
* 
*/
class Controller
{
	public $model;

	function __construct()
	{
		$this->model = new Model();
	}

	function invoke(){
		$reslt = $this->model->getlogin();
		if($reslt == 'login'){
			include 'views/task.php';
		}
		else{
			include 'views/login.php';
		}
	}
}

?>