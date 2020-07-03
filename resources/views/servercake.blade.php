<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Contact form</title>
</head>
<body>

<form method="post">
    @csrf
    
    name: <input type="text" name="name" id="name"/><br><br>
    
    user: <input type="text" name="user" id="user"/><br><br>
    
    course: <input type="text" name="course" id="course"/><br><br>
    <input type="submit">
</form>
</body>
</html>