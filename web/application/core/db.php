<?
class Db
{
	protected $dbc;
	protected $result;
	protected $id_good;
	function __construct()
	{
		$this->dbc = new mysqli(HOST, login, password, db);
		if ($this->dbc->connect_error) {
			die();
		}
	}

	public function makeQuery($query,$id = null){

		$this->result = $this->dbc->query($query);

		if (!$this->result) {
			var_dump($query);
			die();
		}
		return (is_bool($this->result)) ? $this->result : Lib::mysqli_fetch_all_my($this->result,$id);
	} 

	function __destruct(){
		$this->dbc->close();
	}
}?>