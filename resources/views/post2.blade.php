<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> welcome</head>
        <title>Student Details </title>
        <body>
            <form method="post" >
            @csrf
            <center>
            @foreach($table as $val)
             name:   <input type="text"  name="name" value="{{$val->name}}"/><br><br>
             course: <input type="text"  name="course"value="{{$val->course}}"/><br><br>
             age:    <input type="text"  name="age"value="{{$val->age}}"/><br><br>
             @endforeach
            <input type="submit" value"update">     
            </center>
           </form>
        </body>
            </html>