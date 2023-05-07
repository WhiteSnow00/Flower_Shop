<?php

$con = mysqli_connect("localhost","root","","ecom_store");

// Kiểm tra kết nối
if (!$con) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

?>
