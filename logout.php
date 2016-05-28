<?php
  session_start();
  $_SESSION = array();
  session_destroy();
  header('HTTP/1.1 301 Moved Permanently');
  header("Location: index.php");
  exit(0);

