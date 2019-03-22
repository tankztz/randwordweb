<head>
<style>
table {
  border: 1px solid black;
  border-collapse: collapse;
  font-size: 80px;
  height: 90%;
  width: 90%;
  table-layout: fixed ;
}

th, td {
  border: 3px solid black;
  border-collapse: collapse;
  font-size: 80px;
  width: 22.5%;
  padding: 15px;
  table-layout: fixed;
}
</style>
</head>

<?php 
echo $title."<br>"; 

$counter = 0;
$row_num = 5;


echo "<table style=\"width:100%\">";
while ($counter < 25){
	foreach ($words as $this_word)
	{
		$counter++;
		if ($counter%5 == 1) echo "<tr>";
		echo "<td>".$this_word['word']."</td>";
		if ($counter%5 == 0) echo "</tr>";
		if ($counter == 25) break;
	}
}
echo "</table>";

