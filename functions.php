<?php

function f1() {
    return 4;
}

function brak($s) {
    return "[" . $s . "]";
}

function r($n) {
    $out = "";
    for ($i = 0; $i < $n; ++$i) {
        $out .= ".";
    }
    return $out;
}

function t($n) {
    $out = "";
    for ($i = 0; $i < $n; ++$i) {
        $out .= "-";
    }
    return $out;
}

?>