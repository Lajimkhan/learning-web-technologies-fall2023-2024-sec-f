<?php
if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    echo "Name: ".$name;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name B</title>
</head>
<body>
    <form action="index.php" method="post">
        <fieldset>
            <legend>Name</legend>
            <input type="text" name="name" id="">
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>