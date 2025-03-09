<?php
require('database_connexion.php');

function getUsersByEmail($pwd,$email){
    global $connexion;
    $query = "SELECT * FROM users WHERE email= ? AND pwd= ?";
    $stmt=$connexion->prepare($query);
    $stmt->execute(
        array($email,$pwd)
    );
    return $stmt;
};

function getAllUsers(){ 
    global $connexion;
    $query = "SELECT users.id, nom, prenom, email, id_role, designation, photos FROM users INNER JOIN roles ON users.id_role=roles.id";
    $stmt=$connexion->prepare($query);
    $stmt->execute();
    return $stmt; 
};

function addUsers($nom, $prenom, $email, $id_role, $pwd) {
	global $connexion;
	$query = "INSERT INTO users (`nom`, `prenom`, `email`, `id_role`, `pwd`) VALUES (?,?,?,?,?)"; //
    $stmt=$connexion->prepare($query);
	// $stmt->execute(
    // array($nom, $prenom, $email, $id_role, $pwd )
        return $stmt;
}


function afficherUsers() {
	global $connexion;
	$req = $connexion->prepare("SELECT * FROM users WHERE id='role'");
	$req->execute();
	return $req->fetchAll();
}


function UPdateUsers($nom, $prenom, $email, $id_role, $pwd) {
	$id=$_GET['id_role'];
	global $connexion;
	$req=$connexion->prepare ("UPDATE users SET  `nom`=?, `prenom`=?, `email`=?, `telephone`=?, `id_role`=?  WHERE id='$id_role'");
    $req->execute(array($nom, $prenom, $email, $id_role, $pwd));
}


