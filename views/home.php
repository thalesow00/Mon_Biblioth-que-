
<main class="flex-shrink-0">
<div class="container">
    
        <h1><?= $_SESSION['prenom']." ".$_SESSION['nom'] ?> </h1> 
        <div class="imaacceuil">
            <h2>Bienvenue dans votre espace personnelle pour la quete du savoir</h2>
            <p>Vous pouvez consulter, emprunter ou retourner des livres.</p>
            <a href="../../views/books/liste.php" class="btn btn-primary">Voir les livres</a>
            <!-- <a href="logout.php" class="btn btn-danger">Déconnexion</a> -->
            <img src="../../assets/images/petite-fille-dans-la-bibliothèque-choisir-un-livre.png" alt="" style="width: 90%; margin:0px; height:100%;">
        </div>
       

        
    </div>
</main>