<?
class Model_articls extends Model
	{	

		function getLastArticls(){
			
			$query = "SELECT * FROM `articles` ORDER BY data DESC LIMIT 15";
			
			$array = $this->db->makeQuery($query);
			foreach ($array as $key => $value) {
				$array[$key]['text_articl'] = substr($value['text_articl'], 0, 100);

			}
			return $array;
		}


		function getTopArticls(){
			
			$query = "SELECT * FROM `articles` ORDER BY count_comment DESC LIMIT 5";
			
			$array = $this->db->makeQuery($query);
			foreach ($array as $key => $value) {
				$array[$key]['text_articl'] = substr($value['text_articl'], 0, 100);

			}
			return $array;
		}
	}

?>
