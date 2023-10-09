
<?php
    if(isset($_REQUEST['submit'])){
        $degrees = $_REQUEST['degrees'];
        
        echo "Selected Degree:<br>";
        foreach($degrees as $degree){
            echo $degree."<br>";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree B</title>
</head>
<body>
    <form action="index.php" method="post">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="degrees[]" value="SSC" id=""><label>SSC</label>
            <input type="checkbox" name="degrees[]" value="HSC" id=""><label>HSC</label>
            <input type="checkbox" name="degrees[]" value="BSc" id=""><label>BSc</label>
            <input type="checkbox" name="degrees[]" value="MSc" id=""><label>MSc</label>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>
