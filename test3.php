<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $number = array(0, 1, 16, 3, 5, 4, 18, 22, 17, 21, 20, 25);
    $min = $number[1] - $number[0];
    for ($i = 0; $i <= count($number); $i++) {
        for ($j = 0; $j <= count($number); $j++) {
            if (($number[$j] - $number[$i]) == 1) {
                echo $number[$j] . $number[$i];
            }
        }
    }
    // for ($i = 0; $i <= count($number); $i++) {
    //     for ($j = 0; $j <= count($number); $j++) {
    //         if ($number[$i] - $number[$j] == 1) {
    //             echo $number[$j] . $number[$i];
    //         }
    //     }
    // }
    ?>
</body>

</html>