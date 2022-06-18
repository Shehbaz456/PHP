<!-- Q10 -->
<!-- <?php
echo "<b>🚀Array in php🚀<b><br/>";
$number=array(1,2,"Shehbaz",4,5);
foreach($number as $value)
{ echo "value is $value<br/>"; }
?> -->

<!-- Q11 -->
<!-- <?php
echo "<b>🚀Array in php🚀<b><br/>";
$salaries=array("Mohammad"=>2000,"Qadir"=>1000,"Zara"=>500);
echo "Salary of Mohammad ".$salaries['Mohammad']."<br/>";
echo "Salary of Qadir ".$salaries['Qadir']."<br/>";
echo "Salary of Zara ".$salaries['Zara']."<br/>";
?> -->

<!-- Q12 -->
<!-- <?php
echo "<b>🚀Multi--Array in php🚀<b><br/>";
$marks=array("Mohammad"=>array("Physics"=>35,"Maths"=>30,"Chemistry"=>39),"Qadir"=>array("Physics"=>30,"Maths"=>32,"Chemistry"=>27),"Zara"=>array("Physics"=>31,"Maths"=>22,"Chemistry"=>39));
echo "Marks for Mohammad in Physics:";
echo $marks['Mohammad']['Physics']."<br/>";
echo "Marks for Qadir in Maths:";
echo $marks['Qadir']['Maths']."<br/>";
echo "Marks for Zara in Chemistry:";
echo $marks['Zara']['Chemistry']."<br/>";

?> -->


<!-- Q23 🧐🧐🧐-->
<!-- <?php
$pattern="/^J/";
$names=array("John Abraham","Shehbaz","John Puneet");
$matches=preg_grep($pattern,$names);
foreach($matches as $match){
	echo $match."<br>";
}
?> -->

<!-- Q24 -->
<!-- <?php
$season=array("summer","winter","spring","autumn");
echo "Season are: $season[0],$season[1],$season[2] and $season[3]";
?> -->

<!-- Q25🧐🧐🧐 -->
<!-- <?php
$salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");
print_r(array_change_key_case($salary,CASE_UPPER));
?> -->

<!-- Q26🧐🧐🧐 -->
<!-- <?php
$salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");
print_r(array_chunk($salary,2));
?> -->




<!-- Q27 -->
<!-- <?php
echo "<b>🧊 Count function use for count Array elements  🧊<b><br/>";
echo "print number of elenents<br/>";
echo "number of Array elements is = ";
$season=array("summer","winter","spring","autumn");
echo count($season);
?> -->

<!-- Q28 -->
<!-- <?php
echo "<b>🧊 Sort array with respect to alphabet 🧊<b><br/>";
$season=array("summer","winter","spring","autumn");
sort($season);
foreach($season as $s)
{
	echo "$s<br/>";
}
?> -->


<!-- Q29 -->
<!-- <?php
echo "🧊 print Array in reverse order 🧊<br/>";
$season=array("summer","winter","spring","autumn");
$reverseseason=array_reverse($season);
foreach($reverseseason as $s)
{
	echo  "$s<br/> ";
}
?> -->


<!-- Q30 -->
<!-- <?php
echo "🧊 find array element have spring or not 🧊 <br/> ";
echo "🧊 if Array have string then print index number 🧊 <br/> ";
echo "Array index = ";
$season=array("summer","winter","spring","autumn");
$key=array_search("spring",$season);
echo $key;
?> -->

<!-- Q31 -->
<!-- <?php
echo "🎖️🎖️Array_intersect function use for check intersection 🎖️<br/>";
echo "🎖️🎖️of selected Array then print intersection element 🎖️<br/>";
$name1=array("The great INDIAN NAVY","john","vivek","The great INDIAN ARMY");
$name2=array("umesh","The great INDIAN NAVY","The great INDIAN ARMY");
$name3=array_intersect($name1,$name2);
foreach($name3 as $n)
{
	echo "$n<br/>";
}
?> -->


<!-- /////////////////////////////// -->
<!-- <?php
//  PHP program to demonstrate assignment of 
// particular index values in the Array to variables
$array = array(1,2,3,4);
// assign array values to variables
list(, ,$a) = $array;
// print all Assign values
echo " a = ".($a)."\n";
?> -->


<!-- ///////////////////////////// -->
<!-- <?php
//  PHP program to demonstrate the 
// use of list() function
$array = array(1,2,3,4);
// assign array values to variables
list($a,$b,$c) = $array;
// print all Assign values
echo " a = ".($a)."\n";
echo " b = ".($b)."\n";
echo " c = ".($c)."\n";


// perform  multiplication
echo "a*b*c  = " , ($a*$b*$c); 
?> -->

<!-- //////////////////////// -->
<!-- <?php
    function padding($array, $string){
        $result=array_pad($array,7,$string);
    return ($result);
}
$array = array("one","two","three","four","five");
$string= "six";
print_r(padding($array, $string));
?> -->

<!-- 
<!-- ////////////////////////// -->
<!-- <?php
        function padding($array, $string){
            $result=array_pad($array,-7,$string);
        return ($result);
    }
    $array = array("one","two","three","four","five");
    $string= "six";
    print_r(padding($array, $string));
?> --> -->

<!-- //////////////////// -->
<!-- <?php
    $a=array("red","green");
    print_r(array_pad($a,5,"blue"));
?> -->

<!-- ///////////////////// -->
<!-- <?php
    $array1=array("10"=> "raghav","20"=>"ram","30"=>"laxman","40"=>"aakash","50"=>"ravi");
    $array2=array("60"=>"ankita","70"=>"antara");
    echo "the returned array: \n";
    print_r(array_splice($array1,1,4,$array2));
    echo "\n the orignal array is modified to : \n";
    print_r($array1);
?> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function </title>
</head>
<body>
    <!-- <?php
    function print_hello()
    {
        echo "Hello world </br>";
        echo "Hello world </br>";
        echo "Hello world </br>";
        echo "Hello world </br>";
    }
    print_hello();
    print_hello();
    print_hello();
    print_hello();
    print_hello();
    ?> -->
</body>
</html>
 -->
