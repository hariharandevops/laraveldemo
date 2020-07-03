<!Doctype html>
<html lang="en"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <head>
        <tittle>Contact form</title>
    </head>
    <body>
        <h1>Let in get touch</h1>
        <form method="post">
            @csrf
            <lable for="name">Name:<input type="text" name="name" id="name"></lable><br><br>
            
            <lable for="email">Email:<input type="email" name="email" id="email"></lable><br><br>
            
            <lable for="message">Message:<textarea type="message" name="message" id="message" rows="10" cols="30"></textarea></lable><br><br>
            
            <input type="submit" value="sent">
        </form>
    </body>
</html>