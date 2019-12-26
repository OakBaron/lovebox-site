<?php
    function updateAccess(){
        file_put_contents("lastAccess.txt", time());
    }
    
    function getList(){
        $list = file_get_contents("list.txt");
        $list = explode("\n", $list);
        return $list;
    }
    
    function updateList($list){
        $list = array_unique(array_filter($list));
        $list = implode("\n", $list);
        file_put_contents("list.txt", $list);
    }
    
    function moveCurrentToList(){
        
        // this code was deprecated to make the process simpler overall
        // function kept to make sure nothing broke
        
        /**
        $list = getList();
        $current = file_get_contents("current.txt");
        
        array_push($list, $current);
        updateList($list);
        */
    }
    
    function putInCurrent($text){
        file_put_contents("current.txt", $text);
        updateAccess();
    }
    
    function addFromPost(){
        if ($_POST["submit"] == "now") {
            moveCurrentToList();
            putInCurrent($_POST["text"]);
        }
        
        if ($_POST["submit"] == "list") {
            $list = getList();
            array_push($list, $_POST["text"]);
            updateList($list);
        }
    }
    
    function remove($id){
        $list = getList();
        unset($list[$id]);
        updateList($list);
    }
    
    function clearCurrent(){
        moveCurrentToList();
        file_put_contents("current.txt", "");
    }
?>