<?php

function afficheAcceuil($cadeaux){
    $sql =  'SELECT * FROM profil';
    $cadeaux_html="";
    foreach  ($cadeaux as $row) {
        $cadeaux_html.="
        <tr>
            <td>$row[nom]</td>
            <td>$row[moyenne_min]</td>
            <td><input type='radio' name='prendre' value='prendre' /></td>
            <td><input type='radio' name='prendre' value='laisser' checked/></td>
        </tr>";
    }
    require_once('vue/gabarit.php');
}

?>
