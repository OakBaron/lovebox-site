<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=UTF-8>
    <title>Lovebox</title>
    <link rel=stylesheet href=style.css>
    <meta name=description content="Send something nice :)">
    <meta name=keywords content=lovebox,opensource>
    <meta name=author content="Luke Ogburn">
    <meta name=viewport content=width=device-width,initial-scale=1.0>
    <style>
        body {
            padding-top: 10vh;
            text-align: center;
            font-family: monospace;
        }
        a {
            color: black;
            font-size: 1.5em;
            text-decoration: none;
        }
        a:hover{
            color: maroon;
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <h2>CURRENT LIST:</h2>
    <?php
        $list = file_get_contents("list.txt");
        $list = explode("\n", $list);
        for($i = 0; $i < sizeof($list); $i++){
            $item = $list[$i];
            echo "<a href=delete.php?del=$i>$item</a><br>\n";
        }
    ?>
</body>
</html>
