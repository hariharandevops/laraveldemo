<html>
    <head><h1>hello</h1>
      <body>
        <form method="post">
            @csrf
          <input type="text" name="about" value="" placeholder="name"/><br>
          <input type="text" name="about1" value="" placeholder="class"/><br>
          <input type="text" name="about2" value="" placeholder="age"/><br>
          <input type="text" name="about3" value="" placeholder="sub"/><br>
          <input type="text" name="about4" value="" placeholder="title"/><br>
          <input type="submit" value="ok" name="union">
        </form>
      </body>
    </head>
<?php
if(isset($_post['union'])){
$a=$_POST['about'];
$b=$_POST['about1'];
$c=$_POST['about2'];
$d=$_POST['about3'];
$e=$_POST['about4'];
echo "hello".$a.$b.$c;
}
?>
</html>


