<?php

require_once "functions.php";

echo "Salut\n";
echo "Appel de f1: " . (f1() + 1) . "\n";
echo brak("v") . "\n"; 
echo r(3) . "\n";
echo r(7) . "\n";
echo t(3) . "\n";
echo t(5) . "\n";

// Compléter le code de la fonction pairwise
// pour qu'elle renvoie un caractère "." si
// l'argument qu'elle reçoit est un entier pair
// et qu'elle renvoie un caractère "|" sinon.
// Les lignes suivantes, sans modifications,
// doivent produire:
// "|"
// "."
// "|"
// "."
echo pairwise(1)."\n";
echo pairwise(2)."\n";
echo pairwise(3)."\n";
echo pairwise(4)."\n";

?>