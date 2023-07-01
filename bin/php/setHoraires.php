<?php


include "dbConnect.php";

$lHour1 = $_REQUEST['lHour1'];
$lHour2 = $_REQUEST['lHour2'];
$lHour3 = $_REQUEST['lHour3'];
$lHour4 = $_REQUEST['lHour4'];

$maHour1 = $_REQUEST['maHour1'];
$maHour2 = $_REQUEST['maHour2'];
$maHour3 = $_REQUEST['maHour3'];
$maHour4 = $_REQUEST['maHour4'];

$meHour1 = $_REQUEST['meHour1'];
$meHour2 = $_REQUEST['meHour2'];
$meHour3 = $_REQUEST['meHour3'];
$meHour4 = $_REQUEST['meHour4'];

$jHour1 = $_REQUEST['jHour1'];
$jHour2 = $_REQUEST['jHour2'];
$jHour3 = $_REQUEST['jHour3'];
$jHour4 = $_REQUEST['jHour4'];

$vHour1 = $_REQUEST['vHour1'];
$vHour2 = $_REQUEST['vHour2'];
$vHour3 = $_REQUEST['vHour3'];
$vHour4 = $_REQUEST['vHour4'];

$sHour1 = $_REQUEST['sHour1'];
$sHour2 = $_REQUEST['sHour2'];
$sHour3 = $_REQUEST['sHour3'];
$sHour4 = $_REQUEST['sHour4'];

$dHour1 = $_REQUEST['dHour1'];
$dHour2 = $_REQUEST['dHour2'];
$dHour3 = $_REQUEST['dHour3'];
$dHour4 = $_REQUEST['dHour4'];


$sqlQuery = "UPDATE `horaires` SET `horaire` = CASE `nom`
    WHEN 'lHour1' THEN '$lHour1'
    WHEN 'lHour2' THEN '$lHour2'
    WHEN 'lHour3' THEN '$lHour3'
    WHEN 'lHour4' THEN '$lHour4'
    WHEN 'maHour1' THEN '$maHour1'
    WHEN 'maHour2' THEN '$maHour2'
    WHEN 'maHour3' THEN '$maHour3'
    WHEN 'maHour4' THEN '$maHour4'
    WHEN 'meHour1' THEN '$meHour1'
    WHEN 'meHour2' THEN '$meHour2'
    WHEN 'meHour3' THEN '$meHour3'
    WHEN 'meHour4' THEN '$meHour4'
    WHEN 'jHour1' THEN '$jHour1'
    WHEN 'jHour2' THEN '$jHour2'
    WHEN 'jHour3' THEN '$jHour3'
    WHEN 'jHour4' THEN '$jHour4'
    WHEN 'vHour1' THEN '$vHour1'
    WHEN 'vHour2' THEN '$vHour2'
    WHEN 'vHour3' THEN '$vHour3'
    WHEN 'vHour4' THEN '$vHour4'
    WHEN 'sHour1' THEN '$sHour1'
    WHEN 'sHour2' THEN '$sHour2'
    WHEN 'sHour3' THEN '$sHour3'
    WHEN 'sHour4' THEN '$sHour4'
    WHEN 'dHour1' THEN '$dHour1'
    WHEN 'dHour2' THEN '$dHour2'
    WHEN 'dHour3' THEN '$dHour3'
    WHEN 'dHour4' THEN '$dHour4'
    END";





if (mysqli_query($conn, $sqlQuery)) {
    echo "<h3>data updated in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

} else {
    echo "ERROR: Hush! Sorry $sqlQuery. "
        . mysqli_error($conn);
}
header("Location:../horaire.php");



$conn->close();

?>