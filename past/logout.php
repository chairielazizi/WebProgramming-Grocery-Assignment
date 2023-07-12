<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["user_name"]);
session_unset();
session_destroy();
header("Location:index.php");
?>