<?php
function navigate ( string $destination ) {
    if ( $_SERVER['SCRIPT_NAME'] === $destination )
        return ' class = "active"';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="master.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="filtre-header">

            <div class="containerTitle">
                <h1>Des solutions et de l'accompagnement pour toutes vos preocupations concernant les nouvelles technologies</h1>
            </div>
            <div class="subheader">
                <div class="topone">
                    <a id="acceuil" href="index.php">LOCK</a>
                    <nav>
                        <ul>
                            <li><a href="solutions.php" <?= navigate("/solutions.php")?> >Solutions</a></li>
                            <li><a href="tutoriels.php" <?= navigate("/tutoriels.php")?> >Tutoriels</a></li>
                            <li><a href="forum.php" <?= navigate("/forum.php")?> >Forum</a></li>
                        </ul>
                    </nav>
                    <div class="searchconnection">
                        <input type="text"><button>search</button><button id="connnexion">Connexion</button>
                    </div>
                    <div class="clearboth"></div>
                </div>
                <div class="toptwo">
                    <nav>
                        <ul>
                            <li><a href="#">Crack-Office</a></li>
                            <li><a href="#">Translate</a></li>
                            <li><a href="#">GD++</a></li>
                            <li><a href="#">CloudLAB</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="topthree">
                    <button id="btnLangue">Fr</button>
                    <ul>
                        <li><a href="#">facebook</a></li>
                        <li><a href="#">twiter</a></li>
                        <li><a href="#">Bitcoin</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </header>