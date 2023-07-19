<?php 

include "dbConnect.php";

$query = $conn->query("SELECT price FROM cars WHERE price = (SELECT MIN(price) FROM cars)");
$result = $query->fetch_row();
printf($result[0]);
$conn->close();

?>