<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("config.php");
    $table1 = ['Amine'=>'30', 'Ali'=>'60'];
    generateTable(Titre1: "name", Titre2: "age",tableau: $table1);
    ?>
</body>
</html>