<?php
require 'functions.php';
head();
logout();
upload();

// katalogas is $_GET'O
if (isset($_GET['failas'])) {
    $katalogas = str_replace('../', '', $_GET['failas']);
} else {
    $katalogas = '.';
}
//echo $katalogas;
$resource = opendir($katalogas);

while(($pirmoFailoPavadinimas = readdir($resource)) !== false) {
    if ($pirmoFailoPavadinimas == '..' || $pirmoFailoPavadinimas == '.' || $pirmoFailoPavadinimas == '.git') {
        continue;
    }
    
    $failoLokalusKelias = $katalogas . '/' . $pirmoFailoPavadinimas;
    $failoInformacija = pathinfo($failoLokalusKelias);
    
    if (is_file($failoLokalusKelias)) {
        //echo " FAILAS";
    }
        //var_dump( is_dir($pirmoFailoPavadinimas) );
    if (is_dir($failoLokalusKelias)) {
        echo '<a href="?failas=' . $failoLokalusKelias . '" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-folder-close">' . $pirmoFailoPavadinimas . '</span> </a>' .  '<br>';
    } elseif (isset($failoInformacija['extension'])
        && 
        $failoInformacija['extension'] == 'php'
    ) {
        echo '<a href="perziura.php?failas=' . $failoLokalusKelias . '" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-file">' . $pirmoFailoPavadinimas . '</span> </a>' .  '<br>';        
            
    } elseif (isset($failoInformacija['extension'])
        && 
        $failoInformacija['extension'] == 'jpg'
    ) { 
        echo '<a href="paveikslas.php?paveikslas='  . $failoLokalusKelias. '" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-picture">' . $pirmoFailoPavadinimas . '</span>' . '</a>' . '<br>';
    }  else {
        echo '<a href="' . $failoLokalusKelias . '" class="btn btn-info btn-lg" download>
          <span class="glyphicon glyphicon-file">' . $pirmoFailoPavadinimas . '</span>' . '</a>' . '<br>';    
    }     
    
    echo " MODIFIKUOTAS " . date("Y-m-d H:i:s", filemtime($pirmoFailoPavadinimas));
    echo "<hr>";
    //$pirmoFailoPavadinimas = readdir($resource);    
}
closedir($resource);
footer();
?>