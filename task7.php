<!-- # TASK .
Title   =  [required , string]
Content =  [required,length >50 ch]
Build a Blog Module  with following data  
Image   =  [required, file]
Then Store data into text file , display blogs data , stored data can be deleted.
Deadline Saturday 3 pm . 
 -->

 <?php
$Name     =  
$Email    = 
$password = 
$TITLE    = 
$linkedin  = 
$gender = 
$Content  =
$profileImage = "";
function clean($var)
{
  trim($var);
  stripcslashes($var);
  strip_tags($var);
  stripslashes($var);
  return $var;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name     = clean($_POST['Name']);
    $Email    = clean($_POST['Email']);
    $password = clean($_POST['password']);
    $TITLE    = clean($_POST['TITLE']);
    $Content  =clean($_POST['Content']);
    $gender =   clean($_POST['Gender']);
    $profileImage = $_FILES["profileImage"];
    $data = [];
    // var_dump($CV);
    $linkedin  =$_POST['linkedin'];
    if(empty($Name)){
        echo('<h3 class="alert-danger">Name is required </h3>');
      }elseif (!is_string($Name)) {
        echo('<h3 class="alert-danger">Name is not valid </h3>');
      } else{
        $data["Name"] = $Name;
        $data["gender"] = $gender;
          setcookie("Name",$Name,time()+86000,"/");
          setcookie("gender",$gender,time()+86000,"/");
      }
      if(empty($Email)){
        echo('<h3 class="alert-danger">Email is required </h3>');
      }elseif (!filter_var($Email,FILTER_VALIDATE_EMAIL)) {
        echo('<h3 class="alert-danger">Email is not valid </h3>');
      } else{
          $data["Email"] = $Email;
          setcookie("Email",$Email,time()+86000,"/");
      }
      if(empty($password)){
        echo('<h3 class="alert-danger">password is required </h3>');
      }elseif (strlen((string)$password)<6) {
        echo('<h3 class="alert-danger">password must be at least 6 digits </h3>');
      } else{
        $data["password"] = $password;
       
          setcookie("password",$password,time()+86000,"/");
      }
      if(empty($TITLE )){
        echo('<h3 class="alert-danger">Bio  is required </h3>');
      }elseif (strlen($TITLE)<20){
        echo('<h3 class="alert-danger">Bio must be at least 20 chars </h3>');
      } else{
        $data["TITLE"] = $TITLE;
        setcookie("Title",$TITLE,time()+86000,"/");
      }
      if(empty($linkedin)){
        echo('<h3 class="alert-danger">linkedin account is required </h3>');
      }elseif (!filter_var($linkedin,FILTER_SANITIZE_URL)) {
        echo('<h3 class="alert-danger">linkedin is not valid </h3>');
      } else{
        $data["linkedin"] = $linkedin;
      
          setcookie("linkedin",$linkedin,time()+86000,"/");
       
      }
      if(empty($Content)){
        echo('<h3 class="alert-danger">Content  is required </h3>');
      }elseif (strlen($Content)<500 && strlen($Content)>100) {
        echo('<h3 class="alert-danger">Content must be between  100 and 500 chars </h3>');
      } else{
        $data["Content"] = $Content;
       
          setcookie("Content", $Content,time()+86000,"/");
        
      }

      ////////////////////////////////////////
    
        if (!empty($_FILES['profileImage']['name'])) {
    
            $name    = $_FILES['profileImage']['name'];
            $temPath = $_FILES['profileImage']['tmp_name'];
            $size    = $_FILES['profileImage']['size'];
            $type    = $_FILES['profileImage']['type'];
            // echo($name.$temPath.$size.$type);
    
            $types  =  explode('/', $type);  
            $extension  =  strtolower( end($types));      
            // echo $extension ;
            $allowedExtension = ['png', 'jpeg', 'jpg'];   
            if (in_array($extension,$allowedExtension)) {
                if ($size < 4000000) {
                    $FinalName = time() . rand() . '.' . $extension;
    
                    $disPath = 'uploads/' . $FinalName;
        
                    if (move_uploaded_file($temPath, $disPath)) {
                      $data["disPath"] = $disPath;
                     
                        setcookie("disPath", $disPath,time()+86000,"/");
                      
                    } else {
                        echo('<h3 class="alert-danger">Error Try Again</h3>');
                    }
                } else {
                    echo('<h3 class="alert-danger">Image must be less than 4MB </h3>');
                }   
            } else {
                echo('<h3 class="alert-danger">InValid Image Extension</h3>');
            }
        } else {
            echo('<h3 class="alert-danger">Image Required</h3>');
        }
      
      $file = fopen('all users data.txt','a')  or die("can't open file");
      foreach ($data as $key => $value) {
        fwrite($file,$key." :".$value."\n");
      }
      fwrite($file,"\n\n\n\n\n");
      fclose($file);
      $user_file = fopen('user data.txt','w')  or die("can't open file");
      foreach ($data as $key => $value) {
        fwrite($user_file,$key." :".$value."\n");
      }
      fclose($user_file);
      if (count($data)>7) {
        header("Location: http://localhost/php%20task/task7/Displaytask7.php");
        exit;
      }
     
}

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid" style="background-image: url(./H7Wg95.jpg);  height: 100%; ">
    <div class = "row text-center">
    <form style="background-color: rgba(95, 158, 160, 0.37); height: 100vh;"action="<?php echo $_SERVER['PHP_SELF'];?>"  method="post"  enctype="multipart/form-data">
    <h1 class="text-primary " >Please input your data to Sign Up</h1>
        <label for="Name" class="form-group col-3  m-3">Name</label> <input class="col-6 m-1 px-2" type="text" name="Name" id="Name" placeholder="your name"> <br>
        <label for="Gender" class="form-group col-3 m-3">Gender</label>
        <select name="Gender" id="Gender" class="form-group col-6 m-1 px-2" >
            <option value="Male" >Male</option>
            <option value="FeMale">Female</option>
        </select><br>
        <label for="Email" class="form-group col-3  m-3">Email </label> <input class="col-6 m-1 px-2" type="text" name="Email" id="Email" placeholder="your E-mail"><br>
        <label for="password" class="form-group col-3 m-3">Password</label> <input class="col-6 m-1 px-2" type="password" name="password" id="password" placeholder="password"><br>
        <label for="Title" class="form-group col-3  m-3">BIO</label> <input class="col-6 m-1 px-2" type="text" name="TITLE" id="Title" placeholder="your Title"> <br>
        <label for="Content" class="form-group col-3 m-3">Describtion</label> <input class="col-6 m-1 px-2" type="text" name="Content" id="Content" placeholder="your Content"><br>
        <label for="linkedin" class="form-group col-3 m-3">linkedin</label> <input class="col-6 m-1 px-2" type="text" name="linkedin" id="linkedin" placeholder="your linkedin profile url"><br>
        <label for="profileImage" class="form-group col-3 m-3 " >Profile image </label> <input type="file"  class="col-6 m-1 px-2" name="profileImage" id="profileImage" placeholder="your Personal profile img"> <br>
        <button type="submit" class="btn rounded-pill px-5 btn-primary m-3">Submit</button>
    </form>
    </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>




























