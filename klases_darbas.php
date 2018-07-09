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


//sort(elemntus didejimo tvarka)
//asort (nesunaikina asocitivius indeksus)
//ksort (rikiuoja masyvus pagal indeksus, pagal valstybiu pavadinimus)
//rsort (raide r daro atvirksiai, mazejimo tvarka)

sort($ceu);
foreach ($ceu as $valstybe => $sostine) {
echo 'The capital of' . $valstybe . 'is' . $sostine. '<br>';
}
$miestai = 'Vilnius Kaunas  Palanga';

//explode (pagamina masyva is turimos informacijos) reikes nd;
$array = explode (' ', $miestai);
//print_r daugia mums pasiziureti kas yra vidui
print_r($array);

//echo implod (';', $array); //atvirkstinis grazina duomenys (tarp miestu bus ne tarpas, o kabliataskis

 $skaic = '5.25.0.14.19.26';

$array = explode ('.' , $skaic);

foreach ($array as $value) {
    echo $suma = $suma + $value;
}
$vidurkis = $suma / count ($array);
echo round($vidurkis, 2);


?>




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

