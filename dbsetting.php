<?php
$ihost = "localhost";
$iuser = "elvishhe_myroom";
$ipass = "Mishra11#";
$idb   = "elvishhe_myroom";

// Establish connection using procedural mysqli
$conx = mysqli_connect($ihost, $iuser, $ipass, $idb);

// Clean, single connection check
if (!$conx) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
