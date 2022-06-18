<?php
    session_start();
    if(isset($_SESSION['Counter']))
    {
        $_SESSION['counter']+= 1;
    }
    else{
        $_SESSION['counter'] = 1;

    }
    $mag = "you have visited this page ".$_SESSION['counter'];
    $mag. "in this Session" ;
    ?>
<html>
<head>
    <title>Session </title>
</head>
<body>
    <?php
    echo ($mag);
    ?>
</body>
</html>


