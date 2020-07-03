<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> welcome
    
    </head>
        <title>Student Details </title>
        <body>
            <form method="post" action="insert">
            @csrf
             name:   <input type="text"  name="name" id="pass1" value=""/><br><br>
             address <input type="text"  name="address" id="pass2"value=""/><br><br>
             course: <input type="text"  name="course" id="pass3" value=""/><br><br>
             age:    <input type="text"  name="age" id="pass4" value=""/><br><br>
                      <input type="submit">
                      <input type="submit" value="update">
                       
           </form>
           <button type="button" class="btn btn-primary mt-4" onclick="ajadata();">update</button>
           
           <script>
           function ajadata(){
               var click1=document.GetElementById=('pass1').value;
               var click2=document.GetElementById=('pass2').value;
               var click3=document.GetElementById=('pass3').value;
               var click4=document.GetElementById=('pass4').value;
               $.ajax({
               type:"post",
               url:"app/data/pass/",
               data: {
                   _token:"{{ csrf_token() }}",
                   name:click1,
                   address:click2,
                   course:click3,
                   age:click4,
               },
           }
           
           </script>
            </body>
            </html>
                
    