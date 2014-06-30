<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional
//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Rezlutat pretrage stare arhive</title>
<link href="main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
session_start();
if (isset($_SESSION['user'])){}
else{
	echo "Niste prijavljeni!<br />
 <a href='login.php'>Prijava</a>
<br />";
}
//konekcija sa bazom
require_once("DB_connect.php");
//citanje parametara
$year_of_festival = $_POST['year_of_festival'];
$izbor = $_POST['izbor'];
$rec = $_POST['naslov'];
if($izbor == 'enaslov')
	$naslov = 'engTitle';
else
	$naslov = 'oriTitle';
if($year_of_festival != 'any')
	$query ="SELECT * FROM prijave WHERE $naslov LIKE '%$rec%' AND year_of_festival = $year_of_festival";
else
	$query ="SELECT * FROM prijave WHERE $naslov LIKE '%$rec%' ORDER BY year_of_festival DESC";

//echo $query;
$result = mysql_query($query);
//ako nepostoji trazeni unos korisniku javljamo gresku 
if(mysql_num_rows($result) == 0){
	die ("<br><br>Ne postoji unos za traženu reč!</br>
		 <a href='search2.php'>Povratak</a>");
}
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional
//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Pretraga po datumu</title>
<script type="text/javascript">
function prikazi(id,year_of_festival){
	window.location = "idResult.php?id="+id+"&year_of_festival="+year_of_festival;
	}	
</script>
<link href="css/backEnd.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container2">
<br />
<br />
<a href="search2.php">Glavni meni</a>
<br />
<br />
<br />
<br />
<table cellpadding='10px', border='1px', cellspacing='10px'>
<tr style='background-color:#0C0'>
  <td>ID Broj</td>
  <td>ENG Naziv</td>
  <td>Autor</td>
  <td>Godina Festivala</td>
  
</tr>
<?php while($row = mysql_fetch_array($result))
  {
  echo "<tr>
          <td>".$row['id']."</td><td>".$row['engTitle']."</td><td>".$row['autor']."</td><td>".$row['year_of_festival']."</td>
          <td>
            <input type='button' onclick='prikazi(".$row['id'].",".$row['year_of_festival'].")' value='Prikaži'/><br />
          </td>
		 </tr>";
  }
  ?>
  </table>
<br />
</div>
</body>
</html>