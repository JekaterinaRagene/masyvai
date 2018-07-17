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
 
// $slaptazodis = 'slaptazodis';
// $hash = password_hash($slaptazodis, PASSWORD_DEFAULT);
 $hash = '$2y$10$Upv7t.GxPMfiERxkRTuA4egMj99sxBiu6LyWEfHSQbr2ogsPmY0Zm';
 $password = 'slaptazodis';
 if(isset($_POST['password'])) {
     
     if (password_verify($_POST['password'], $hash)) {
        login();
     }else {
         echo ' slaptazodis neteisingas';
     }
 }
 if (arPrisijunges() == true) {
     echo "Prisijunges";
 } else {
     echo "Neprisijunges";
 }