<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
        require_once "classes/ville.php";
        $ville1=new ville("Chebba","Mahdia");
        $ville2=new ville("Rades","Ben Arous");
        echo"<pre>";
        echo ($ville1->get_info());
        echo"</pre>";
        echo"<pre>";
        echo ($ville2->__toString());
        echo"</pre>";
    ?>
    </body>
</html>


