<?php 
  
// preuzmanje lager liste
$url = 'https://www.genelec.ba/import_33827.xls'; 
  
// Use basename() function to return the base name of file  
$file_name = basename($url); 

// Preuzmi sadržaj fajla s provjerom
$data = @file_get_contents($url);

if ($data !== false && file_put_contents($file_name, $data)) { 
    echo "Datoteka uspjesno preuzeta"; 
} else { 
    echo "Greska pri preuzimanju datoteke."; 
} 
  
?>
