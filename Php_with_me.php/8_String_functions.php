<?php
$name = " Shehbaz hello php ";
echo "<br>";
echo $name;  
echo "length of my string is ".strlen($name);
echo "<br>";
echo str_word_count($name); //count word in string
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "php"); //start with 0 and count chehecter by cherecter
echo "<br>";
echo str_replace("Shehbaz","Akib",$name);
echo "<br>";
echo str_repeat($name,5);
echo "<br>";
echo "<pre>";
echo rtrim("    this is a good boy  "); // remove spaces with right string
echo "<br>";
echo ltrim("    this is a good boy  "); // remove spaces with left string
echo "</pre>";
echo strtoupper($name);
echo "<br>";
echo strtolower($name);
