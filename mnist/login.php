<?php
    require 'connection.php';
	session_start();
	$db = new dbObj();
	$connection = $db->getConnection();
	mysqli_set_charset($connection, "utf-8");
    if (isset($_POST["belep"])) 
	{
		$result = mysqli_query($connection, "select * from users");
		while ($sor = $result->fetch_assoc()) 
		{
			$nev = $sor["felhasznalonev"];
			$id = $sor["id"];
			$jelszo = $sor["jelszo"];
			$jh =  password_hash($_POST['jelsz'], PASSWORD_DEFAULT);
			if ($_POST["nev"] == $nev && password_verify($_POST["jelsz"], $jelszo))
			{
				$_SESSION["id"] = $id;
				$_SESSION["user"]=$_POST["nev"];
				$_SESSION["pw"]=$_POST["jelsz"];
				$_SESSION["email"]=$sor["email"];
				$_SESSION["userid"] = $sor["id"];
				header("location:index.php");
			}
		}
    }
    if(isset($_POST["regi"]))
    {
        header("location:regisztral.php");
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="login">
			<h1>Földes Urak</h1>
			<h1>Bejelentkezés</h1>
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
			<form action="login.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="nev" placeholder="Felhasználónév" id="username">
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="jelsz" placeholder="Jelszó" id="password">
                <input type="submit" name="belep" value="Belépés">
                <input type="submit" name="regi" value="Regisztráció">
			</form>
		</div>
    </body>
</html>
