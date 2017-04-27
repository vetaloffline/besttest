<?
class Model_addarticl extends Model
	{	

		function addNewArticl($user,$articl,$name_articl){
			
			$data = date("Y-m-d H:i:s");  

			$query = "INSERT INTO `articles`(`name`, `text_articl`, `data`, `name_user`) 
						VALUES 				('".$name_articl."','".$articl."','".$data."','".$user."')";
			
			if ($this->db->makeQuery($query)) {
				header("Location: /");
			}
			
		}
	}

?>
