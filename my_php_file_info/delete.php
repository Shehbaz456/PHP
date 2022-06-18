<?php
    setcookie("name","jhon",time()-3600,"/","",0);
    setcookie("Age","34",time()-3600,"/","",0);
?>
<html>
<head>
    <title>deleted cookies</title>
</head>
<body>
    <?php
    echo "deleted cookies";
    ?>
    <!-- <p><?= "Hello world!" ?></p> -->
</body>
</html>