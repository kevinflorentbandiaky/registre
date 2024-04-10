<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ajout.css">
    <title>Ajouter un personnel</title>
</head>
<body>

    <div class="container">
   

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
       <h2>Ajouter un personnel</h2>
        <label for="nom">Nom :</label> <br>
        <input type="text" id="nom" name="nom"><br>
        
        <label for="prenom">Prenom:</label> <br>
        <input type="text" id="prenom" name="prenom"> <br>
        <label for="profession">profession :</label> <br>
        <input type="text" id="profession" name="profession"><br> 
        <label for="heure dentre">heure d'entre:</label> <br>
        <input type="text" id="heure dentre" name="heure dentre"> <br>
        <label for="heurede sortie">Heure de sortie:</label> <br>
        <input type="text" id="heurede sortie" name="heurede sortie"> <br><br>
        <input type="submit" name="valider" value="Valider"> <br>
    </form>
    
    </div>
</body>
</html>

<?php
// Code pour ajouter un nouveau produit à la base de données
// Assurez-vous de gérer les données soumises depuis le formulaire et de les insérer dans la table 'produit'

// Connexion à la base de données
$host = "localhost";
$user = "root";
$mdp = "06102001";
$bd = "isep";

$conn = mysqli_connect($host, $user, $mdp, $bd);

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

// Traitement de l'ajout de produit
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['valider'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $profession = $_POST['profession'];

    // Requête SQL pour insérer un nouveau produit
    $sql_insert = "INSERT INTO utilisateurs (nom, prenom, profession) VALUES ('$nom', '$prenom', '$profession')";
    if (mysqli_query($conn, $sql_insert)) {
        echo "Personnel ajouté avec succès.";

        header("Location: personnel.php");
        exit;

    } else {
        echo "Erreur : " . $sql_insert . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>