<?php
  $path=$_SERVER['SCRIPT_FILENAME'];
  $file = basename($path, ".php");
  echo $file;
?>