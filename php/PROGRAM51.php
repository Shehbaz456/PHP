<!-- <?php
    if($_GET["name"] || $_GET["age"])
    {
        echo "Welcome " .$_GET['name']."<br/>"; 
        echo "you are ".$_GET['age']."years old";
        exit();
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<body>
    <form action="<?php $_PHP_SELF ?>" method="GET">
    name: <input type="text" name="name" />
    Age: <input type="text" name="age" />
    <input type="Submit" /> 
    </form>  
</body>
</html> -->

<?php
    if(isset($_POST["name"]))
    {
        echo "Welcome " .$_POST['name']."<br/>"; 
    }
    if(isset($_POST["age"])){
        echo "you are ".$_POST['age']."years old";
        exit();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
    name: <input type="text" name="name" />
    Age: <input type="text" name="age" />
    <input type="Submit" /> 
    </form>  
</body>
</html>





