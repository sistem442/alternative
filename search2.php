<?php
session_start();
if (!isset($_SESSION['user'])) {
	echo "Niste prijavljeni!<br />
 <a href='login.php'>Prijava</a>
<br />";
}
else{
include 'include/class_select_year.php';
$select1 = new select_year();
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
    <h1>Pretraga prijava za festival Alternative</h1>
    <br />
    <br />
    <form action="idResult.php" method="get">
      <span style="color:#303; font-size:16px">Pretraga po ID broju</span><br />
      <br />
      <br />
      Unesite ID broj:
      <input style="width:50px; margin: 0 10px 0 10px" type="text" id="id" name="id" /><br />
      <br />
      Unesite godinu:
      <select name="year_of_festival" /><?php echo $select1->get_select_year_from(2011);?></select><br />
      <br />
      <input type="submit" value="Prikaži jedan film"  />
      </form>

    <hr width="100%" style="color:#FFF" />
    <form action="table.php" method="get" >
      <br />
      Prikazivanje tabele sa svim filmovima, za štampu koristiti internet explorer<br />
       <br />
      Izaberite godinu: 
      <select name="year_of_festival" /><?php echo $select1->get_select_year_from(2011);?></select>
      <input type="submit" value="Prikaži tabelu"/>
    </form>
    <hr width="100%" style="color:#FFF" />
    <br />
<span style="color:#009; font-size:16px">Pretraga po naslovu</span>
<br /><br />
    <form action="search2Result.php" method="post">
      <select name="izbor">
      	<option value="enaslov">Engleski naslov</option>
      	<option value="onaslov">Originalni naslov</option>
        </select>
        <select name="year_of_festival">
      	<option value="2014">2014</option>
        <option value="2013">2013</option>
      	<option value="2012">2012</option>
      	<option value="2011">2011</option>
        <option value="any">Svi festivali</option>
        </select>
      <input type="text" name="naslov" /> <input name="submit" type="submit" value="Tra&#382;i" />
      <br />
    </form>
    
</div>  <!-- end .container -->
</body>
</html>
<?php } ?>