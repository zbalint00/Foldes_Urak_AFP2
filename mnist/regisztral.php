<?php
    require 'connection.php';
    $db = new dbObj();
	$connection = $db->getConnection();
    mysqli_set_charset($connection,"utf8");
    if (isset($_POST["regi"]))
    {
        if (isset($_POST["nev"]) && isset($_POST["jelsz"]))
            {
            if ($_POST["nev"]!="" && $_POST["jelsz"]!="" && $_POST["email"]!="")
            {
                $e = $_POST["email"];
                $n = $_POST["nev"];
                $j = $_POST["jelsz"];
                $pw = password_hash("$j", PASSWORD_DEFAULT);
                $result = mysqli_query($connection, "INSERT INTO users (felhasznalonev, jelszo, email) VALUES ('$n','$pw','$e')");
            }
        }
        header("location:login.php");
    }
    if(isset($_POST["vissza"]))
    {
        header("location:login.php");
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="login">
            <h1>Regisztráció</h1>
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
            <form action="regisztral.php" method="POST">
                <label for="username">
				    <i class="fas fa-user"></i>
				</label>
                    <input type="text" name="nev" placeholder="Felhasználónév">
                <label for="password">
					<i class="fas fa-at"></i>
				</label>
                    <input type="email" name="email" placeholder="E-mail">
                <label for="password">
					<i class="fas fa-lock"></i>
				</label>
                    <input type="text" name="jelsz" placeholder="Jelszó">
                    <input type="submit" name="regi" onclick="alert('Ne adja meg a jelszavát senkinek!')" value="Regisztráció">
                    <input type="submit" name="vissza" value="Vissza">
            </form>
        </div>
    </body>
</html>
