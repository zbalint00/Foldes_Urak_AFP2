<?php
    // MNIST LOGIKA (Makai Balázs) 
    require 'connection.php';
    session_start();
    $_SESSION['imageSrc'] = "\Project\images\num_1977_[3].png";

    // Ha nincs bejelentkezve
    if($_SESSION["userLoggedIn"] != true) {
        header('Location: login.php');
    } 

    //Dobja fel adatbázisba az eredményt
    if($_SESSION['kerdesekSzama'] <= 0) {
        $_SESSION['elozoJoMegoldasok'] = $_SESSION['jóMegoldások'];

        $db = new dbObj();
        $connection = $db->getConnection();

        $query = "INSERT INTO rangsor SET felhasznalonev = ' ".$_SESSION["user"]." ', pontszam =' ".$_SESSION["jóMegoldások"]." ' ";

        if(mysqli_query($connection, $query)){
            $response = array(
                'status' => 1,
                'status_message' => 'score uploaded successfully'
            );
        }else{
            $response = array(
                'status' => 0,
                'status_message' => 'score upload failed'
            );
        }
        header("Location: index.php");
    }

    // Ha beadtunk egy számot..
    if(!empty($_GET["number"])){
        $ertek = intval($_GET["number"]);
        // És a szám helyes..
        if($ertek == $_SESSION['helyesErtek']) {
            $_SESSION["jóMegoldások"] = $_SESSION["jóMegoldások"] + 1;
            $_SESSION["kerdesekSzama"] = $_SESSION["kerdesekSzama"] - 1;
            header("Location: mnist.php");
        }
        // És a szám helytelen..
        else {
            $_SESSION["kerdesekSzama"] = $_SESSION["kerdesekSzama"] - 1;
            header("Location: mnist.php");
        }
    }

    function getRandomImage() {   
        //Generálunk egy random számot                  
        $index = rand(0, 2000);

        //Készítünk egy tömböt
        $path = 'Resources/Images';
        $files = scandir($path);

        $randomImage = $files[$index];
        $_SESSION["helyesErtek"] = substr($randomImage, -6, 1);
        print($randomImage);

    }
?>

<html>
    <head>
    
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="./Resources/button.css">
        <script>

        // SZÁMBILLENTYŰZET (Galvács István)

        function input(e) {
            var tbInput = document.getElementById("tbInput");
            tbInput.value = e.value;
        }

        function del() {
            var tbInput = document.getElementById("tbInput");
            tbInput.value = tbInput.value.
            substr(0, tbInput.value.length - 1);
        }

        </script>
        <title>Mnist</title>
    </head>
    <body>
    <nav class="navtop">
			<div>
                <h1>Felhasználó</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profil</a>
				<a href="mnist.php"><i class="fas fa-user-circle"></i>MNIST</a>
				<a href="ki.php"><i class="fas fa-sign-out-alt"></i>Kijelentkezés</a>
			</div>
		</nav>
        <!-- MNIST LOGIKA (Makai Balázs) -->

            <img src="Resources\Images\<?php echo getRandomImage(); ?>">

            <p> Helyes válaszok száma: <?php echo $_SESSION["jóMegoldások"] ?> </p>
            <p> Hátralévő kérdések száma: <?php echo $_SESSION["kerdesekSzama"] ?> </p>


            <form>
                <label for  = "number">Number:</label>
                <input type = "number" id ="tbInput" name ="number" min="0" max = "9" step = "1" required>
                <input type = "submit" value="Submit">
            </form>

        <!-- SZÁMBILLENTYŰZET (Galvács István) -->
        
        <div id="VirtualKey">
            <input class="button"id="btn1" type="button" value="1" onclick="input(this);" />
            <input class="button"id="btn2" type="button" value="2" onclick="input(this);"/>
            <input class="button"id="btn3" type="button"value="3" onclick="input(this);" />
            <br />
            <input class="button"id="btn4" type="button"value="4" onclick="input(this);" />
            <input class="button"id="btn5" type="button"value="5" onclick="input(this);" />
            <input class="button"id="btn6" type="button"value="6" onclick="input(this);" />
            <br />
            <input class="button"id="btn7" type="button"value="7" onclick="input(this);" />
            <input class="button"id="btn8" type="button"value="8" onclick="input(this);" />
            <input class="button"id="btn9" type="button"value="9" onclick="input(this);" />
            <br />
            <input class="button"id="btn0" type="button"value="0" onclick="input(this)" />
            <input class="button"id="btnDel" type="button" value="Töröl " onclick="del();"style="width:65px" />
        </div>
    </body>
</html>
