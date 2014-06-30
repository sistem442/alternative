<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prikazivanje prijava jedna po jedna</title>

<style type="text/css">
td {
	border:2px solid #060;
}  
</style>
</head>

<body style="font-family:Arial, Helvetica, sans-serif; font-size:14px; background-color:#666; color:#FF6">
<?php  

// Database Connection  
require_once("DB_connect.php");

$year = $_GET['year'];

// If current page number, use it  
// if not, set one!  

if(!isset($_GET['page'])){  
    $page = 1;  
} else {  
    $page = $_GET['page'];  
}  

// Define the number of results per page  
$max_results = 1;  

// Figure out the limit for the query based  
// on the current page number.  
$from = (($page * $max_results) - $max_results);  

 // Perform MySQL query on only the current page number's results  
 if($year != 2013){
	$sql = "SELECT * FROM prijave WHERE year_of_festival != 2013 ORDER BY id ASC LIMIT $from, $max_results ";
}else{
	$sql = "SELECT * FROM prijave WHERE year_of_festival = 2013 ORDER BY id ASC LIMIT $from, $max_results ";
}
//echo $sql;
$result = mysql_query($sql); 
mysql_errno($con); 
echo'<table cellpadding="10px" cellspacing="0px">';
while($row = mysql_fetch_array($result)){  
    // Build your formatted results here.  
    echo '<tr><td class="tabela">Originalni naziv </td><td>'.$row['oriTitle']."</td></tr>";  
    echo '<tr><td>Naziv na engleskom </td><td>'.$row['engTitle']."</td></tr>";  
    echo '<tr><td>Autor </td><td>'.$row['autor']."</td></tr>";  
    echo '<tr><td>Država </td><td>'.$row['country']."</td></tr>";  
    echo '<tr><td>Region </td><td>'.$row['region']."</td></tr>";  
    echo '<tr><td>Godina </td><td>'.$row['year']."</td></tr>";  
    echo '<tr><td>Trajanje </td><td>'.$row['duration']."</td></tr>";  
    echo '<tr><td>Format </td><td>'.$row['format']."</td></tr>";  
    echo '<tr><td>Screenplay </td><td>'.$row['screenplay']."</td></tr>";  
    echo '<tr><td>Direktor fotografije </td><td>'.$row['dop']."</td></tr>";  
    echo '<tr><td>Montaža</td><td>'.$row['editing']."</td></tr>";  
    echo '<tr><td>Glumci</td><td>'.$row['actors']."</td></tr>";  
    echo '<tr><td>Muzika </td><td>'.$row['music']."</td></tr>";  
    echo '<tr><td>Ostalo</td><td>'.$row['other']."</td></tr>";  
    echo '<tr><td>Produkcija</td><td>'.$row['production']."</td></tr>";  
    echo '<tr><td>Adresa produkcije </td><td>'.$row['paddress']."</td></tr>";  
    echo '<tr><td>Telefon produkcije </td><td>'.$row['ptel']."</td></tr>";  
    echo '<tr><td>Fax produkcije</td><td>'.$row['pfax']."</td></tr>";  
    echo '<tr><td>E-mail produkcije</td><td>'.$row['pemail']."</td></tr>";  
    echo '<tr><td>Ime reditelja/autora</td><td>'.$row['author2']."</td></tr>";  
    echo '<tr><td>Telefon autora</td><td>'.$row['tel']."</td></tr>";  
    echo '<tr><td>Fax autora</td><td>'.$row['fax']."</td></tr>";  
    echo '<tr><td>E-mail autora</td><td>'.$row['email']."</td></tr>";  
    echo '<tr><td>Sinopsis</td><td>'.$row['sinopsis']."</td></tr>";  
    echo '<tr><td>Slika autora</td><td><img width="600px" src="'.$row['slikaAutora'].'"></td></tr>';  
    echo '<tr><td>Slika iz filma 1</td><td><img width="600px" src="'.$row['slikaFilm1'].'"></td></tr>';  
    echo '<tr><td>Slika iz filma 2</td><td><img width="600px" src="'.$row['slikaFilm2'].'"></td></tr>';  
    echo '<tr><td>Biografija i filmografija</td><td>'.$row['bioFilmography']."</td></tr>";  
    echo '<tr><td>Vreme prijave</td><td>'.$row['vreme']."</td></tr></table>";  
}  

// Figure out the total number of results in DB:  
if($year != 2013){
	$sql = "SELECT COUNT(*) as Num FROM prijave WHERE year_of_festival != 2013";
}else{
	$sql = "SELECT COUNT(*) as Num FROM prijave WHERE year_of_festival = 2013";
}
$total_results = mysql_result(mysql_query($sql),0);  

// Figure out the total number of pages. Always round up using ceil()  
$total_pages = ceil($total_results / $max_results);  

// Build Page Number Hyperlinks  
echo "<center>Select a Page<br />";  

// Build Previous Link  
if($page > 1){  
    $prev = ($page - 1);  
    echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$prev&year=$year\"><<Previous</a> ";  
}  

for($i = 1; $i <= $total_pages; $i++){  
    if(($page) == $i){  
        echo "$i ";  
        } else {  
            echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$i&year=$year\">$i</a> ";  
    }  
}  

// Build Next Link  
if($page < $total_pages){  
    $next = ($page + 1);  
    echo "<a href=\"".$_SERVER['PHP_SELF']."?page=$next&year=$year\">Next>></a>";  
}  
echo "</center>";  
?>
</body>
</html>