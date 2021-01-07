<?php
//local(development) connection
// $server = "localhost";
// $username = "root";
// $password = "";
// $database = "users";

//REMOTE server connection
$server = "remotemysql.com";
$username = "2rmOlWEIWw";
$password = "YttCaL6JAA";
$database = "2rmOlWEIWw";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
        
    die("Error". mysqli_connect_error());
}

?>