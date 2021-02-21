<?
include 'cnx_mysqli.php';
//include 'cnx_pdo.php';



//Conx avec Mysqli
$sql = "SELECT customerNumber, customerName  FROM customers";
$result = $conn->query($sql); // méthode spécifique à mysqli

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["customerNumber"]. " - Name: " . $row["customerName"]. " " . "<br>";
  }
} else {
  echo "0 resultats dans la requête";
}
//$conn1->close();


/*
// PDO
$sql = "SELECT employeeNumber, lastName, email FROM employees";
$result = $conn->query($sql); // méthode spécifique à pdo

foreach ($result as $row) {
    print $row['employeeNumber'] . "\t";
    print $row['lastName'] . "\t";
    print $row['email'] . "\n";
}

*/

?>