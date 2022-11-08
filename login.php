<?php
require_once "koneksi.php";
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$q = $db->query("SELECT * FROM users WHERE username = '$username' AND password = '$password' OR email = '$username' AND password = '$password'");
	if($q->num_rows > 0){
		echo "Berhasil";
	}
	else {
		echo "Gagal";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post">
		<input type="text" name="username" placeholder="username">
		<input type="password" name="password" placeholder="password">
		<button type="submit" name="submit">Login</button>
	</form>
</body>
</html>