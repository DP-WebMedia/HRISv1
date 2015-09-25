<?php

//Module One goes here ----------------------------------

function module1() {
    echo "waiting for union";
}

function module2() {
    echo "made after some time";
}

//Module Two goes here ----------------------------------

function module2() {
    echo "module made after sync";
}
    
?>
