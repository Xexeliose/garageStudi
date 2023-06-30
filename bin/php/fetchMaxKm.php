<?php 

include "dbConnect.php";

$query = $conn->query("SELECT km FROM cars WHERE km = (SELECT MAX(km) FROM cars)");
$result = $query->fetch_row();
printf($result[0]);
?>