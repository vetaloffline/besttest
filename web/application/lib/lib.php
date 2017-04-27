<?
	class Lib 
	{
		static function clearRequest($req){
			return trim(strip_tags(htmlspecialchars($req)));		
		}

		static function mysqli_fetch_all_my($rows ,$id){
			$arr=[];
			while ($row = mysqli_fetch_assoc($rows)) {
				if ($id) {
					$id_p = $row[$id];
					$arr[$id_p] = $row;
				}else{
					$arr[] = $row;
				}
				
			}
			return $arr;
		}	
	}
?>