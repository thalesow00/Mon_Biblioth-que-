<?php

    $utilisateurs=true;
    require('../../action/auth/users/createActionUsers.php');
    include_once '../../header.php';
    include_once '../../navbar.php';
    $role = afficherUsers();
    
?>

<?php
    // include '../../views/home.php';
    
?>

<main class="flex-shrink-0">
<div class="container">
    
        <h1>Nouveau utilisateurs </h1> 
        <?php
            if(isset($errorMessage)) {
                ?>
                    <div class="alert alert-warning alert-dismissible fade show " role="alert">
                        <?= $errorMessage;  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
            }
            
        ?>

<?php 
			if(isset($_POST['send'])){
				addUsers(
					$_POST['last-name'],
					$_POST['first-name'],
					$_POST['email'],
          $_POST['role'],
					$_POST['pwd'],
				);
        // var_dump($nom, $prenom, $email, $id_role, $pwd);
			}
			
		?>
        
        <form class="row g-3" method="POST">
  <div class="col-md-6">
    <label class="form-label">Nom(s)</label>
    <input type="text" class="form-control" placeholder="Votre nom" name="last-name">
  </div>
  <div class="col-md-6">
    <label class="form-label">Prénom(s)</label>
    <input type="text" class="form-control" placeholder="Votre prénom" name="first-name">
  </div>
  <div class="col-md-6">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Adresse e-mail" name="email">
  </div> 
  <div class="col-md-6">
    <label class="form-label">Mot de passe</label>
    <input type="password" class="form-control" placeholder="Votre mot de passe" name="pwd">
  </div> <br> <br>
        <select name="role" id="role" class="role">
          <details>
          <option>Choisissez un rôle</option>
            <option value="2">User</option>
            <option value="1">Admin</option>
          </details>
          
        </select>
        <!-- <input type="submit" value="Soumettre"> -->
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="send" style="margin-top:15px;">Envoyer</button>
    <a href="liste.php"><button type="submit" class="btn btn-primary" name="send" style="margin-top:15px;">Retour</button></a>

  </div>
</form>
</div>
</main>

<?php
  include_once '../../footer.php'
?>