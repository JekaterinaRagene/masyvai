<?php
require 'functions.php';
head();
grizti();
logout();

if (isset($_GET['failas'])) {  
    $keliasIkiFailo = $_GET['failas'];
    highlight_file($keliasIkiFailo);
}
footer();
?>

