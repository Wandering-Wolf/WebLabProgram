<html>
<head>
    <title>Transpose</title>
</head>
<body>
<?php
    $arrA = array(
        array(1,2,0),
        array(0,1,1),
        array(2,0,1)
    );

    $arrB = array(
        array(1,1,2),
        array(2,1,1),
        array(1,2,1)
    );

    $result = array();

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


    if (count($arrA[0]) == count($arrB)) {
        echo "<h3>Multiplication of the two matrix is: </h3>";
        for($i = 0; $i<count($arrA); $i++) {
            for ($j=0; $j<count($arrB[0]); $j++) {
                $result[$i][$j]=0;
                for ($k=0; $k<count($arrB); $k++) {
                    $result[$i][$j] = $result[$i][$j] + ($arrA[$i][$k]*$arrB[$k][$j]);
                }
            }
        }
        for($i = 0; $i<count($result); $i++) {
            for ($j=0; $j<count($result[0]); $j++) {
                echo $result[$i][$j]." ";
            }
            echo "</br>";
        }
    }
    else {
        echo "<h3>Array multiplication not possible</h3>";
    }
?>
</body>
</html>
