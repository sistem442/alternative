<?php
session_start();
if (!isset($_SESSION['user'])) {
	echo "Niste prijavljeni!<br />
 <a href='login.php'>Prijava</a>
<br />";
}
else{
	
	// Database Connection  
require_once("DB_connect.php");
//izbor baze
mysql_select_db("alternative_3120", $con);
$id = $_GET['id'];
$year_of_festival = $_GET['year_of_festival'];	
	//echo 'id broj je'.$id;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/backEnd.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Prikaz filmova Alternative festivala</title>
<!-- InstanceEndEditable -->
<link href="backendCSS.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div class="container">
  <div class="sidebar1"> 
    <!-- end .sidebar1 --></div>
  <div class="content">
    <h1></h1>
    <!-- InstanceBeginEditable name="EditRegion3" -->
    <h3>Prikaz prijavljenog filma u pojedinačnoj konkurenciji Alternative festivala</h3>
    <br />
<br />
<br />
<br />
<a style="color:#000" href="search2.php">Nazad na pretragu</a>
<table width="100%">
      <tr valign="top">
        <td><form action="idResult.php" method="get">
            <input type="hidden" value="<?php $temp =  $id-1; echo $temp?>" name="id" />
			<input type="hidden" value="<?php echo $year_of_festival;?>" name="year_of_festival" id='year_of_festival'/>
            <input type="submit" style="width:150px" value="Prethodni film">
          </form>
          <form action="idResult.php" method="get">
			<input type="hidden" value="<?php echo $year_of_festival;?>" name="year_of_festival"/>
            <input type="hidden" value="<?php $temp2 =  $id+1; echo $temp2?>" name="id" />
            <input type="submit" style="width:150px" value="Sledeci film">
          </form></td>
        <td><form action="idResult.php" method="get">
            Prikaži film iz autorske konkurencije sa id brojem: 
			<input type="hidden" value="<?php echo $year_of_festival;?>" name="year_of_festival"/>
                <input type="text" name="id" />
            <input type="submit" value="Prikaži">
          </form></td>
      </tr>
    </table>
    <?php
// Perform MySQL query on only the current page number's results  
$query = ("SELECT * FROM prijave where id=$id AND year_of_festival=$year_of_festival ");
//echo $query;
$result = mysql_query($query);  
$row = mysql_fetch_array($result);
echo'<table cellpadding="10px" cellspacing="0px">';
    echo '<tr><td class="tabela">ID broj </td><td>'.$row['id']."</td></tr>"; 
    echo '<tr><td class="tabela">Originalni naziv </td><td>'.$row['oriTitle']."</td></tr>";  
    echo '<tr><td>Naziv na engleskom </td><td>'.$row['engTitle']."</td></tr>";
	echo '<tr><td>Link na preview </td><td>'.$row['link']."</td></tr>";  
	echo '<tr><td>Šifra za link</td><td>'.$row['link_password']."</td></tr>";
    echo '<tr><td>Autor </td><td>'.$row['autor']."</td></tr>";  
    echo '<tr><td>Zemlja</td><td>'.$row['country']."</td></tr>";  
    echo '<tr><td>Region</td><td>'.$row['region']."</td></tr>";  
    echo '<tr><td>Godina</td><td>'.$row['year']."</td></tr>";  
    echo '<tr><td>Trajanje </td><td>'.$row['duration']."</td></tr>";  
    echo '<tr><td>Format </td><td>'.$row['format']."</td></tr>";  
    echo '<tr><td>Screenplay</td><td>'.$row['screenplay']."</td></tr>";  
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
    echo '<tr><td>Adresa reditelja/autora</td><td>'.$row['address']."</td></tr>";  
    echo '<tr><td>Telefon autora</td><td>'.$row['tel']."</td></tr>";  
    echo '<tr><td>Fax autora</td><td>'.$row['fax']."</td></tr>";  
    echo '<tr><td>E-mail autora</td><td>'.$row['email']."</td></tr>";  
    echo '<tr><td>Sinopsis</td><td>'.$row['sinopsis']."</td></tr>";  
    echo '<tr><td>Slika autora</td><td><img width="600px" src="'.$row['slikaAutora'].'"></td></tr>';  
    echo '<tr><td>Slika iz filma 1</td><td><img width="600px" src="'.$row['slikaFilm1'].'"></td></tr>';  
    echo '<tr><td>Slika iz filma 2</td><td><img width="600px" src="'.$row['slikaFilm2'].'"></td></tr>';  
    echo '<tr><td>Biografija i filmografija</td><td>'.$row['bioFilmography']."</td></tr>";  
    echo '<tr><td>Vreme prijave</td><td>'.$row['vreme']."</td></tr></table>";	  
?>
    <br />
    <br />
    <a style="color:#000" href="search2.php">Nazad na pretragu</a>
<table width="100%">
      <tr valign="top">
        <td><form action="idResult.php" method="get">
            <input type="hidden" value="<?php $temp =  $id-1; echo $temp?>" name="id" />
			<input type="hidden" value="<?php echo $year_of_festival;?>" name="year_of_festival" id='year_of_festival'/>
            <input type="submit" style="width:150px" value="Prethodni film">
          </form>
          <form action="idResult.php" method="get">
			<input type="hidden" value="<?php echo $year_of_festival;?>" name="year_of_festival"/>
            <input type="hidden" value="<?php $temp2 =  $id+1; echo $temp2?>" name="id" />
            <input type="submit" style="width:150px" value="Sledeci film">
          </form></td>
        <td><form action="idResult.php" method="get">
            Prikaži film iz autorske konkurencije sa id brojem: 
			<input type="hidden" value="<?php echo $year_of_festival;?>" name="year_of_festival"/>
                <input type="text" name="id" />
            <input type="submit" value="Prikaži">
          </form></td>
      </tr>
    </table>
    <br />
<br />
<br />
<br />

    <!-- InstanceEndEditable --> 
    <!-- end .content --></div>
  <div class="sidebar2">
    <h4>&nbsp;</h4>
    <!-- end .sidebar2 --></div>
  <!-- end .container --></div>
</body>
<!-- InstanceEnd -->
</html>
<?php } ?>