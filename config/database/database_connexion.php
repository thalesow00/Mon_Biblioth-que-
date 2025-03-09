<?php
$host = "localhost";
$user = "root";
$password= "";
$database= "l2gl_db";
$port = 3306;

$dsn="mysql:host=$host;port=$port;dbname=$database;charset=utf8";

try{
    $connexion=new PDO($dsn,$user,$password);
    // die("connexion reussie avec success !")
}catch (PDOException $e) {
    die("Erreur de connexion à notre base de données: ". $e->getMessage());
}
?>