<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examp1</title>
</head>

<body>
    <?php
    $number = array(-45435435235,8, 123, 6564, 34236, 986546, 9546345, 8754563,);
    rsort($number);
    echo  $number[0] + $number[1];
    ?>
</body>

</html>