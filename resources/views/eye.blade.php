<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Contact form</title>
</head>
<body>

<form method="post" action="insert">
    @csrf
    
    User: <input type="text" name="user" id="user"/><br><br>
    
    Course: <input type="text" name="course" id="course"/><br><br>
    
    Age: <input type="number" name="age" id="age"/><br><br>
    <input type="submit">
</form>
</body>
</html>