

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


<?php


$Name     = $_COOKIE['Name'];
$Email    = $_COOKIE['Email'];
$password = $_COOKIE['password'];
$TITLE    = $_COOKIE['Title'];
$Content  =$_COOKIE['Content'];
$gender =   $_COOKIE['gender'];
$profileImage = $_COOKIE["disPath"];
$linkedin = $_COOKIE["linkedin"];


   echo('<div class="container-fluid" style="background-image: url(./H7Wg95.jpg);  height: 100%; ">
    <div class = "row text-center pt-1" style=" height: 100%;" >
    <div class="card" style="background-color: rgba(0, 0, 0, 0.771); height: 100%;">
    <h3><img  class ="card-img-top" src="./'.$profileImage.'" style="width: 300px ; height: 300px ;"></h3>
        <div class="card-body">
        <h3 class="card-title" style="color: rgb( 250, 0, 150);"> Name :   '.$Name.'</h3>
        <h3 style="color: rgb( 250, 0, 150);"> Email :   '.$Email.'</h3>
        <h3 style="color: rgb( 250, 0, 150);"> My Bio :   '.$TITLE.'</h3>
        <h3 style="color: rgb( 250, 0, 150);"> My Describtion :   '.$Content.'</h3>
        <h3 style="color: rgb( 250, 0, 150);"> Gender :   '.$gender.'</h3>
        <h3 style="color: rgb( 250, 0, 150);"> Contact Me :   '.$linkedin.'</h3>
        <form action="delete.php"  method="post">
        <input class="btn btn-primary pill-rounded align-bottom" type="submit" value="Delete data">
    </form>
    </div>
    </div>
    </div>
    </div>
    ')
    ?>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>



