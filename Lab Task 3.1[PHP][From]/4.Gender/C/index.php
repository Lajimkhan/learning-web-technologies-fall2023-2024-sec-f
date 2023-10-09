<?php

$gender = '';
if(isset($_REQUEST['submit'])){
    $gender = $_REQUEST['gender'];

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender C</title>
</head>
<body>
<form action="index.php" method="post">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="male" value="" <?php if($gender === "male"){ echo "checked"; }?>><label> Male</label>
            <input type="radio" name="gender" value="female" value="" <?php if($gender === "female"){ echo "checked"; }?>><label> Female</label>
            <input type="radio" name="gender" value="other" value="" <?php if($gender === "other"){ echo "checked"; }?>><label> Other</label>
            <br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>