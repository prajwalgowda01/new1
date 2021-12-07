<?php
	
// Given string
$str = "welcome to the LIVE coverage of Day 4 of the ongoing Test between India and New Zealand at the Wankhede Stadium";

// Word to be replaced
$w1 = "the";

// Replaced by
$w2 = "the new";


	
// Using str_ireplace() function
// replace the word
// echo substr_replace("welcome to the LIVE coverage of Day 4 of the ongoing Test between India and New Zealand at the Wankhede Stadium","the new",41,87);
$str = str_replace($w1, $w2, $str);

// Printing the result
echo $str;

?>



