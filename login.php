<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Prisijungimas</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
	session_start();
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		$query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); 
            }else{
				echo "<div class='form'><h3>Prisijungimo Vardas/Slaptažodis yra neteisingas.</h3><br/>Paspauskite čia, kadp prisijungtumėte <a href='login.php'>Prisijungti</a></div>";
				}
    }else{
?>
<div class="form">
<h1>Prisijungimas</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Vartotojo Vardas" required />
<input type="password" name="password" placeholder="Slaptažodis" required />
<input name="submit" type="submit" value="Prisijungti" />
</form>
</div>
<?php } ?>
</body>
</html>
