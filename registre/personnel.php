<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a href="accueil.html" class="btn_add"><img src="image-plus.png" alt=""> retour</a>
            <table border="2">
                <tr bgcolor='#CCCCCC'>
                    <th>nom</th>
                    <th>Prenom</th>
                    <th>profession</th>
                    <th>voir</th>
                    <th>delete</th>
                 </tr>

        <?php 
            include('connexion.php');
 
            $res = "select * from utilisateurs";
            $resultat=mysqli_query($conn,$res);
            while($result= mysqli_fetch_assoc($resultat)){
                echo '<tr>';
                echo"<td>".$result['nom']."</td>";
                echo"<td>".$result['prenom']."</td>";
                echo"<td>".$result['profession']."</td>";
                echo "<td><a href=\"details.php?id=$result[id]\">details</a></td>";
                echo "<td><a href=\"supprimer.php?id=$result[id]\"
                onClick=\"return confirm('Etes vous sur ?')\">Supprimer</a></td>";
            }
            ?>
            </table>
    </div>
</body>
</html>