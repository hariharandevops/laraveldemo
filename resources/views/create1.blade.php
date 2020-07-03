<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <h1>Student Data</h1>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                <th>user</th>
                <th>Course</th>
                <th>Age</th>
                <th>option</th>
                <th>delete</th>
           </tr>
           </thead>
              <tbody>
                   @foreach($create as $reg)
                   <tr>
                        <td>{{$reg->id}}</td>
                        <td>{{$reg->user}}</td>
                        <td>{{$reg->course}}</td>
                        <td>{{$reg->age}}</td>
                        <td><button type="button" class="btn btn-primary mt-4" onclick="fndata({{$reg->id}});">Edit</button></td>
                        <td><button type="button" class="btn btn-primary mt-4">Delete</button></td>
                        
                   </tr>
                   @endforeach
                </tbody>
                
                
        </table><br><br><br><br>
        <center>
            <form method='post'>
           
           @csrf
                name:  <input type="text" name="user" id="pass1" value=""/><br><br>
                course:<input type="text" name="course" id="pass3" value=""/><br><br>
                age:   <input type="text" name="age" id="pass4" value=""/><br><br>
                       <input type="submit" value="update" onclick="fndata({{$reg->id}})">
                 
                   
                   </form>
        </center>
        <script>
        //edit
        function fndata(id){
               var ajax1=document.GetElementById=('pass1').value;
               var ajax3=document.GetElementById=('pass3').value;
               var ajax4=document.GetElementById=('pass4').value;
            $.ajax({
               
              type:"post",
              url:"/app/data/pass",
              data:{
              _token:"{{ csrf_token() }}",
                   user:ajax1,
                   course:ajax3,
                   age:ajax4,
                   id:id,
              },
            });
        }
        //update
        
         function updata(){
        
            $.ajax({
               
              type:"post",
              url:"/app/test/demo",
              data:{
              _token:"{{ csrf_token() }}",
        
              },
             success:function(response){
                if(response.result == "success"){
                    alert(response.num);
                     //location.reload();
                }
              
             } 
              
            });
        }
        </script>
    </body>
</html>