<?php

/* objektas gali tureti 3 rušiu vidinius kintamuosius
    Public
    Protected
    Private */

//skaiciavimai neleidziami prie $nnn public, protected, private


//static yra savybe, kuri nepatenka i objekta, o pasilieka klaseje.

// Bet galima pasiekti per pvz: 
echo Stikline::$gerimas;

// .self reiskia ta pati klase
function kas() {
    echo '<br>---is klases tiesiai--->'.self::$gerimas;
}


/*php AUTOLOADER*////////     PVZ    ////////////
spl_autoload_register(function ($class) {
    require __DIR__. '/'.$class.'.php';
});
/*php AUTOLOADER*////////     PVZ    ////////////


ob_start() // surinkimas viska kas echo'inama, irasymas i buferi(i kibira)

$html = ob_get_contents(); //viska kas surinkta parodo.

ob_end_clean(); // isvalo pries  paduodant i narsykle



    