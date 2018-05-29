<?php 
require_once("functions.php");
session_start();
save();
session_destroy();
header("Location: index.php");
?>