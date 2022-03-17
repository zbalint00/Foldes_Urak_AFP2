<?php
//PROFIL OLDAL - (Linksch Balázs)
//require("connection.php");
session_start();

// Ha a felhasználó nincs belépve
if($_SESSION["userLoggedIn"] != true) {
	header('Location: login.php');
} 

$server = 'localhost'; 
$username = 'root';
$password = '';
$database = 'mnist';
$connection = mysqli_connect($server, $username, $password, $database);
$eredmeny = $connection->prepare('SELECT jelszo, email FROM users WHERE id = ?');
// Account ID alapján keressük meg a felhasználó adatait.
$eredmeny->bind_param('i', $_SESSION['userid']);
$eredmeny->execute();
//Kirakjuk változóba az adott IDhez tartozó adatokat.
$eredmeny->bind_result($jelszo, $email);
$eredmeny->fetch();
$eredmeny->close();
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Saját Profil</title>
		<link href="menuformaz.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
                <h1>Felhasználó</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profil</a>
				<a href="mnist.php"><i class="fas fa-user-circle"></i>MNIST</a>
				<a href="ki.php"><i class="fas fa-sign-out-alt"></i>Kijelentkezés</a>
			</div>
		</nav>
		<div class="content">
			<h2>Saját profil</h2>
			<div>
				<p>A profilod adatai:</p>
				<table>
					<tr>
						<td>Felhasználónév:</td>
						<td><?=$_SESSION['user']?></td>
					</tr>
					<tr>
						<td>Jelszó:</td>
						<td><?=$jelszo?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>
