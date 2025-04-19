<?php
session_start();
if (
    !isset($_SESSION["fldRole"]) ||
    $_SESSION["fldRole"] != "user"
) {
    header("location:../login.php?msg=Please Login");
}