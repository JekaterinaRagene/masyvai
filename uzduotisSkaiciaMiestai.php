  <?php //
//    $color = ['white','green','red','blue','black'];
//
//    asort($color);
//    foreach ($color as $spalvos => $color){
//        echo $color .'<br>';
//    }
//    
    ?>
<?php
$ceu = ["Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
"Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
"Greece" => "Athens",
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
"Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia",
"Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" =>
"Vienna",
"Poland"=>"Warsaw"];

//asort($ceu);
//foreach ($ceu as $valstybe => $sostine) {
//echo 'The capital of' . ' ' . $valstybe .' '. 'is' . ' '. $sostine. '<br>';
//};

ksort($ceu);
foreach ($ceu as $valstybe => $sostine) {
    echo 'The capital of' . ' '. $valstybe. ' '. 'is'.' '. $sostine. '<br>';
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

