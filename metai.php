<?php
session_start(); 
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
        $pirmas[] = $menesiuVardai[$menesioIndeksas];
        $pirmasString = implode(',',$pirmas);
        $counter++;
    }
}
echo '<p>Metuose yra <span>' . $counter . '</span> menesiai turintys <span> 31 </span> diena(<span>' . $pirmasString . '</span>)</p>';
 '<br>';              
$counter = 0;
$antras = [];
foreach ($menesiuDienos as $menesioIndeksas => $dienuSkaicius) {
    if ($dienuSkaicius == 30) {
        $antras[] = $menesiuVardai[$menesioIndeksas];
        $antrasString = implode(',', $antras);
        $counter++;
    }
}
echo '<p>Metuose yra <span>' . $counter . '</span> mėnesiai turintys <span> 30 </span> dienu(<span>' . $antrasString . '</span>)</p>';
'<br>';

$counter = 0;
$pirmas = [];
foreach ($menesiuDienos as $menesioIndeksas => $dienuSkaicius) {
    if ($dienuSkaicius == 28) {
        $pirmas[] = $menesiuVardai[$menesioIndeksas];
        $antrasString = implode(',', $pirmas);
        $counter++;
    }
} 
echo '<p>Metuose yra <span>' . $counter . '</span> mėnuo turintis <span> 28 </span> dienas (<span>' . $pirmasString . '</span>)</p>';
'<br>';

$suma = 0;
foreach ($menesiuDienos as $menesioIndeksas => $dienuSkaicius) {
    $suma += $dienuSkaicius;
}
echo '<p>Viso metuose yra <span>' . $suma . '</span> dienos. </p>';

foreach ($menesiuDienos as $menesioIndeksas => $dienuSkaicius) {
    echo $menesiuVardai[$menesioIndeksas] . $menesioIndeksas . '' . $dienuSkaicius . '<br>';
}

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
     


