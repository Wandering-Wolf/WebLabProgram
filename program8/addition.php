<html>
<head>
    <title>Transpose</title>
</head>
<body>
<?php
    $arrA = array(
        array(1,2,3),
        array(4,5,6)
    );

    $arrB = array(
        array(2,6,7),
        array(4,1,8)
    );

    echo "<h3>Matrix A is: </h3>";
    for($i = 0; $i<count($arrA); $i++) {
        for ($j=0; $j<count($arrA[0]); $j++) {
            echo $arrA[$i][$j]." ";
        }
        echo "</br>";
    }

    echo "<h3>Matrix B is: </h3>";
    for($i = 0; $i<count($arrB); $i++) {
        for ($j=0; $j<count($arrB[0]); $j++) {
            echo $arrB[$i][$j]." ";
        }
        echo "</br>";
    }

    if (count($arrA) == count($arrB) && count($arrA[0]) == count($arrB[0])) {
        echo "<h3>Sum of the two matrix is: </h3>";
        for($i = 0; $i<count($arrB); $i++) {
            for ($j=0; $j<count($arrB[0]); $j++) {
                echo $arrA[$i][$j]+$arrB[$i][$j]." ";
            }
            echo "</br>";
        }
    }
    else {
        echo "<h3>Array addition not possible since their dimensions are different</h3>";
    }
?>
</body>
</html>