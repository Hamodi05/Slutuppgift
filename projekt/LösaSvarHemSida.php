<?php
$db = new SQLite3('SkapaSvarHemSida.sq3'); #vilken databas öppnar vi? 
$allInputQuery = "SELECT * FROM fråga"; #vilket kommando vill vi köra? 
$fråganList = $db->query($allInputQuery); #en ny array som innehåller all information
$i=0;
while ($row = $fråganList->fetchArray(SQLITE3_ASSOC))#SQLITE3_ASSOC är en funktion i SQLite3 som hämtar info från 
{ 
 echo $row['Frågan'] .'<br/>';
 $tempVar[$i]= $row['Frågan'];
 $i++;
} 
?>

<html>
<body>
<form action="CheckaHemsida.php" method="POST">

  <label for="answer">Answer:</label><br>
  <input type="text" id="Answer" name="answer" value "<?php $answer = 'answer'; echo $answer; ?>"> <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>











