<!DOCTYPE html>
<html>
<head><h1>welcome</h1>
</head>
<body>
 <form method="post">
   @csrf
    <input type="text" name="id" value=""/><br><br>
    <input type="text" name="name" value=""/><br><br>
    <input type="text" name="last_name" value=""/><br><br>
    <input type="text" name="email" value=""/><br><br>
    <input type="text" name="phone" value=""/><br><br>
    <input type="submit" value="ok" name="address">
</form>
</body>

<?php
if(isset($_POST['address'])){
    $ab=$_POST['id'];
    $bc=$_POST['name'];
    $cd=$_POST['last_name'];
    $de=$_POST['email'];
    $ef=$_POST['phone'];
    $sum=$ab.$bc.$cd.$de.$ef;
    echo "hello " .$sum;
}

?>
</html> 
