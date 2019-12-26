<?php
  require "functions.php";
  remove($_GET["del"]);
  header("Location: list.php");
?>