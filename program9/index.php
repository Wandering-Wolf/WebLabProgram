<html>
<head>
    <title>Pattern Matching with Python</title>
</head>
<body>
    <?php
        // will execute the python file in the command line
        $res = shell_exec("python states.py");
        // takes input from output of command line (removes \n)
        $resArr = explode("\n",$res);
        echo "<h2>States are: $resArr[4]</h2>";

//        for ($i=0; $i<count($resArr); $i++)
//            echo "<h2>$resArr[$i]</h2>";

        echo "<h2>State that ends with xas is: $resArr[0]</h2>";
        echo "<h2>State that begins with k and ends with s is: $resArr[1]</h2>";
        echo "<h2>State that begins with M and ends with s is: $resArr[2]</h2>";
        echo "<h2>State that ends with a is: $resArr[0]</h2>";
    ?>
</body>
</html>

