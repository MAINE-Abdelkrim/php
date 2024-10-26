<?php
function generateTable($Titre1,$Titre2,$tableau): void{
    echo"<table border='1'>";
    echo "<tr><th>$Titre1</th><th>$Titre2</th></tr>";
    foreach($tableau as $key => $value) {  
        echo"<tr><td>$key</td><td>$value</td></tr>";

    }
    echo "</table>";
}
?>
