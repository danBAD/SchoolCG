<?php
$servername = '127.0.0.1';
$username = 'dan';
$password = 'dan';
$db = 'classicmodels';
$port = 3306;
try {



   $conn = new PDO("mysql:host=$servername;dbname=$db;port=$port", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connxion réussie avec PDO";
   }
catch(PDOException $e)
   {
   echo "La connection a échoué avec PDO: " . $e->getMessage()."\n";
   }
?>