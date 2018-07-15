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

while ($pirmoFailoPavadinimas !== false) {
    $failoLokalusKelias = $katalogas . '/' . $pirmoFailoPavadinimas;
    //echo $pirmoFailoPavadinimas;
    //echo $failoLokalusKelias . '<br>';
    //var_dump(is_file($failoLokalusKelias));
    
    $failoInformacija = pathinfo($failoLokalusKelias);
    
    if (is_file($failoLokalusKelias)) {
//        echo '<a href="" class="btn btn-info btn-lg">
//          <span class="glyphicon glyphicon-file"></span></a>' .  '<br>';
                       
    }
    
    //var_dump( is_dir($pirmoFailoPavadinimas) );
    if (is_dir($failoLokalusKelias)) {
        //echo '<a href="' . $pirmoFailoPavadinimas . '" class="btn btn-info btn-lg">
          //<span class="glyphicon glyphicon-folder-close"></span> </a>' .  '<br>';
    }
    
    if (isset($failoInformacija['extension'])
        && 
        $failoInformacija['extension'] == 'php'
    ) {
        echo '<a href="index_1.php?failas=' . $failoLokalusKelias . '" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-file">' . $pirmoFailoPavadinimas . '</span></a>' .  '<br>';
        
    } elseif (isset($failoInformacija['extension'])
        && 
        $failoInformacija['extension'] == 'php'
    ) {
        echo '<a href="index_vidurkis.php?failas=' . $failoLokalusKelias . '" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-file">' . $pirmoFailoPavadinimas . '</span></a>' .  '<br>';
            
    } elseif (isset($failoInformacija['extension'])
        && 
        $failoInformacija['extension'] == 'jpg'
    ) { 
        echo '<a href="nuotrauka.jpg"failas=' . $failoLokalusKelias . ' class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-picture">' . $pirmoFailoPavadinimas . '</span>' . '</a>' . '<br>';
    } else {
        echo '<a href="css"failas=' . $failoLokalusKelias . '" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-folder-close">' . $pirmoFailoPavadinimas . '</span> </a>' .  '<br>';
    
    }
    
    
    echo " MODIFIKUOTAS " . date("Y-m-d H:i:s", filemtime($pirmoFailoPavadinimas));
        
    echo "<hr>";
    
    $pirmoFailoPavadinimas = readdir($resource);
    
}

closedir($resource);
?>
