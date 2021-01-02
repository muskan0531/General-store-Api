<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5. Products list for the shopkeeper</title>
</head>
<body>
<?php
    include 'partials/_dbconnect.php';
    $sql = "SELECT * FROM `items`";
    $result = mysqli_query($conn,$sql);
    if($result){
    while($row = mysqli_fetch_assoc($result)){
        $title= $row['title'];
        $desc= $row['description'];
        $price= $row['price'];
        echo "title: ".$title ."<br>";
        echo 'description: '.$desc ."<br>";
        echo 'price: '.$price ."<br>";
        
    }
}
else{
    echo "Error";
}

?>
</body>
</html>



