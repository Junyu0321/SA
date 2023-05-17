
<?php
session_start();
$link = mysqli_connect('localhost','root','','fjuactivity');
if (!$link) {
    die('無法連線到資料庫：' . mysqli_connect_error());
}
?>
