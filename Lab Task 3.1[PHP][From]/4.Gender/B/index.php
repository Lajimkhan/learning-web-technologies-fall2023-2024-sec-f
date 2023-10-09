<?php
if(isset($_REQUEST['submit'])){
    $gender = $_REQUEST['gender'];

    if($gender === "male"){
        echo "Gender: Male";
    }elseif($gender === "female"){
        echo "Gender: Female";
    }elseif($gender === "other"){
        echo "Gender: Other";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender B</title>
</head>
<body>
<form action="#" method="post">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="male" value=""><label> Male</label>
            <input type="radio" name="gender" value="female" value=""><label> Female</label>
            <input type="radio" name="gender" value="other" value=""><label> Other</label>
            <br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>
