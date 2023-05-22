<?php
$tempName = $_POST["frågan"];
$tempScore = $_POST["svaren"];
$db = new SQLite3('SkapaSvarHemSida.sq3');
$db->exec("CREATE TABLE IF NOT EXISTS fråga (Frågan text, Svaren int)");
$db->exec("INSERT INTO fråga VALUES('".$tempName."',".$tempScore.")");
echo $_POST["secret"];
header("location: HTMLPRO01.php");
?>
