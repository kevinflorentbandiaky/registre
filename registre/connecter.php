<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $username = $_POST['username'];
    $password = $_POST['password'];

   

    if ($username === "admin" && $password === "password") {
       
        header("Location: accueil.html");
        exit();
    } else {
        
        $error_message = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connecter.css">
    <title>Connexion</title>
</head>
<body>
    
    <?php
    
    if (isset($error_message)) {
        echo "<p>$error_message</p>";
    }
    ?>
    <div class="container">
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h2>Connexion</h2>
        <label for="username">Nom d'utilisateur:</label><br>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Mot de passe:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <div class="connecter">
        <input type="submit" value="Se connecter"> <br>
        </div>
    </form>
    </div>
</body>
</html>