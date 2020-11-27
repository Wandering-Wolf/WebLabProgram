<html>
    <head>
        <title>Program 6</title>
    </head>
    <style>
        h1,h2 {
            text-align: center;
        }
    </style>
    <body>
<!--        <h1>Program 6</h1>-->
<!--        <h2>X=50 and Y=80</h2>-->
<!--        --><?php
//            $x = 50;
//            $y = 80;
//            $result = $x + $y;
//            echo "<h2>Result = $result</h2>";
//        ?>
        <h1>Welcome to my Webpage</h1>
        <?php
            $handle = fopen("count.txt", "r");
            $count = fread($handle, 10);
            date_default_timezone_set("Asia/Kolkata");
            $myTime = date("H");
            if (intval($myTime)>=9 && intval($myTime)<17) {
                $count = intval($count)+1;
            }
            fclose($handle);
            echo "<h2>Number of time the webpage visited is: $count</h2>";
            $handle = fopen("count.txt", "w");
            fwrite($handle, $count);
            fclose($handle);
        ?>
    </body>
</html>
