<?php
include("auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pagrindinis</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Sveiki <?php echo $_SESSION['username']; ?>!</p>
<p><a href="dashboard.php">Valdymas</a></p>
<a href="logout.php">Atsijungti</a>
</div>
</body>
</html>
