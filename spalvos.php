<?php
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of"
. "film forever frozen at that moment: the " . $color [2] . "carpet,"
. "the" . $color[1] . "lawn, the" . $color[0] . " house, the leaden sky. ";

echo count($color);

for ($i = 0; $i< Count ($color); $i++) {
    echo $color[$i] . '<br>';
}

foreach ($color as $indeksas => $reiksme) {
    echo $indeksas . ' ' . $reiksme . '<br>';
}




?>


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

