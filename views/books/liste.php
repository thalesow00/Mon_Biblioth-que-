<?php
    include "../../header.php";
    include_once '../../navbar.php';
?>

<main class="flex-shrink-0">
<div class="container">
        <h1 class="mt-5">Livres disponibles</h1>
</div>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex; 
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            width: 300px;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }
        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }
        .card h2 {
            margin-top: 10px;
        }
        .card p {
            color: #555;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            border-radius: 4px;
            text-decoration: none;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>


    <div class="container">
        <div class="card">
            <img src="../../assets/images/hawking.png" alt="Une brève histoire du temps">
            <h2>Une brève histoire du temps</h2>
            <p>Auteur: Stephen Hawking</p>
            <a href="#" class="button">Emprunter Livre</a>
        </div>
        <div class="card">
            <img src="../../assets/images/41EYLUDaF8L.png" alt="Le Cosmos">
            <h2>Le Cosmos</h2>
            <p>Auteur: Carl Sagan</p>
            <a href="#" class="button">Emprunter Livre</a>
        </div>
        <div class="card">
            <img src="../../assets/images/i416ishNzDYL.png" alt="Le Cosmos">
            <h2>Le Cosmos</h2>
            <p>Auteur: Carl Sagan</p>
            <a href="#" class="button">Emprunter Livre</a>
        </div>
        <div class="card">
            <img src="../../assets/images/couv.png" alt="Le Cosmos">
            <h2>Le Cosmos</h2>
            <p>Auteur: Carl Sagan</p>
            <a href="#" class="button">Emprunter Livre</a>
        </div>
        <div class="card">
            <img src="../../assets/images/couv.png" alt="Le Cosmos">
            <h2>Le Cosmos</h2>
            <p>Auteur: Carl Sagan</p>
            <a href="#" class="button">Emprunter Livre</a>
        </div>
        <div class="card">
            <img src="../../assets/images/couv.png" alt="Le Cosmos">
            <h2>Le Cosmos</h2>
            <p>Auteur: Carl Sagan</p>
            <a href="#" class="button">Emprunter Livre</a>
        </div>
        <div class="card">
            <img src="../../assets/images/couv.png" alt="Le Cosmos">
            <h2>Le Cosmos</h2>
            <p>Auteur: Carl Sagan</p>
            <a href="#" class="button">Emprunter Livre</a>
        </div>
        <div class="card">
            <img src="../../assets/images/couv.png" alt="Le Cosmos">
            <h2>Le Cosmos</h2>
            <p>Auteur: Carl Sagan</p>
            <a href="#" class="button">Emprunter Livre</a>
        </div>
        <div class="card">
            <img src="../../assets/images/couv.png" alt="Le Cosmos">
            <h2>Le Cosmos</h2>
            <p>Auteur: Carl Sagan</p>
            <a href="#" class="button">Emprunter Livre</a>
        </div>
        <div class="card">
            <img src="../../assets/images/couv.png" alt="Le Cosmos">
            <h2>Le Cosmos</h2>
            <p>Auteur: Carl Sagan</p>
            <a href="#" class="button">Emprunter Livre</a>
        </div>
        <div class="card">
            <img src="../../assets/images/couv.png" alt="Le Cosmos">
            <h2>Le Cosmos</h2>
            <p>Auteur: Carl Sagan</p>
            <a href="#" class="button">Emprunter Livre</a>
        </div>
        <div class="card">
            <img src="../../assets/images/couv.png" alt="Le Cosmos">
            <h2>Le Cosmos</h2>
            <p>Auteur: Carl Sagan</p>
            <a href="#" class="button">Emprunter Livre</a>
        </div>
    </div>
</main>

<?php
    include "../../footer.php"
?>