<!-- <?php
// $age = array(44,66,45,34);
// echo $age[0];
// echo $age[1];
// echo $age[2];


// // Associative Array
// $age = array(
//     "shehbaz" =>19,
//     "sheba" =>18,
//     "khushi" =>19,
// );
// echo $age['khushi'];
// foreach ($age as $key => $value) {
//     echo " $key = ,  value = $value";
//     echo "<br/>";
// }
?> -->
<?php
$multi_Dim = array(
            array(3,4,0,4),
            array(9,3,7,6),
            array(3,4,6,0) );

// echo var_dump($multi_Dim);
// echo $multi_Dim[1][3];

// for ($i=0; $i <count($multi_Dim) ; $i++) { 
//     echo var_dump($multi_Dim[$i]);
//     echo "<br>";
// }

for ($i=0; $i <count($multi_Dim) ; $i++) { 
    for ($j=0; $j <count($multi_Dim) ; $j++) { 
        echo $multi_Dim[$i][$j];
        echo "  ";
    }
    echo "<br>";
} 
?>

