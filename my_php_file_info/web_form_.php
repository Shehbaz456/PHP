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
            background-color: skyblue;
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
            background-color:red;
            color: white;
        }
    </style>
</head>

<body>

    <?php
    //   echo "hello php in Bootstrap"
    ?>
    <!-- <h1>Hello, world!</h1> -->


    <!-- time stamp video #7 12:00 -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"> <?php echo "Coder_Rank"; ?></a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">info</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button style="color:aqua" class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>

    <div class="header">
        <h3>More thain just a Website</h3>
        <span>
            <h5>Bulid your Brand Get New Business Manage Clint Do it your Self</h5>
        </span>
        <button type="button" class="btn btn-white">Get Satated</button>
        <p>15 days free trial No Card Required</p>

    </div>

    <div class="contanier mid">
        <div class="row mid">
            <div style="text-align: center;" class="col-8"> <br><b>Personal info Page</b>
                <p style="font-size:10px">Please fill out the Quik form and We will touch with lightning Speed</p>
                <div class="container">
                    <form action="<?php $_PHP_SELF ?>" method="POST">
                        <input type="text" placeholder="Enter your Name"class="Name form-control" id="Name" name="name"> <br>
                        <input type="text" placeholder="Enter your Age"class="Age form-control" id="Age" name="age" ><br>
                        <input type="text" placeholder="Enter your Phone number"class="pn form-control" id="Pn" name="phoneno"><br>

                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" name="email"><br>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div><br>
                        <button  type="submit" class="btn btn-Danger button">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-4"><br> <b>Connect with Us</b><br>
                <p>Support for Any Queation </p><br>
                <p>Email us at Support@CodeRank.com</p>
                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium tempora enim, facilis sapiente dolores sint tempore architecto suscipit assumenda eos error praesentium, aliquam officiis mollitia natus repudiandae, ut ipsum repellat.</p>
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