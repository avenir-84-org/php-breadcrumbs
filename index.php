<?php

require_once "functions.php";

echo "Salut\n";
echo "Appel de f1: " . (f1() + 1) . "\n";
echo brak("v") . "\n"; 
echo r(3) . "\n";
echo r(7) . "\n";

// Modifier la fonction t dans functions.php
// pour que les lignes suivantes produisent.
// "[[---]]"
// "[[-----]]"
// La nouvelle fonction doit réutiliser la
// fonction brak obligatoirement.
// Les deux lignes suivantes ne doivent pas
// être modifiées.
echo t(3) . "\n";
echo t(5) . "\n";


?>