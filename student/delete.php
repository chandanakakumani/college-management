<?php 
/// In order to use this script freely
/// you must leave the following copyright
/// information in this file:
/// Copyright 2012 www.turningturnip.co.uk
/// All rights reserved.
session_start();
include('../auth.php');
include("connect.php");

$id = $_GET['id'];

mysql_query("DELETE FROM studentdetails WHERE id = '$id' ");
mysql_close();

echo "Entry deleted";
?>

<a href="index.php">Back to index</a>
<?php


include('../include/footer.php');


?>