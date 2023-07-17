<?php
$db = new PDO('mysql:host=localhost; dbname=autocompletion;charset=utf8','root','');
session_start();

if(!empty($_SESSION)) {
    $combat = $_SESSION["combat"];
    $acier = $_SESSION["acier"]
    
    $requete2 = $db->prepare('SELECT * FROM autocompletion');
    $requete2->execute([]);
    $res = $requete2->fetch();
    var_dump($res["id"]);
}
if (!empty($res)) {
    $_SESSION["id"] = $res["id"];
}
    if(isset($_SESSION["id"])){
        var_dump($_SESSION["id"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Acceuil</title>
</head>
<body>
    <div class="topnav">
        <a class="active" href="#">FindPokemon</a>
        <input type="text" placeholder="Search..">
    </div> 
</body>
</html>