<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
      
    $sql = "Select * from user1 where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    //$num = mysqli_num_rows($result);
    if ($result){
        $login = true;
    } 
    else{
        $showError = true;
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1. Login API for user</title>
</head>
<body>
<div>
    <?php
        if($login){
            echo '<div style="background-color:green; color:yellow;"> SUCCESS</div>';
        }
        if($showError){
           echo '<div style="background-color:red; color:yellow;"> Invalid Credentials</div>';
        }
    ?>
    </div>
    <div>
    <form action="https://fierce-waters-42040.herokuapp.com/user/user/login.php" method="post">
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="name">
        </div>
        <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        </div>
        <div>
        <button type="submit"> Submit</button>
        </div>
    </form>
    </div>
    
</body>
</html>