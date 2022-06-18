<?php
    if(isset($_POST["name"]))
    {
        echo "Welcome " .$_POST['name']."<br/>"; 
    }
    if(isset($_POST["age"])){
        echo "you are ".$_POST['age']."years old"."<br/>";
    }
    if(isset($_POST["phoneno"])){
        echo "your Phone number is ".$_POST['phoneno']."<br/>";
    }
    if(isset($_POST["email"])){
        echo "your Phone email is ".$_POST['email']."<br/>";
        exit();
    }
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .header {
            background-color: red;
            color: white;
            text-align: center;
            margin: 0px;
            padding: 20px;
        }

        .mid {
            text-align: left;
            margin-right: 0px;
        }
        .button{
            background-color:blue;
            color: white;
        }
        .bgcolor{
            background-color: yellow;
            color: red;
        }
    </style>
</head>

<body>

    <!-- time stamp video #7 12:00 -->

    <div class="contanier mid bgcolor">
        <div class="row mid">
            <div style="text-align: center;" class="col-12"> <br><b>Personal information</b>
                <p>Please fill out the form</p>
                <div class="container mx-4">
                    <form action="<?php $_PHP_SELF ?>" method="POST">
                        <input type="text" placeholder="Enter your Name"class="Name form-control" id="Name" name="name"> <br>
                        <input type="text" placeholder="Enter your Age"class="Age form-control" id="Age" name="age" ><br>
                        <input type="text" placeholder="Enter your Phone number"class="pn form-control" id="Pn" name="phoneno"><br>
                        <input type="text" placeholder="Enter your Father's Name"class="pn form-control" id="Pn" name="father's name"><br>
                        <input type="text" placeholder="Enter your Mother's Name"class="pn form-control" id="Pn" name="mother's name"><br>
                        <input type="text" placeholder="Enter your Address"class="pn form-control" id="Pn" name="Address"><br>

                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" name="email"><br>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div><br>
                        <button  type="submit" class="btn btn-Success button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>

</html>