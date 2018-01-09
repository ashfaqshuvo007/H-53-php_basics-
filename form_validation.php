<?php

$name =  $email = $password = $website = $gender = $comment = '';
$errname = $errmail = $errpass =$errweb = $errgender = '';
//Get the user input
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
   
    //Validate the data
    if(empty($_POST['fname'])){
        $errname = "Username is required!";
    }else{
        $name = myValidator($_POST['fname']);
    }
    if(empty($_POST['email'])){
        $errmail = "Email is required!";
    }elseif (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) === false) {
        $errmail = "Invalid Email Format!";
    }else{
        $email = myValidator($_POST['email']);
    }
    if(empty($_POST['password'])){
        $errpass = "Password is required!";
    }else{
         $password = myValidator($_POST['password']);
    }
    if(empty($_POST['website'])){
        $errweb = "Website is required!";
    }else{
        $website = myValidator($_POST['website']);
    }
    if(empty($_POST['gender'])){
        $errgender = "Gender is required!";
    }else{
        $gender = myValidator($_POST['gender']);
    }
   
  
    
    $comment = myValidator($_POST['comment']);
}
function myValidator($d){
    $valid_data = htmlspecialchars(stripslashes(trim($d)));
    return $valid_data;
}
//Message thrown to user.

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP :: BASICS</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <header id="header">PHP :: Form Validation,required,URL,Email</header>
            <hr><hr>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <table>
                    <p style="color: red;">* Required Fields</p>
                    <tr>
                        <td>Fullname:</td>
                        <td><input type="text" name="fname"><span style="color: red;">* <?php echo $errname?></span></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" name="email"><span style="color: red;">*<?php echo $errmail?></span></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password"><span style="color: red;">*<?php echo $errpass?></span></td>
                    </tr>
                    <tr>
                        <td>Website:</td>
                        <td><input type="text" name="website"><span style="color: red;">*<?php echo $errweb?></span></td>
                    </tr>
                    <tr>
                        <td>Comments:</td>
                        <td><textarea name="comment" rows="10" cols="30"></textarea></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="female">Female
                            <span style="color: red;">*<?php echo $errgender?></span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>


