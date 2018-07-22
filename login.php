<?php
session_start();
 function login()
 {
     $_SESSION['prisijunges'] = true;
 }
 
 function arPrisijunges()
 {
     return isset($_SESSION['prisijunges']);
 }
 
// $slaptazodis = 'raktazodis';
// $hash = password_hash($slaptazodis, PASSWORD_DEFAULT);
// echo $hash;
 $hash = '$2y$10$PQbtI8oPUFDCVotA/3Ge7ewidPU1GQQyPWFh.ITVzro96hcd9x3MW';
 
 if(isset($_POST['password'])) {
     
     if (password_verify($_POST['password'], $hash)) {
        login();
     }else {
         echo ' slaptazodis neteisingas';
     }
 }
 if (arPrisijunges() === true) {
     echo "Prisijunges";
     require 'index_veikia.php';
 } else {
     echo "Neprisijunges";
 }
 
 
 ?>

