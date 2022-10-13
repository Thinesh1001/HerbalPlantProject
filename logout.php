<?php
include('./config.php');
session_destroy();
header('LOCATION:'.SITEURL);
?>