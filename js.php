<?php
require 'functions.php';
head();
grizti();
logout();

if (isset($_GET['js'])) {    
    $keliasIkiFailo = $_GET['js'];
   } 

footer()
?>
