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
                    <th>id</th>
                    <th>name</th>
                    <th>course</th>
                    <th>age</th>
                    <th>address</th>
                    <th>place</th>
                </tr>
              </thead>
             <tbody>
            @foreach($uniq as $green)
            <tr>
            <td>{{$green->id}}</td>
            <td>{{$green->name}}</td>
            <td>{{$green->course}}</td>
            <td>{{$green->age}}</td>
            <td>{{$green->address}}</td>
            <td>{{$green->place}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </body>
</html>
