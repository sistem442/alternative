<?php
session_start(); 



//konekcija sa bazom
include_once"DB_connect.php";
//izbor baze
mysql_select_db("alternative_3120", $con);
	    $query = "Select * from prijave where id BETWEEN 78 AND 92)";
	    $result = mysql_query($query);
		while($row = mysql_fetch_array($result)){
				echo $row['id'];		
		}
 ?>
