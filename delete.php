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
$status=unlink('user data.txt');   
if($status){ 
echo(' <div class="container-fluid" style="background-image: url(./H7Wg95.jpg);  height: 100%; ">'); 
echo ('<h1 class="text-primary">File deleted successfully</h1> ');
echo ('<a href="http://localhost/php%20task/task7/task7.php"><button class="btn btn-primary pill-rounded" > =GO Back</button> </a>');    
echo("</div>");
}else{  
echo(' <div class="container-fluid" style="background-image: url(./H7Wg95.jpg);  height: 100%; ">'); 
echo ' <h1 class="text-danger"> Sorry! something went wrong </h1> '; 
echo ('<a href="http://localhost/php%20task/task7/task7.php"><button class="btn btn-primary pill-rounded" > =GO Back</button> </a>'); 
echo("</div>");
} 
setcookie("Name","",time()-3600,"/") ;
setcookie("Email","",time()-3600,"/") ;
setcookie("password","",time()-3600,"/") ;
setcookie("Title","",time()-3600,"/") ;
setcookie("Content","",time()-3600,"/") ;
setcookie("gender","",time()-3600,"/") ;
setcookie("disPath","",time()-3600,"/") ;
setcookie("linkedin","",time()-3600,"/") ;
?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>