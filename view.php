<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Peržiūrėti DB</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="index.php">Pagrindinis</a> | <a href="insert.php">Naujas Įrašas</a> | <a href="logout.php">Atsijungti</a></p>
<h2>Peržiūrėti DB</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>ID</strong></th><th><strong>Prekes Kateogrija</strong></th><th><strong>Modelis</strong></th><th><strong>Gamintojas</strong></th><th><strong>Sandeli</strong></th><th><strong>veiksmas</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from new_record ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["id"]; ?></td><td align="center"><?php echo $row["kategorija"]; ?></td><td align="center"><?php echo $row["modelis"]; ?></td><td align="center"><?php echo $row["gamintojas"]; ?></td><td align="center"><?php echo $row["sandeli"]; ?></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Ištrinti</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>
