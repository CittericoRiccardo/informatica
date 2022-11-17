<?php
    echo "<p>Passaggio per valore</p>";
    $uno = 10;
    $due = $uno;
    echo "uno:$uno due: $due</br>";
    $uno=157;
    echo "uno:$uno due: $due</br>";
    echo "<p>Passaggio per riferimento</p>";
    $uno = 10;
    $due = &$uno;
    echo "uno:$uno due: $due</br>";
    $uno=157;
    echo "uno:$uno due: $due</br>";
?>
