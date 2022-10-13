<?php
function colle($x, $y) {
    $tab = 0;
    while($tab < $y){
    for($vertical = 0; $vertical < $x; $vertical++) {
    echo "+---";
    }
    if($vertical = $x) {
    echo "+\n";
    }
    for($ligne2 = 0; $ligne2 < $x; $ligne2++) {
    echo "|   ";
    }
    if($ligne2 = $x) {
    echo "\n";
    }
    $tab++;
    }
    for($vertical = 0; $vertical < $x; $vertical++) {
    echo "+---";
    }
    }
    colle(5,2);
    

  