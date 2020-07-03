<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <h1>Student Data</h1>
        <style>
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 50%;
            }
            
            td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
            }
            
            tr:nth-child(even) {
              background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <table>
               <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Course</th>
                    <th>Age</th>
                    <th>option</th>
                </tr>
              </thead>
             <tbody>
            @foreach($grn as $ever)
            <tr>
            <td>{{$ever->id}}</td>
            <td>{{$ever->user}}</td>
            <td>{{$ever->course}}</td>
            <td>{{$ever->age}}</td>
            <td><a href="http://development.wdrockers.com/app/option/{{$ever->id}}"><button type="button" class="btn btn-primary mt-4" >Edit</button><a></td>
            </tr>
            @endforeach
            </tbody>
        </table><br><br><br>
        <center>
            <form method="post">
                <input type="text" name="user" id="user" value=""/><br><br>
                <input type="text" name="courge" id="courge" value=""/><br><br>
                <input type="text" name="age" id="age" value=""/><br><br>
                <input type="submit" value="update" onclick="fnclick({{$ever->id}})">
            </form>
        </center>
        
        
        
    </body>
</html>














