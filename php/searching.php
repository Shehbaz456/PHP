<!-- <?php
echo "<b>π§π¦Search string to have a-z and A-Zπ­π‘<b><br/> ";
echo "<b>π­π‘By using regex and preg_matchπ§π¦<br/>";
$regex='/^[a-zA-Z ]*$/';
$nameString='Shahrukh Khan';
if(preg_match($regex,$nameString)){
	echo("Name string matching with"." regular expression");
}
else{
	echo("Only letters and white space"." allowed in name string");
}
?> -->

<!-- Q19 -->
<!-- <?php
echo "<b>π§π¦Search string to have Match pattern <b>(.*)<\/b> π­π‘<b><br/> ";
echo "<b>π­π‘By using regex and preg_match_allπ§π¦<br/>";
$regex="/<b>(.*)<\/b>/U";
$inputString="name: <b>John</b> Position: <b>Developer</b>";
preg_match_all($regex,$inputString,$output);
echo $output[0][0]."<br/>".$output[0][1]."\n";
?> -->

<!-- Q20 -->
<!-- <?php
echo "<b>π§π¦  Search string to have Match pattern [0-9]+  π­π‘<b><br/> ";
echo "<b>π­π‘ function preg_replace(replace string)<b> π­π‘<br/>";
echo "<b>π­π‘ By using regex and preg_replace π§π¦<br/>";
$regex="([0-9]+)";
$original="Completed graduation in 2004";
$replacewith="2002";
$original=preg_replace($regex,$replacewith,$original);
echo $original;
?> -->

<!-- Q21 -->
<!-- <?php
echo "The preg_split() function_ breaks a string_ into an array_ <br/>" ;
echo "using matches of a regular expression as separators.<br/>";
$ip="134.645.478.670";
$regex="/\./";
$output=preg_split($regex,$ip);
echo "$output[0] <br>";
echo "$output[1] <br>";
echo "$output[2] <br>";
echo "$output[3] <br>";
?> -->

<!-- Q21 -->
<?php 
echo "<b>π§π¦  Search string to Match pattern /\s/  π­π‘<b><br/> ";
echo "<b>π­π‘ function preg_replace(replace string)<b> π­π‘<br/>";
echo "<b>π­π‘ By using pattern and preg_replace π§π¦<br/>";
$pattern="/\s/";
$replacement="-";
$text="Earth revolves around\nthe\tSun";

echo preg_replace($pattern,$replacement,$text);
echo "<br>";
echo str_replace(" ","-",$text);
?>









