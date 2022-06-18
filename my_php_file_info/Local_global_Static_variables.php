<!-- <?php
//    // no changes becouse it is local variable;
// echo "local variable <br/>";
// $x = 5;
// function hello(){
//     $x =0;
//     echo $x."<br/>";
// }
// hello();
// echo $x
?> -->


<!-- <?php
//  // change becouse it is global variable;
// echo "Global variable <br/>";
// $x = 5;
// function hello1(){
//    global $x;
//      echo $x++."<br>";
// }
// hello1();
// echo $x;
?> -->




<?php
echo "when a function is completed/executed, all of its variables are deleted. However, <br/>" ;
echo "sometimes we want a local variable NOT to be deleted. We need it for a further job. <br/>";
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 








