<?php
session_start();

if(!isset($_SESSION["admin"])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
</head>
<body>

<h1>ES-SPAWNS Dashboard</h1>

<p>เข้าสู่ระบบสำเร็จ</p>

<ul>
    <li>upload.phpอัปโหลดไฟล์</a></li>
    <li>logout.phpออกจากระบบ</a></li>
</ul>

</body>
</html>
