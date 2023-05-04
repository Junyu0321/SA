<?php
include 'link.php';
unset($_SESSION["user_id"]);
unset($_SESSION["user_name"]);
unset($_SESSION["user_identity"]);
unset($_SESSION["user_phone"]);
unset($_SESSION["user_email"]);
header("location:瀏覽活動.php");

?>