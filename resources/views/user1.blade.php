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

<table style="width:20%">
  <tr>
    <th>@id1</th>
    <th>@type1</th> 
    <th>schema:name1</th>
     <th>schema:startDate</th>
      <th>schema:location</th>
       <th>@id2</th>
        <th>@type2</th>
        <th>schema:name2</th>
        <th>schema:address</th>
        <th>@id3</th>
        <th>@type3</th>

  </tr>
       <?php
  
    $test1=$x["columns"];
    //print_r($test1);
    
  for($i=0;$i<sizeof($test1);$i++){
     $test2= $test1[0];
     $test3=$test2["schema:location"];
     $test4=$test2["schema:offer1"];
     //print_r($test3);
     
     echo '<td>'.$test2["@id1"].'</td>';
     echo '<td>'.$test2["@type1"].'</td>';
     echo '<td>'.$test2["schema:name1"].'</td>';
     echo '<td>'.$test2["schema:startDate"].'</td>';
     echo '<td>'.$test3["@id2"].'</td>';
     echo '<td>'.$test3["@type2"].'</td>';
     echo '<td>'.$test3["schema:name2"].'</td>';
     echo '<td>'.$test3["schema:address"].'</td>';
     echo '<td>'.$test4["@id3"].'</td>';
     echo '<td>'.$test4["@type3"].'</td>';
     
     echo '<tr>';
  
     }
  
  
  
  
  
  
 
  
     
    
      ?>
  
</table>
</body>
</html>