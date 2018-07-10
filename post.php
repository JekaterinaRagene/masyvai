<?php
if (isset($_GET['skaiciai'])){
        $skaiciai = $_GET['skaiciai'];
        $skaicius = explode(',' , $skaiciai);
        //print_r($skaicius) ;
        $result = 0;
        $suma = array_sum($skaicius);    
 
        $vidurkis = $suma / count($skaicius);
        echo 'Vidutinė temperatūra:'. round($vidurkis, 2).' laipsniai';
}
        echo 'Viso nuoskaitų:'. count($skaicius);
        echo 'Dvi didžiausios temperatūros:';
        echo 'Dvi mažiausios temperaturos';

        $sk = array($skaicius);
        arsort($sk) ;
        print_r($sk);
?>
