<?
class Model_articlone extends Model
	{	

		function getOnearticl($id){

			$query = "SELECT * FROM `articles` WHERE id_articl = '$id'";
			
			return $this->db->makeQuery($query)[0];				
		}
		function getComments($id){

			$query = "SELECT * FROM `comments` WHERE articl_id = '$id'";
			
			return $this->db->makeQuery($query);				
		}

		function addcomment($id,$name,$komment){

			$query = "INSERT INTO `comments`( `articl_id`, `comment`, `name_user`) 
							VALUES 				($id,'$komment','$name')";
			$this->db->makeQuery($query);


			$query = "UPDATE `articles` SET `count_comment`= count_comment+1 WHERE id_articl = $id";
			$this->db->makeQuery($query);
			
		}

	}

?>
