<!-- <?php
// echo "Function in php ";

// function process_marks($marksArr)
// {
//     $i = 0;
//     $sum = 0;
//     foreach($marksArr as $value){
//         $sum+=$value;
//         $i++;
//     }
//     return $sum/$i;
// }
// $rohan = [30,50,43,53,88,98];

?> -->

<?php
echo "Function in php ";

function process_marks($marksArr)
{
    $sum = 0;
    global $sum;
    foreach($marksArr as $value){
        $sum+=$value;
    }
    return $sum;
}
function process_marks1($marksArr)
{
    $i = 0;
    $sum = 0;
    foreach($marksArr as $value){
        $sum+=$value;
        $i++;
    }
    return $sum/$i;
}
$rohan = [30,50,43,53,88,98];
$Sum_marks = process_marks($rohan);
$Avg = process_marks1($rohan);

echo "Average of marks scored by rohan  is $Avg  ";
echo "total marks scored by rohan out of 600 is $Sum_marks ";
?> 