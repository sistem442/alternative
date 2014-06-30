<?php
session_start(); 



//konekcija sa bazom
include_once"DB_connect.php";
//izbor baze
mysql_select_db("alternative_3120", $con);

	$id = 79;
	while($id<92){
	    $query2 = "Insert into prijave (id) values $id)";
		$id++;
        $result2 = mysql_query($query2);
		echo $id;		
	}
 ?>
