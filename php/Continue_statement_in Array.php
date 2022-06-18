<!-- Q13 -->
<?php
print("<b>🚁Continue Statement.🚁<b><br/>");
$array=array(1,2,3,"hello",4,true);
foreach($array as $value)
{
	if($value==3)
	continue;
	echo "Value is $value <br/>";
}
?>