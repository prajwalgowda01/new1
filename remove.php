<?php

$array = array ("June", "July", "August", "November", "April");
$Value="August";
//array_splice($array, $Value);
$Newarray= array_diff($array, array($Value));
//array_shift($Newarray);
Print_r($Newarray);

?>
