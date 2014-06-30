<?php
session_start();
if (!isset($_SESSION['user'])) {
	echo "Niste prijavljeni!<br />
 <a href='login.php'>Prijava</a>
<br />";
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Glavni meni</title>
<LINK href="ContentManagmentStylesheet.css" rel="stylesheet" type="text/css">
</head>
<body class="container">
<div class="container">
<br />
<br />
<br />
<br />
<div class="result"><a class="result2" href='displayApplications.php?year=2013'>Izlistaj prijave 2013</a></div>
<div class="result"><a class="result2" href='displayApplications.php?year=2012'>Izlistaj prijave 2012</a></div>
<div class="result"><a class="result2" href='displayApplications2011.php'>Izlistaj prijave 2011</a></div>
<hr />
<div class="result"><a class="result2" href='logout.php'>Izloguj se</a></div>
<br />
</div><!--container-->
</body>
</html>
<?php 
}
?>