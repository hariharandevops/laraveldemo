<!Doctype html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <tittle><h1>Table</h1></tittle>
    </head>
    <body>
        <form method="post">
    @csrf
       User:
       <input type="text" name="user" id="user"/><br><br>
       Course:
       <input type="text" name="course" id="course"/><br><br>
       Age: 
       <input type="text" name="age" id="age"/><br><br>
       
       
          <input type="submit" value="ok">
        </form>
    </body>
</html>