<?php
// Startovanje sesije
session_start();

//konekcija sa bazom
require_once("DB_connect.php");

// uneto korisnicko ime i sifra 
$myusername=$_POST['user']; 
$mypassword=$_POST['pass'];

// Zastita od MySQL injection-a
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$mypassword = hash("sha256",$mypassword);


$sql="SELECT * FROM korisnici WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Brojim koliko ima redova u rezlutatu
$count=mysql_num_rows($result);

// Ako su korisnicko ime i sifra tacni u rezlutatu postoji samo jedan red 
if($count==1){	

// Ubacujem korisnicko ime i sifru u promenljive user i pass na nivou sesije kako bi ih kasnije koristio
$_SESSION['user'] = $myusername;
$_SESSION['pass'] = $mypassword; 


$query="UPDATE korisnici SET lastLogin='".date('r')."' WHERE username='$myusername';";

// redirekcija
header("location:search2.php");
}
else {
echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Index</title>
</head>

<body>
Pogrešno korisnicko ime ili šifra<br />
<br /><br />
<a href='login.php'>Povratak na logovanje</a>
</p>
</form>
</body>
</html>";
}
?>