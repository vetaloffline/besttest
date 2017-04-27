<?php

class Controller_addarticl extends Controller
{
	private $db;
	function __construct($db)
	{	
		$this->model = new Model_addarticl($db);
		$this->view = new View();
	}
	function action_index($db)
	{	
		header("Location: /");
	}
	function action_add($db)
	{	
		$user = Lib::clearRequest($_POST['name_user']);
		$articl = Lib::clearRequest($_POST['articl']);
		$name_articl = Lib::clearRequest($_POST['name_articl']);
		if (empty($user) || empty($articl) || empty($name_articl)) {
			header("Location: /");
			die();
		}
		$this->model->addNewArticl($user,$articl,$name_articl);
	}

}