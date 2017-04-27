<?php

class Controller_articls extends Controller
{
	private $db;
	function __construct($db)
	{	
		$this->model = new Model_articls($db);
		$this->view = new View();
	}

	function action_index($db)
	{	
	
		header("Location: /");
		die();
	}
	function action_getlast($db)
	{	
		$articls['all'] = $this->model->getLastArticls();
		$toparticls = $this->model->getTopArticls();
		$articls['toparticls'] = $toparticls;
		$this->view->generate('populararticls_view.php', 'template_view.php',$articls);
		
	}
}