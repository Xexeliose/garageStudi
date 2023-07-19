<?php
session_start();

//Clear, destroy session then go back to home page
session_unset();

session_destroy();

header("Location:../services.php");

exit();

?>