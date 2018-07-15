<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
</html> 

<?php

$katalogas = '.';
$resource = opendir($katalogas);
$pirmoFailoPavadinimas = readdir($resource);

while (($failas = readdir($resource)) !== false) {
     echo $failas. '<br>';
    
    $failoInformacija = pathinfo($failas);
    
    if (is_file($failas)) {
        echo '<a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-file"></span> File 
        </a>' . '<br>';
    }
    if (is_dir($failas)) {
        echo '<a href="" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-folder-close"></span> Folder
        </a>' .  '<br>';
    }
    
        if (isset($failoInformacija['extension'])
        && 
        $failoInformacija['extension'] == 'php'
    ) {
        echo '<a href="index_vidurkis.php?failas="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-folder-close"></span> Folder' . $failas . '">' . $pirmoFailoPavadinimas . '</a>';
    } elseif (isset($failoInformacija['extension'])
        && 
        $failoInformacija['extension'] == 'jpg'
    ) { 
        echo '<a href="' . $failas . '">' . $pirmoFailoPavadinimas . '</a>';
    } else {
        echo $pirmoFailoPavadinimas;
    
    }
//    
//        echo '<a href="index.php?failas=' . $failass . '">' . $pirmoFailoPavadinimas . '</a>';
//    } elseif (isset($failoInformacija['extension'])
//        && 
//        $failoInformacija['extension'] == 'jpg'
//    ) { 
//        echo '<a href="' . $faila . '">' . $pirmoFailoPavadinimas . '</a>';
//    } else {
//        echo $pirmoFailoPavadinimas;
//    }
    
    echo " MODIFIKUOTAS " . date("Y-m-d H:i:s", filemtime($failas));
        
    echo "<hr>";
    
    $pirmoFailoPavadinimas = readdir($resource);
}


closedir($resource);
?>

