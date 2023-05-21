<?php
require_once("include/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");

$inserted_at = date("Y-m-d H:i:s");
$updated_at = date("Y-m-d H:i:s");

if (isset($_POST['discussProject'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $page = $_POST['page'];

    $query = "INSERT INTO `contact`(`name`, `email`, `phone`, `inserted_at`, `updated_at`) VALUES ('$name','$email','$phone','$inserted_at','$updated_at')";

    $insert = $db_handle->insertQuery($query);

    if ($insert) {
        echo "<script>
                document.cookie = 'alert = 1;';
                window.location.href='".$page."';
                </script>";
    }else{
        echo "<script>
                document.cookie = 'alert = 2;';
                window.location.href='404';
                </script>";
    }
}
