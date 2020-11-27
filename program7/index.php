<!--the program has to display the server time(in this case your laptop is your server)-->
<!--php is used for this program because its a server side thing. javascript and html are client side thing-->
<html>
<head>
    <meta http-equiv="refresh" content="1">
    <!-- this line refreshes the page every 1 second so that the second displayed changes just like in a digital cllock   -->
    <title>Digital Clock</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Digital Clock</h1>
<hr> <!-- Thematic break -->
<?php
date(date_default_timezone_set("Asia/Kolkata"));
echo "<h1>".date("h:i:s A")."</h1>"; // h - hours, i - minutes, s - seconds, A - AM/PM
?>
<hr>
</body>
</html>
