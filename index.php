<?php
echo"test 1";
$db = new PDO('mysql:host=localhost:3307; dbname=autocompletion;charset=utf8','root','');
session_start();

if(!empty($_POST)) {
    $recherche = $_POST["research"];
    
    $requete2 = $db->prepare('SELECT * FROM autocompletion where combat=? acier=?');
    $requete2->execute([$recherche]);
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
    <form action="" method= "post">
        <label for="prenom">Search</label>
        <input type="text" name="research" placeholder="login">
        <button type="submit" name="envoyer">connexion</button>
    </form>
    </body>
</html>