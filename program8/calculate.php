<html>
<head>
    <title>Calculation Result</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
<?php
//    $op1 = $_GET['op1'];
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $operator=$_POST['operator'];
    $res = 0;
    echo "<h1>Simple Calculator</h1>";
    switch ($operator) {
        case '+':
            $res = $op1+$op2;
            break;
        case '-':
            $res = $op1-$op2;
            break;
        case '*':
            $res = $op1*$op2;
            break;
        case '/':
            if($op2!=0)
                $res = $op1/$op2;
            break;
    }
    echo "<h1>$op1 $operator $op2=$res";
?>
</body>
</html>
