<?php 
session_start();
if (!isset($_SESSION['user'])) {   
die("Niste prijavljeni!<br />
 <a href='login.php'>Prijava</a>
<br />");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
.container{
	width: 60%;
	max-width:600px;
	min-width:600px;
	margin:0 auto;
	overflow:hidden;
	}
td{
	padding:10px;
	}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pretraga po datumu</title>
</head>
<body style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; background-color: #FF9;">
<div class="container">
<br />
<div align="center"></div>
<br />

<tr style="background-color: #FF9; height:20px">
<form action="search2Result.php" method="post">
<!--<table style="background-color:#096" width="100%" border="0" cellspacing="0" cellpadding="0">-->
  <tr style="background-color:#093">
    <td rowspan="2"><td width="65">Engleski naslov:</td>
    <td width="300"><input type="text" name="rec" />
      <input name="submit" type="submit" value="Tra&#382;i" /></td>
  </tr>
      </form>
    </td>
    </tr>
 
    
    
    
    </tbody>

</table>
  <br />
  <br />
<a href="adminIndex.php">Glavni meni</a>
</p>
</form>
</div>
</body>
</html>
