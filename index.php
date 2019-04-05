<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    function findMin($arr) {
        $min = $arr[0];
        $index = 0 ;
        for ($i = 1 ; $i < count($arr) ;$i++) {
            if ($arr[$i]< $min){
                $min = $arr[$i];
                $index = $i;
            }
        }
        return $index;
    }
    $arr1 = [2,4,5,6,-2,2,3,4,9];
    echo findMin($arr1)
    ?>
</body>
</html>