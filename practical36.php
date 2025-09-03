<html>
    <head></head>
    <body>
<form>
    <label>Name:</label>
<input type="text" name="name"/>
<button>Submit</button>
</form>
</body>
</html>
<?php
$name=$_GET['name'];
echo"Hello,".$name;
?>