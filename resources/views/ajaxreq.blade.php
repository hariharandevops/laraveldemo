<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
     <body>
    <form method="POST">
    @csrf
        <input type="text" id="text1" name="g_name"/><br><br>
        <input type="text" id="text2" name="g_name"/><br><br>
        <button type="button" class="btn btn-primary mt-4" onclick="ajaxfn();">Register</button>
    </form>    
    <script>
        function ajaxfn(){
            var name1 = document.getElementById('text1').value;
            var name2 = document.getElementById('text2').value; 
            
            $.ajax({
               type:"post",
               url:"/app/ajax/req",
               data: {
                   _token:"{{ csrf_token() }}",
                   fname:name1,
                   lname:name2,
               },
               success:function(response){
                    if(response.result == "success"){
                        alert(response.name);
                        //location.reload();
                    }   
               }
            });
        }
            
        </script>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</html>