<?php
$flag = 0;
echo "Program check num is prime or not :";
$num = (float)readline("Enter number  ");
for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $flag = 1;
    }
}
if ($flag == 1) {
    print("not a prime number  $num ");
} else {
    print("$num Is prime number ");
}
?>
