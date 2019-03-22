<?php 
echo $title."<br>"; 

$counter = 0;

foreach ($words as $this_word)
{
	$counter++;
	echo $this_word['word']." ";
	if ($counter%5 == 0) echo "<br>";
}

