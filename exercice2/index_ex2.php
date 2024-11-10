<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "class/miseEnForme.php";
    $m=new MiseEnForme();
    $ch="Programmation orientée objet en PHP";
    
    echo"Gras:".$m->gras($ch);
    echo"<br>";
    echo"Italique:".$m->italique($ch);
    echo"<br>";
    echo"Souligné:".$m->souligne($ch);
    echo"<br>";
    echo"Majusclue:".$m->majuscule($ch);
    echo"<br>";


?>
</body>
</html>