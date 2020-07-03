<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align:center;   
}
</style>
</head>
<body>

<h2><center>JSON Table</center></h2>


<table style="width:100%">
  <tr>
    <th>name</th>
    <th>time</th>
   <th>location</th>
  </tr>
 
   
  <?php
    $a=$x["imaging"];

    
     for($i=0; $i<sizeof($a); $i++){
     echo '<td>'.$a[$i]["name"].'</td>';
     echo '<td>'.$a[$i]["time"].'</td>';
     echo '<td>'.$a[$i]["location"].'</td>';
     echo '<tr>';
     ?>
     }
  
</table>
</body>
</html>