<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try to solve yourself</title>
</head>
<body>
    <h1>Pirate Treasure Map</h1>
<?php
$string ="find the hidden tresure at the golden island";
$change =str_replace("golden","mystic",$string);
$result =strtoupper($change);
echo "$result";
?>
</body>
</html>