<?php

class Controller_articlone extends Controller
{
	private $db;
	function __construct($db)
	{	
		$this->model = new Model_articlone($db);
		$this->view = new View();
	}

	function action_index($db)
	{	
		
		
	}
	function action_getarticl($db)
	{	$id = Lib::clearRequest($_GET['id']);
		$articls = $this->model->getOnearticl($id);
		$comments = $this->model->getComments($id);

		foreach ($comments as $key => $value) {
			$articls['comments'][$value['id_comment']] = $value;
		}

		$this->view->generate('onearticl_view.php', 'template_view.php',$articls);
		
	}

	function action_addcoment($db)
	{	$name = Lib::clearRequest($_POST['nameuser']);
		$komment = Lib::clearRequest($_POST['komment']);
		$id = Lib::clearRequest($_POST['id']);
			if (empty($name) || empty($komment) || empty($id)) {
				header("Location: /articlone/getarticl?id=$id");
				die();
			}
		$articls = $this->model->addcomment($id,$name,$komment);
		header("Location:/articlone/getarticl?id=$id");
		
	}
	
}