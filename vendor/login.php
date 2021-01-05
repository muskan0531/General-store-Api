<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $mobile = $_POST["mobile"];
    $password = $_POST["password"]; 
      
    $sql = "Select * from vendors where mobile='$mobile' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        
    } 
    else{
        $showError= true;
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
    <form action="/user/vendor/login.php" method="post">
    <div>
        <div>
        <label for="mobile">Mobile</label>
        </div>
        <input type="text" name="mobile" id="mobile">
        </div>
        <div>
        <div>
        <label for="password">Password</label>
        </div>
        <input type="password" id="password" name="password">
        </div>
        <div>
        <button type="submit"> Submit</button>
        </div>
    </form>
    </div>
    
</body>
</html>