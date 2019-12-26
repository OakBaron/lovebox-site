<?php
  require "functions.php";
  clearCurrent();
  $item = getList();
  $item = $item[$_GET["item"]];
  putInCurrent($item);
  remove($_GET["item"]);
  header("Location: index.php");
?>