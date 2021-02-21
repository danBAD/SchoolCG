<?php
  $db_host = '127.0.0.1';
  $db_user = 'dan';
  $db_password = 'dan';
  $db_db = 'classicmodels';
  $db_port = 3306;

 

// Create connection
$conn = mysqli_connect($db_host, $db_user, $db_password,$db_db, $db_port);
// Check connection
if (!$conn) {
    die("Echec de connexion avec Mysqli\n: " . mysqli_connect_error());
}
echo "Connexion réussie avec Mysqli\n";
?>