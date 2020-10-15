<?php 

session_destroy();
header("location:$server/index.php?page=login");
?>