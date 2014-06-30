<?php
session_start();
if (!isset($_SESSION['user'])) {
	echo "Niste prijavljeni!<br />
 <a href='login.php'>Prijava</a>
<br />";
}
else{
require_once("DB_connect.php");

$year_of_festival= $_GET['year_of_festival'];
//////////////  QUERY THE MEMBER DATA INITIALLY LIKE YOU NORMALLY WOULD
$query = "SELECT * FROM prijave WHERE year_of_festival = $year_of_festival ORDER BY id ASC";
$sql = mysql_query($query);
//echo $query;
//echo mysql_errno($con) . ": " . mysql_error($con) . "\n";
$nr = mysql_num_rows($sql); // Get total of Num rows from the database query
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pretraga Alternative baze</title>
<link href="css/backEnd.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container2">
    <h1>Prijave za festival Alternative <?php echo $year_of_festival;?></h1>
    <div style="margin-left:64px; margin-right:64px;">
     <h2>Ukupan broj prijava u pojedinačnoj konkurenciji: <?php echo $nr;?></h2>
   </div> 
      <div style="margin-left:64px; margin-right:64px;">
	  <?php
	  echo "<table  border='0px' >
	  <thead>
    	<tr>
    		<td>ID broj</td>
            <td>Originalni naziv</td>
            <td>Engleski Naziv</td>
            <td>Ime autora</td>
            <td>Zemlja</td>
            <td>Dužina</td>
            <td>Godina proizvodnje</td>
       </tr>
	   <tr><td colspan='7'>-------------------------------------------------------------------------------------------------------------------------------------------------------------</td></tr>
    </thead> 
	";
	  while($row2 = mysql_fetch_array($sql)){
	  	echo '<tr>
	<td>'.$row2["id"].'</td>
	<td>'.$row2["oriTitle"].'</td>
	<td>'.$row2["engTitle"].'</td>
	<td>'.$row2["autor"].'</td>
	<td>'.$row2["country"].'</td>
	<td>'.$row2["duration"].'</td>
	<td>'.$row2["year"].'</td>
	</tr>
	<tr><td colspan="7">
-------------------------------------------------------------------------------------------------------------------------------------------------------------</td></tr>
	
	
	';
	  }		   
	  echo "</table>"; ?></div>
<br />
<a style="color:#000" href="search2.php">Nazad na pretragu</a>
    
</div>  <!-- end .container -->
</body>
</html>
<?php } ?>