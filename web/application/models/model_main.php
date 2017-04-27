<?
class Model_main extends Model
	{	

		function getArticls(){
			
			$query = "SELECT * FROM `articles` ORDER BY data DESC";
			
			$array = $this->db->makeQuery($query);
			foreach ($array as $key => $value) {
				$array[$key]['text_articl'] = substr($value['text_articl'], 0, 100);

			}

			return $array;
		}
	}

?>
