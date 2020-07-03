<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Contact form</title>
</head>
<body>

<form method="GET">
 
    name: <input type="text" id="text1" name="name" /><br><br>
    
    address: <input type="text" id="text2" name="address"/><br><br>
    
    course: <input type="text" id="text3" name="course"/><br><br>
    
    age: <input type="text" id="text4" name="age"/><br><br>
    
 <button type="button" class="btn btn-primary mt-4" onclick="ajaxdata();">click</button>
 <button type="update button" class="btn btn-primary mt-4" onclick="fndata();">update</button>
</form>
<table id="exm_tbl"></table>
<script>
     function ajaxdata(){
            var name1 = document.getElementById('text1').value;
            var name2 = document.getElementById('text2').value;
            var name3 = document.getElementById('text3').value;
            var name4 = document.getElementById('text4').value;
            $.ajax({
               type:"post",
               url:"/app/get/data/sma",
               data: {
                   _token:"{{ csrf_token() }}",
                   name:name1,
                   address:name2,
                   course:name3,
                   age:name4,
               },
               
               success:function(response){
                    if(response.result == "success"){
                        var tr='';
                        for(i=0;i<response.data.length;i++){
                            tr+='<tr>';
                            tr+='<td>';
                            tr+=response.data[i].id;
                            tr+='</td>';
                            tr+='<td>';
                            tr+=response.data[i].course;
                            tr+='</td>';
                            tr+='</tr>';
                            
                            
                        }
                        document.getElementById('exm_tbl').innerHTML=tr;
                        //location.reload();
                    }   
               }
            });
     }
     
    //update
   function fndata(){
            
       $.ajaupdate({
           type:"get",
               url:"/app/update/ajax/",
               
           success:function(response){
                    if(response.result == "success"){
                        location.reload();
                    }
           }
       });
   }
    
   
              
    
   
</script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</html>