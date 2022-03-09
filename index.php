<?php
require_once "./config.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Le coin de moki</title>
    <link rel="stylesheet" href="./asset/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/css/header.css">
    <link rel="shortcut icon" href="./asset/img/WIP.svg" type="image/x-icon">
</head>

<body>
    <header class=" d-flex flex-column border border-1 border-primary">
        <div class=" d-flex justify-content-between">
            <div class="container d-flex">
                <img src="./asset/img/image.svg" alt="logo">
                <h1>Le coin de moki</h1>
            </div>
            <div class="container d-flex flex-row-reverse ">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-list"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
                <img src="./asset/img/image.svg" alt="profil picture">
            </div>
        </div>
        <nav class="navbar d-flex justify-content-around">
            <button>Accueil</button>
            <button>Coin jeux vidéos</button>
            <button>Coin jeux sociétés</button>
            <button>Coin lecture</button>
            <button>Coin model 3D</button>
        </nav>
    </header>

    <main class="container border border-1 border-success">
        <div class="container">
            <h2>Articles récents:</h2>
        </div>
        <div class="container">
            <h2>Jeux vidéos récents:</h2>
        </div>
        <div class="container">
            <h2>Jeux de société récents:</h2>
        </div>
        <div class="container">
            <h2>Lecture recentes:</h2>
        </div>
        <div class="container">
            <h2>Model 3D récents:</h2>
        </div>
    </main>
    <footer class="border border-1 border-danger">
    </footer>
</body>

</html>