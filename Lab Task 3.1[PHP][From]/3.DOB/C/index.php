<?php
if(isset($_REQUEST['date'])){
    $date = $_REQUEST['date'];

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOB C</title>
</head>
<body>
    <form action="index.php" method="post">
        <fieldset>
            <legend>Date</legend>
            <input type="date" name="date" value="<?php if(isset($date)){echo $date; }?>" value="">
            <br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>