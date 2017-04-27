<?php

class Controller_Main extends Controller
{
	private $db;
	function __construct($db)
	{	
		$this->model = new Model_main($db);
		$this->view = new View();
	}

	function action_index($db)
	{	
		$articls = $this->model->getArticls();
		$this->view->generate('main_view.php', 'template_view.php',$articls);
		
	}
	
}