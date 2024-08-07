<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try yourself dude</title>
</head>
<body>
    <h1> Fantasy Character Name Generator</h1>
<?php
$names="Gandalf,Aragorn,Legolas";
$break_array=explode(",",$names);
$lowercase = array_map('strtolower', $break_array);
$join = implode('*', $lowercase);
echo "$join";



?>

</body>
</html>