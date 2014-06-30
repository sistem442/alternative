<?php

class id_by_year {
	
	var $id;
	var $table_name;

	protected $connection;

    public function __construct(mysqli $connection,$table) {
        $this->connection = $connection;
		$this->table_name = $table;
    }
	
	public function get_id() {
		$mysqli = $this->connection;
		$query = "SELECT year_of_festival FROM $this->table_name WHERE year_of_festival = ".date('Y');
		$result = $mysqli->query($query);
		
		//if there are no entrys for current year set id to 1
		if ($result->num_rows == 0) $this->id = 1;
		
		//if there are entryes get last id number
		else {
			$query ="SELECT MAX( id ) maxId FROM (SELECT * FROM $this->table_name WHERE year_of_festival =".date('Y').") AS T;";
			$result = $mysqli->query($query);
			$temp = $result->fetch_object();
			$this->id = $temp->maxId + 1;
			if(!$result){
			$this->id = ("erorr");
			}
		}
		return $this->id;
	}
} 
?>
