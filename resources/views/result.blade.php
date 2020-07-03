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
                <th>Id</th>
                <th>User</th>
                <th>Course</th>
                <th>Age</th>
                <th>edit</th>
                <th>delete</th>
           </tr>
           </thead>
              <tbody>
                   @foreach($note as $reg)
                   <tr>
                        <td>{{$reg->id}}</td>
                        <td>{{$reg->user}}</td>
                        <td>{{$reg->course}}</td>
                        <td>{{$reg->age}}</td>
                        <td><a href="http://development.wdrockers.com/app/edit/{{$reg->id}}"><button type="button" class="btn btn-primary mt-4" >Edit</button><a></td>
                        <td><a href="http://development.wdrockers.com/app/delete/{{$reg->id}}"><button type="button" class="btn btn-primary mt-4" >delete</button><a></td>
                   </tr>
                   @endforeach
                </tbody>
        </table>
    </body>
</html>