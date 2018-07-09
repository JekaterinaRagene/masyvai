<?php
$menesiuVardai = [1=>'Sausis',
                        2=>'Vasaris', 3=>'Kovas',
                        4=>'Balandis', 5=>'Gegužė',                        
                        6=>'Birželis', 7=>'Liepa',                        
                        8=>'Rugpjutis', 9=>'Rugsėjis',                       
                        10=>'Spalis', 11=>'Lapkritis',                       
                        12=>'Gruodis'];

$menesiuDienos = array (1=>31, 2=>28, 3=>31,
4=>30, 5=>31, 6=>30, 7=>31, 8=>31,
9=>30,10=>31, 11=>30, 12=>31);

$counter = 0;
$pirmas = [];
$suma = 0;

foreach ($menesiuDienos as $menesioIndeksas => $dienuSkaicius) {
            if ($dienuSkaicius == 31) {
                $pirmas[] =$menesiuVardai[$menesioIndeksas];
                $pirmasString = implode(',',$pirmas);
                $counter++;
}}
                echo '<p>Metuose yra <span>'.$counter.'</span>menesiai turintys <span>31</span>diena(<span>'.$pirmasString.'</span>)</p>';
                ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        span {
            color: red;
        }
    </style>
</head>
<body>

</body>
</html>
     


