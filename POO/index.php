<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gestion de Compte</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php
    require_once "classes/Compte.php"; // Assurez-vous que le chemin est correct
    require_once "classes/CompteEpargne.php"; // Assurez-vous que le chemin est correct

    
    $cpte = new CompteEpargne("Kilani", 1200, 0.05);
    
    $cpte->verser(100);
    
    try {
        $cpte->retirer(150);
    } catch (Exception $e) {
        echo "<script>alert('" . $e->getMessage() . "');</script>";
    }
    
    echo "<hr>";
    
    echo "<emp>";
    var_dump($cpte);
    echo "</emp>";
    ?>
</body>
</html>