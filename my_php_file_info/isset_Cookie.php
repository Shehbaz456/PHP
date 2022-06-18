
<html>
<head>
    <title>Cookie isset</title>
</head>
<body>
    <?php
    if(isset($_COOKIE["name"])){
        echo "Welcome ".$_COOKIE["name"]."<br>";
    }else
    {
        echo "Sorry --- not Recognized"."<br/>";
    }
    ?>
</body>
</html>