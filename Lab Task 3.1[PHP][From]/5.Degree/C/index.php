
<?php

$degrees = [];


    if (isset($_REQUEST["degrees"])) {
        $degrees = $_REQUEST["degrees"];
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree C</title>
</head>
<body>
    <form action="index.php" method="post">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="degrees[]" value="SSC" value="" <?php if(in_array('ssc', $degrees)) {echo "checked";} ?> ><label>SSC</label>
            <input type="checkbox" name="degrees[]" value="HSC" value="" <?php if(in_array('hsc', $degrees)) {echo "checked";} ?> ><label>HSC</label>
            <input type="checkbox" name="degrees[]" value="BSc" value="" <?php if(in_array('bsc', $degrees)) {echo "checked";} ?> ><label>BSc</label>
            <input type="checkbox" name="degrees[]" value="MSc" value="" <?php if(in_array('msc', $degrees)) {echo "checked";} ?> ><label>MSc</label>
            <br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>