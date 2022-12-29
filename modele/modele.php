<?php

function getConnect(){
    $pdo = new PDO('sqlite:'.dirname(__FILE__).'/../database.sqlite');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
}


function getCadeaux(){
    $connexion = getConnect();
    $requete = "select * from cadeau";
    $res = $connexion -> query($requete);
    $cadeaux = $res->fetchAll();
    return $cadeaux;

}
?>
