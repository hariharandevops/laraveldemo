<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Contact form</title>
</head>
<body>
<h1>Let's get in touch!</h1>
<?php if (!empty($msg)) {
    echo "<h2>$msg</h2>";
} ?>
<form method="POST">
    @csrf
    <label for="name">Name: <input type="text" name="name" id="name"></label><br><br>
    
    <label for="email">Email: <input type="email" name="email" id="email"></label><br><br>
    
    <label for="message">Message: <textarea name="message" id="message" rows="8" cols="20"></textarea></label><br><br>
    <input type="submit" value="Send">
</form>
</body>
</html>