<?php
require "../Common/checkAuthenAdmin.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Chỉ khởi động session nếu chưa có session nào chạy
}
echo "<h1>Hello " . $_SESSION['RoleLogin'] . "</h1>";