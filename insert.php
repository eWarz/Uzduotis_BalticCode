<?php
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$kategorija = $_REQUEST['kategorija'];
$modelis =$_REQUEST['modelis'];
$sandeli = $_REQUEST['sandeli'];
$gamintojas = $_REQUEST['gamintojas'];
$ins_query="insert into new_record (`kategorija`,`modelis`,`sandeli`,`gamintojas`) values ('$kategorija','$modelis','$sandeli','$gamintojas')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "Sėkmingai pridėta.</br></br><a href='view.php'>Peržiūrėti pridėtą</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pridėti Naują Įrašą</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Pagrindinis</a> | <a href="view.php">Peržiūrėti įrašus</a> | <a href="logout.php">Atsijungti</a></p>

<div>
<h1>Pridėti Naują Gamintoją</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="kategorija" placeholder="Prekes Kategorija" required /></p>
<p><input type="text" name="modelis" placeholder="Modelis" required /></p>
<p><input type="text" name="gamintojas" placeholder="Gamintojas" required /></p>
<p><input type="text" name="sandeli" placeholder="Sandeli" required /></p>
<p><input name="submit" type="submit" value="Irašyti" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>
