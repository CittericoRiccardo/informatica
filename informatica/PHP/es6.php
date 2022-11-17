<?php 
// questo codice mi stampa in riga la tabellina del 2 
// prima creo la funzione e inserisco una variabile numero 
// creo un for dove parto da 1 
// stampo la  mia moltiplicazione
// stampo tabellina del 2
function stampaTabellina($numero){
    for($i=1;$i<11;$i++){
        echo ($i*$numero)",";       
    }
}
stampaTabellina(2);
?>