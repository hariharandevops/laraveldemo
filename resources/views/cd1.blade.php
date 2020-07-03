<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
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
 <form method="post">
   @csrf
    <input type="text" name="id"/>
    <input type="text" name="name"/>
    <input type="text" name="last_name"/>
    <input type="text" name="email"/>
    <input type="text" name="phone"/>
    <input type="text" name="address"/>
</form>
<h2>HTML Table</h2>

<table>
    <tr>
        <th> id</th>
        <th> name</th>
    </tr>
  @foreach($a as $user)
    <tr>
        <td> {{$user->id}} </td>
        <td> {{$user->welcome}} </td>
    </tr>
   @endforeach
   
</table>

</body>
</html> 
 