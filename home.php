<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("test.php");
        echo"<table>";
        echo "<tr><th>prenom</th><th>note</th></tr>";
        foreach($notes as $nom => $note) {  
            echo"<tr><td>$nom</td><td>$note</td></tr>";

        }
        echo "</table>";
        echo "<br>";
        echo "max :" .max($notes);
        echo "<br>";
        echo "min :" .min($notes);
        echo "<br>";
        asort($notes);
        print_r($notes);
        
        $flag=false;
        foreach($notes as $nom => $note) {
            if($note== 20) {
               $flag=true;
               break;            
        }
    }
    echo"<br>";
    if($flag) {
        echo "20 il existe";
    }else{
        echo" 20 il n'est existe pas";
    };
    echo "<br>";
    arsort($notes);
    print_r($notes);
    echo"<br>";
    echo array_sum($notes)/count(array_keys($notes));
    

    ?>
</body>
</html>