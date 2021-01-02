<?php
$registered =false;
$registerError =false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `password`) VALUES ('$username', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $registered =true;
        }
    }
    else{
        $registerError=true;
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3. Registration for user</title>
</head>
<body>
<div>
    <?php
        if($registered){
            echo '<div style="background-color:green; color:yellow;">  Your account is now created and you can login</div>';
        }
        if($registerError){
           echo '<div style="background-color:red; color:yellow;"> Passwords do not match</div>';
        }
    ?>
    </div>
<div >
     <form action="/user/registration.php" method="post">
        <div >
        <div>
        <label for="username">Username</label>
        </div><input type="text" id="username" name="username"></div>
        <div >
        <div>
        <label for="password">Password</label>
        </div>
        <input type="password" id="password" name="password">
        </div>
        <div>
        <div>
        <label for="cpassword">Confirm Password</label>
        </div>
            <input type="password" id="cpassword" name="cpassword">
        </div>
         
        <button type="submit">Register</button>
     </form>
    </div>
</body>
</html>