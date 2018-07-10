<?php
if (isset($_GET['skaiciai'])){
    $skaiciai = $_GET['skaiciai'];
    $skaicius = explode(',' , $skaiciai);
    //print_r($skaicius) ;
    $suma = 0;
    $suma = array_sum($skaicius);
    
    $vidurkis = $suma / count($skaicius);
    echo 'Vidutinė reiksme:'. round($vidurkis, 2).'<br>';
}


?>
