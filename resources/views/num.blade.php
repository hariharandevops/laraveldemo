<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> welcome</head>
        <title>Student Details </title>
        <body>
            <form method="post" >
            @csrf
            <center>
            @if($datas)
                @foreach($datas as $reg)
                 name:   <input type="text"  name="name" value="{{$reg->name}}"/><br><br>
                 address <input type="text"  name="address"value="{{$reg->address}}"/><br><br>
                 course: <input type="text"  name="course"value="{{$reg->course}}"/><br><br>
                 age:    <input type="text"  name="age"value="{{$reg->age}}"/><br><br>
                @endforeach
             @else
                <p>Not found</p>
             @endif
            <input type="submit" value"update">     
            </center>
           </form>
        </body>
            </html>