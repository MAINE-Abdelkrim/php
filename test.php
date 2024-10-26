<?php
$notes=array("said"=>13,"badr"=> 16,"najat"=> 15) ;
$notes["ali"]=10;
function affichage($notes){
    echo"<table>";
        echo "<tr><th>prenom</th><th>note</th></tr>";
        foreach($notes as $nom => $note) {  
            echo"<tr><td>$nom</td><td>$note</td></tr>";

        }
        echo "</table>";
}
unset($notes["najat"]);

?>