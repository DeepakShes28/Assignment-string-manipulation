<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>try more and  more</title>
</head>
<body>
    <h1>Enchanted Spell Check</h1>
<?php

$string = "   AbrACAdABrA   ";
//remove spaces
$trimmed_spell = trim($string);
$small = strtolower($trimmed_spell);
$correct = "abracadabra";
if ($small === $correct) {
    echo "The spell is correct ";
} else {
    echo "The spell is incorrect";
}
?>
</body>
</html>