<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
     <body>
    <form method="POST">
               @csrf
       
            <input type="text" id="text1" name="g_name"/><br><br>
            <input type="text" id="text2" name="g_name"/><br><br>
            
            <button type="button" class="btn btn-primary mt-4" onclick="ajax();">Register</button>
        
    </form>    
    <script>
        function ajax(){
            alert("gg");
            var name1 = document.getElementById('text1').value;
            var name2 = document.getElementById('text2').value; 
            
            $.ajax({
               type:"post",
               url:"ajax/new",
               data: {
                   _token:"{{ csrf_token() }}",
                  
                   fname:name1,
                   lname:name2,
               },
               success:function(response){
                if(response.result == "success"){
                    location.reload();
                }   
                   
               }
               
            });
        }
            
        </script>
    </body>
</html>

