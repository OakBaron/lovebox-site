<?php
    $lastAccess = file_get_contents("lastAccess.txt");
    $timeToPush = strtotime("+3 days", $lastAccess);
    
    if (time() >= $timeToPush) {
        require "functions.php";
        $item = array_rand(getList());
        clearCurrent();
        putInCurrent(getList()[$item]);
        remove($item);
    }
?>