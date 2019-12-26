<?php
    require "functions.php";
    moveCurrentToList();
    file_put_contents("current.txt", "");
    header("Location: index.php");
?>