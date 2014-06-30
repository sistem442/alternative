<?php session_start(); ?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>Application result</title>
    <link rel='icon' href='favicon.ico' type='image/ico' />
    <style type='text/css'>
		<!--
		body{
			color:white;
			bgcolor:black;}
		a:link {
			color: #999999;
			text-decoration: none;
			font-size: 10px;
		}
		a:visited {
			color: #999999;
			text-decoration: none;
		}
		a:hover {
			color: #0099CC;
			text-decoration: none;
			font-size: 15px;
		}
		a:active {
			color: #999999;
			text-decoration: none;
			font-family: Verdana, Arial, Helvetica, sans-serif;
			font-size: 10px;
		}
		.style1 {color: #000000}
		body {
			background-color: #000000;
		}
		.style2 {color: #FFFFFF}
		a {
			font-size: 10px;
		}
		-->
	</style>
</head>
<body style='color:white'>
<?php

//Ako nije prosla verifikacija captcha
if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  
{ 
     echo  "<span style='color:white;'><strong>Niste uneli ispravan kod sa slike za verifikaciju.</strong><br />
			Koristite dugme za povratak da biste izbegli gubitak unetih podataka. </span>";
} 

// ako je u redu captcha
else 
{      
	// ako su slike uspesno uplodovane
	if(($_FILES['ufile']['size'][0] > 0)&&($_FILES['ufile']['size'][1] > 0)&&($_FILES['ufile']['size'][2] > 0))
	{
	
	//konekcija sa bazom
	include_once"DB_connect.php";
	include_once"include/class_id_by_year.php";
	
	$table_id = new id_by_year($mysqli,"prijave");
	$id = $table_id->get_id();
		
	//citanje unetih podatka
	$oriTitle = mysql_real_escape_string(trim($_POST["oriTitle"]));
	$autor = mysql_real_escape_string(trim($_POST["autor"]));
	$engTitle = mysql_real_escape_string(trim($_POST["engTitle"]));
	$link = mysql_real_escape_string(trim($_POST["link"]));
	$link_password = mysql_real_escape_string(trim($_POST["link_password"]));
	$country = mysql_real_escape_string(trim($_POST["country"]));
	if(	$country != "Serbia" and 
		$country != "Bosnia and Herzegovina" and 
		$country != "Croatia" and 
		$country != "Macedonia" and 
		$country != "Montenegro" and 
		$country != "Slovenia")
			$region = "international";
	else 
			$region = "jugoslavia";
		
	$year = mysql_real_escape_string(trim($_POST["year"]));
	$duration= mysql_real_escape_string(trim($_POST["duration"]));
	$format = mysql_real_escape_string(trim($_POST["format"]));
	$screenplay = mysql_real_escape_string(trim($_POST["screenplay"]));
	$dop = mysql_real_escape_string(trim($_POST["dop"]));
	$editing = mysql_real_escape_string(trim($_POST["editing"]));
	$actors = mysql_real_escape_string(trim($_POST["actors"]));
	$music = mysql_real_escape_string(trim($_POST["music"]));
	$other = mysql_real_escape_string(trim($_POST["other"]));
	$production = mysql_real_escape_string(trim($_POST["production"]));
	$paddress = mysql_real_escape_string(trim($_POST["paddress"]));
	$ptel = mysql_real_escape_string(trim($_POST["ptel"]));
	$pfax = mysql_real_escape_string(trim($_POST["pfax"]));
	$pemail = mysql_real_escape_string(trim($_POST["pemail"]));
	$tel = mysql_real_escape_string(trim($_POST["tel"]));
	$address = mysql_real_escape_string(trim($_POST["address"]));
	$email = mysql_real_escape_string(trim($_POST["email"]));
	$sinopsis = mysql_real_escape_string(trim($_POST["sinopsis"]));
	$bioFilmography = mysql_real_escape_string(trim($_POST["bio-filmography"]));
	$vreme = date("r");
	$year_of_festival = date('Y');
	
	//Upload folder
	$uploadFolder = "prijave/2014/";
	
	//set where you want to store files
	// make a unique filename for the uploaded file and check it is not already 
	// taken... if it is already taken keep trying until we find a vacant one
	$now = time();
	$now = $now + rand(10000,99999); 
	//Uzimam zadnjih 6 karaktera od image/jpeg, secem bele karaktere i dobijam tip slike
	$imageType = rtrim(substr( $_FILES['ufile']['type'][0],6,6));
	//ako se koristi tupavi IE za upload umesto jpeg bice pjpeg!?! Zato mora ovo
	if($imageType == "pjpeg")$imageType = "jpeg";
	$path = $uploadFolder.$now.".".$imageType;
	$now++; 
	$imageType = rtrim(substr( $_FILES['ufile']['type'][1],6,6));
	//ako se koristi tupavi IE za upload umesto jpeg bice pjpeg!?! Zato mora ovo
	if($imageType == "pjpeg")$imageType = "jpeg";
	$path1 = $uploadFolder.$now.".".$imageType; 
	$now++;
	$imageType = rtrim(substr( $_FILES['ufile']['type'][2],6,6));
	//ako se koristi tupavi IE za upload umesto jpeg bice pjpeg!?! Zato mora ovo
	if($imageType == "pjpeg")$imageType = "jpeg";
	$path2 = $uploadFolder.$now.".".$imageType; 
	//copy file to where you want to store file
	$copy = copy($_FILES['ufile']['tmp_name'][0], $path);
	 // prompt if successfully copied
	 if($copy){
	 echo "<span style='color:white;'>Slika autora je uspešno uploudovana!</span><br>";
	 }else{
	 die ( "<span style='color:white;'>Slika autora nije mogla biti uploudovana!</span><br>");
	 }
	//copy file to where you want to store file
	$copy = copy($_FILES['ufile']['tmp_name'][1], $path1);
	 // prompt if successfully copied
	 if($copy){
	 echo "<span style='color:white;'>Slika kadar 1 je uspešno uploudovana!</span><br>";
	 }else{
	 die ( "<span style='color:white;'>Slika kadar 2 nije mogla biti uploudovana!</span><br>");
	 }
	 //copy file to where you want to store file
	$copy = copy($_FILES['ufile']['tmp_name'][2], $path2);
	 // prompt if successfully copied
	 if($copy){
	 echo "<span style='color:white;'>Slika kadar 2 je uspešno uploudovana!</span><br>";
	 }else{
	 die ( "<span style='color:white;'>Slika kadar 2 nije mogla biti uploudovana!</span><br>");
	 }
	
	/*$HTTP_POST_FILES['ufile']['name'] = file name
	//$HTTP_POST_FILES['ufile']['size'] = file size
	//$HTTP_POST_FILES['ufile']['type'] = type of file
	echo "File Name :".$_FILES['ufile']['name'][0]."<BR/>";
	echo "File Size :".$_FILES['ufile']['size'][0]."<BR/>";
	echo "File Type :".$_FILES['ufile']['type'][0]."<BR/>";
	echo "<img src="$path" width="150" height="150">";
	echo "<P>";
	
	echo "File Name :".$_FILES['ufile']['name'][1]."<BR/>";
	echo "File Size :".$_FILES['ufile']['size'][1]."<BR/>";
	echo "File Type :".$_FILES['ufile']['type'][1]."<BR/>";
	echo "<img src="$path1" width="150" height="150">";
	echo "<P>";
	
	echo "File Name :".$_FILES['ufile']['name'][2]."<BR/>";
	echo "File Size :".$_FILES['ufile']['size'][2]."<BR/>";
	echo "File Type :".$_FILES['ufile']['type'][2]."<BR/>";
	echo "<img src="$path2" width="150" height="150">";
	*/
	
	//izraz za upis u nove knjige u bazu
	$query2 = "INSERT into prijave
				(id,oriTitle,engTitle,autor,country,region,year,duration,format,
				screenplay,dop,editing,actors,music,other,production,paddress,
				ptel,pfax,pemail,tel,link,link_password,email,sinopsis,slikaAutora,slikaFilm1,
				slikaFilm2,bioFilmography,vreme,year_of_festival,address) 
				VALUES (".$id.",'".$oriTitle." ','".$engTitle."','".$autor."','".$country."',
				'".$region."',".$year.",'".$duration ."','".$format." ','".$screenplay."',
				'".$dop."','".$editing."','".$actors."','".$music."','".$other."',
				'".$production."','".$paddress."','".$ptel."','".$pfax."','".$pemail."',
				'".$tel."','".$link."','".$link_password."','".$email."','".$sinopsis."','".$path."','".$path1."',
				'".$path2."','".$bioFilmography."','".$vreme."',".$year_of_festival.",'".$address."');";
	//echo $query2;
	if (!$mysqli->query($query2)) 
	{
		printf("<span style='color:white; background-color:black;'><br />
			<br />
			Greška broj 2. Obavestite tehničku podršku na it@dksg.rs</span></a><br />
			Error code: %s\n", $mysqli->errno);
		die();
	}
	
	/* close connection */
	$mysqli->close();
	
	
	//ispis html stranice
	echo "
	<br />
	<br />
	Prijava je uspešna.<br />
	<br />
	<br />
	<br />
	 </body>
	</html>";
	}//ako su slike uspesno uploudovane
	//ako slike nisu selektovane ili su prevelike
	else
	{
		die("<span style='color:white; background-color:black;'>Niste odabrali sliku ili ste odabrali sliku preko 1MB. <br />
			 <br />
			 Vratite se na prethodnu stranicu pomuću dugmeta za povratak.</span>");
		}
}// ako je u redu captcha
 ?>
