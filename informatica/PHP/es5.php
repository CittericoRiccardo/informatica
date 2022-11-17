<?php 
echo "<h2>ARRAY CLASSICO</h2>"
$colore=array("bianco","nero","giallo","rosso");
for($i=0;$i<4;$i++){
    echo"<br>".$colore[i];
}
echo "<h2>ARRAY ASSOCIATIVO</h2>";
echo "<p>dichiarare a;rray associativo che contiene colori b->bianco ,g-> giallo
r->rosso </p>";
$array_colore=array("b"=>"bianco","n"=>"nero","g"=>"giallo","r"=>"rosso");
foreach($array_colore as $indice =>$valore){
    echo"<br>".$indice;
    echo"-".$valore;
}
?>