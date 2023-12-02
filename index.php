
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
require('config.php');


$sql = "INSERT INTO check_list(description,remark) VALUES('xyz','remarkxy')";
$result = mysqli_query($con,$sql); // if you refresh url data will insert again

if($result){
    echo "New Record Inserted successfully!";
}else{
    echo "Unable Insert Data";
}

?>




<!-- <form action="" method="POST">
    Name<input type="text" name="name" placeholder="Enter your name">
    <input type="submit">
</form> -->



</body>
</html>