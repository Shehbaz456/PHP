<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $x = 15;
    $y = 35;
    $z =$x + $y;
    echo "Sum: ".$z;
    ?>























    <!-- <?php
    echo "Hello php";
    echo "hell pp";
    $a = 43;
    echo "hi".$a;
    ?> -->

    <!-- <?php
    $seasons = array("summer", "winter", "spring", "autumn");
    echo "Seasons are : $seasons[0], $seasons[1], $seasons[2] and $seasons[3]";
    ?> -->

    <!-- <?php
    $salary = array("Sonoo" =>"111000","vimal"=>"201100","Jhon"=>"200000");
    print_r(array_Change_key_Case($salary,CASE_UPPER));

    ?> -->

    <!-- <?php
    $salary = array("Sonoo" =>"111000","vimal"=>"201100","Jhon"=>"200000");
    print_r(array_chunk($salary,2));
    ?> -->

    <!-- <?php
    $seasons = array("summer", "winter", "spring", "autumn");
    echo count($seasons);
    ?> -->

    <!-- <?php
    $seasons = array("summer", "winter", "spring", "autumn");
    sort($seasons);
    foreach ($seasons as  $value) {
        echo "print Array = ".$value."<br>";
        
    }
    ?> -->



    <!-- <?php
    $seasons = array("summer", "winter", "spring", "autumn");
    $revers = array_reverse($seasons);
    foreach ($revers as  $value) {
        echo "print Array = ".$value."<br>";   
    }
    ?> -->

    <!-- <?php
    $seasons = array("summer", "winter", "spring", "autumn");
    $key =array_search("spring",$seasons);
    echo $key;
    ?> -->

     <!-- <?php
     $name1 = array("A","m","A","n");
     $name2 = array("j","h","o","n");
     $name3 = array_intersect($name1,$name2);
     foreach($name3 as $value){
         echo "$value";
     }
     ?> -->

     <!-- <?php
     $arr = array("C","phyton",343,"c+");
     $a =$arr[0];
     $b =$arr[1];
     $c =$arr[2];
     $d =$arr[3];

     echo $a."<br>";
     echo $b."<br>";
     echo $c."<br>";
     echo $d."<br>";

     ?> -->

    
</body>
</html>


