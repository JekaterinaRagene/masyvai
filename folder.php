<?php
require 'functions.php';
head();
logout();

if (isset($_GET['folder'])) {    
    $keliasIkiFailo = $_GET['folder'];
}   
 
footer();
?>

   
