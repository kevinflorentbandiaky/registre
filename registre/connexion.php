<?php
// Connexion à la base de données
$host = "localhost";
$user = "root";
$mdp = "06102001";
$bd = "isep";

$conn = mysqli_connect($host, $user, $mdp, $bd);

// Vérifier la connexion
if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
   
}
//echo "connexion reussi"
?>