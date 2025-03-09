<?php
require('../../config/database/users_db.php');

// savoir s'il a ete cliquée

if(isset($_POST['send'])){
    if(isset($_POST['last_name']) && !empty($_POST['last_name']) &&
    isset($_POST['first_name']) && !empty($_POST['first_name']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['pwd']) && !empty($_POST['pwd']) &&
    isset($_POST['role']) && !empty($_POST['role'])){
        $email = filter_input(INPUT_POST, 'email, FILTER_VALIDATE_EMAIL');
            if(!$email) {
                $errorMessage = "L'email invalide !";
            }else{
                $hash = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
                $last_name = htmlspecialchars($_POST["last_name"]);
                $first_name = htmlspecialchars($_POST["first_name"]);
                $role = $_POST["role"];

                addUsers( $nom, $prenom, $email, $id_role, $hash);
                $message = "Utilisateur Ajouté avec succée";
                header('Location:../../views/users/liste.php?message='.$message);
            }
            extract($_POST);
            // var_dump($last_name, $first_name, $tele, $email);
            // pour eviter que users saisie du contenue html pour eviter les injection SQL
            // $addUsers htmlspecialchars($last_name, $first_name, $tele, $email);
            // die();
    } else{
        $errorMessage = 'Veuillez remplire les champs obligatoire !';
    }
}
?>