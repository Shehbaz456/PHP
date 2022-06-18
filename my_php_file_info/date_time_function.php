<!-- <?php
$date_array = getdate();
foreach($date_array as $key=>$val){
    print("$key = $val <br/>");

}
//$fomated_date = "today's date : ";
//$fomated_date.= $date_array[Mday]."/";
//$fomated_date.= $date_array[mon]."/";
//$fomated_date.= $date_array[year]."/";

print $fomated_date;
?> -->

<!-- 
<?php
    if(!file_exists("D:\hello.txt")){
        die("File not found ");
    }
    else{
        $file = fopen("D:\hello.txt","r");
        print "Open fill successfully";
    }
?> -->


<?php
    print date("m/d/y G.i:S<br>" , time());
    print "tihs is ";
    print date("j of F y , \a\\t gi a",time());
?>



