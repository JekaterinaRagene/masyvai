<?php
if (isset($_GET['skaiciai'])){
        $skaiciai = $_GET['skaiciai'];
        $skaicius = explode(',' , $skaiciai);
        //print_r($skaicius) ;
        $result = 0;
        $suma = array_sum($skaicius);                      
        foreach ($skaicius as $value => $value) {
            $result = $suma + $value;
        }   
        $vidurkis = $result / count($skaicius);
        echo 'Vidutinė temperatūra:'. round($vidurkis, 2).' laipsniai';
}

        $sk = asort($skaicius);
         print_r($sk);
        echo 'Viso nuoskaitų:'. count($skaicius);
        echo 'Dvi didžiausios temperatūros:';
        echo 'Dvi mažiausios temperaturos';


?>
