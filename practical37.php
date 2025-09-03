<html>
    <head></head>
    <body>
        <form>
            <label>name:</label>
            <input type="text" name="name"/>
            <label>age:</label>
            <input type="number" name="age"/>
            <button>Submit</button>
        </form>
    </body>
</html>
<?php
$name=$_GET['name'];
$age=$_GET['age'];
echo"Hello $name,you are $age years old.";
?>