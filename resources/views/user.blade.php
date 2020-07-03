<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  padding: 5px;
  text-align:center;
}
table {
  border-spacing: 15px;
}
</style>
</head>
<body>

<h2><center>imaging</center></h2>
<p></p>

<table style="width:100%">
  <tr>
    <th>name</th>
    <th>age</th> 
    <th>secretIdentity</th>
    <th>powers</th>
    
    
     
  </tr>
       <?php
  
  
    
    //print_r($x);
    $a=$x["members"];
    
    
    
   for($i=0;$i<sizeof($a);$i++){
       echo '<td>'.$a[$i]["name"].'</td>';
       echo '<td>'.$a[$i]["age"].'</td>';
       echo '<td>'.$a[$i]["secretIdentity"].'</td>';
     
     
      
       
       echo '<tr>';
   }
    
    
 
    
    
    
  
  
  
  
  
 
  
     
    
      ?>
  
</table>
</body>
</html>