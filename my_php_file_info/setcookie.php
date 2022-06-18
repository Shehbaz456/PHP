<?php 
     setcookie("name","John",time()+3600,"/","",0);
     setcookie("age","36",time()+3600,"/","",0);
?>
<html><head>
    <title>
        Setting cookies with PHP
    </title>
</head>
<body>
    <?php
    echo"Set cookies";
    ?>
</body>
</html>

