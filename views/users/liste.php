<?php
    $utilisateurs= true;
    include "../../header.php";
    include_once '../../navbar.php';
    require('../../config/database/users_db.php');
    $users=getAllUsers();
    
    // addUsers($nom, $prenom, $email, $id_role, $pwd );

    // var_dump($nom, $prenom, $email, $id_role, $pwd);

      
?>

<main class="m-5">
  <h1>La liste des utilisateur </h1>

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

  <a type="button" class="float-end mb-2 btn btn-primary" href="add_users.php">
    Ajouter <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
</svg>
  </a>
  <table class="table mt-4" id="myTable">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Photo</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Role</th>
      <th scope="col">Email</th>
      <!-- <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th> -->
    </tr>
  </thead>
  <tbody>
    <?php while($user = $users->fetch(PDO::FETCH_OBJ)):?>

    <tr>  
      <td><?=$user->id?></td>
      <td><img src="<?php echo '../../assets/images/users.png'; ?><?=$user->photos?>" class="img-fluid" alt=" image" style="width: 35px; heith: 35px; border-raduis: 50%"></td>
      <td><?=$user->nom?></td>
      <td><?=$user->prenom?></td>
      <td><?=$user->designation?></td>
      <td><?=$user->email?></td>
      <!-- <td><?=$user->modifier?></td>
      <td><?=$user->supprimer?></td> -->
    </tr>
    <?php endwhile?>

  </tbody>
</table>

</main>

<?php
  include "../../footer.php"
?>