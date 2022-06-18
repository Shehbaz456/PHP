<?php
    if($_POST["name"] || $_POST["age"])
    {
        echo "Welcome " .$_POST['name']."<br/>"; 
        echo "you are ".$_POST['age']."years old";
        exit();
    }
?>
<head>
    <title>Personal info Page</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        name: <input type="text" name="name" />
        Age: <input type="text" name="age" />
        <input type="Submit" />
        
    </form> 
</body>
</html>