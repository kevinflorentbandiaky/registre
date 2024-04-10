<?php

include 'connexion.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "delete from utilisateurs where id =$id");

header("Location:personnel.php");
?>