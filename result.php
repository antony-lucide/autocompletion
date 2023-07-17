<?php
$db = new PDO('mysql:host=localhost; dbname=autocompletion;charset=utf8','root','');
session_start();

if(!empty($_SESSION)) {
    $combat = $_SESSION["combat"];
    $acier = $_SESSION["acier"]
    
    $requete2 = $db->prepare('SELECT * FROM autocompletion where $combat=? $acier=?');
    $requete2->execute([$combat,$acier]);
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
