
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


while(($pirmoFailoPavadinimas = readdir($resource)) !== false) {
    $failoLokalusKelias = $katalogas . '/' . $pirmoFailoPavadinimas;
    if (isset($_GET['failoLokalusKelias'])) {
    $pirmoFailoPavadinimas = str_replace('../', './', $_GET['pirmoFailoPavadinimas']);
    return basePath('../failai/') . $pirmoFailoPavadinimas;
    }
    if (is_file($failoLokalusKelias)) {
        echo " FAILAS";
    }
        //var_dump( is_dir($pirmoFailoPavadinimas) );
    if (is_dir($failoLokalusKelias)) {
        echo " KATALOGAS";
    }
      
    if (isset($failoInformacija['extension'])
        && 
        $failoInformacija['extension'] == 'php'
    ) {
        echo '<a href="metai.php?failas=' . $failoLokalusKelias . '">' . $pirmoFailoPavadinimas . '</a>';        
            
    } elseif (isset($failoInformacija['extension'])
        && 
        $failoInformacija['extension'] == 'jpg'
    ) { 
        echo '<a href="' . $failoLokalusKelias. ' class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-picture">' . $pirmoFailoPavadinimas . '</span>' . '</a>' . '<br>';
    } elseif (isset($failoInformacija['extension']) 
            &&
            $failoInformacija['extension'] == 'html'
    ) {
        echo '<a href="' . $failoLokalusKelias. ' class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-html">' . $pirmoFailoPavadinimas . '</span>' . '</a>' . '<br>';    
    }
            {
        echo '<a href=" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-folder-close">' . $pirmoFailoPavadinimas . '</span> </a>' .  '<br>';
    
    }
    
    
    echo " MODIFIKUOTAS " . date("Y-m-d H:i:s", filemtime($pirmoFailoPavadinimas));
        
    echo "<hr>";
    
    $pirmoFailoPavadinimas = readdir($resource);
    
}
closedir($resource);
?>