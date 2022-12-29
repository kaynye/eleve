<?php
require("modele/modele.php");
require("vue/vue.php");


function cltrAcceuil(){
    $cadeaux = getCadeaux();
    afficheAcceuil($cadeaux);
}
?>
