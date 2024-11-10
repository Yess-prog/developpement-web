<?php 
require_once "class/personne.php";
$adulte1=new Adulte("ahmed","yousfi","info",2100.0);
$adolescent1=new Adolescent("imed","ben nasr",15,"football");
$adulte1->getInfo();
echo"<hr>";
$adolescent1->getInfo();
