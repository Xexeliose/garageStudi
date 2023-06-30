<?php 

include "dbConnect.php";

$query = $conn->query("SELECT years FROM cars WHERE years = (SELECT MAX(years) FROM cars)");
$result = $query->fetch_row();
printf($result[0]);
?>