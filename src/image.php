<?php

$zufall = rand(1, 3);
$image = $zufall . '.jpg';

?><!DOCTYPE html>
<html>
    <head>
        <title>Sweet Animals</title>
    </head>
    <body>
        <img src="animals/<?php echo $image; ?>">
    </body>
</html>