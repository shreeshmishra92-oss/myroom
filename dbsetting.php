<?php
$ihost="localhost";
$iuser="elvishhe_noida";
$ipass="mishra11";
$idb="elvishhe_noida";
$conx = mysqli_connect($ihost, $iuser, $ipass, $idb);

// Check connection
if (!$conx) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check connection
if ($conx -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conx -> connect_error;
  exit();
}
?>