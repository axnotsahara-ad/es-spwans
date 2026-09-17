<?php
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // เปลี่ยนเป็นรหัสจริงภายหลัง
    if ($username === "admin" && $password === "123456") {

        $_SESSION["admin"] = true;

        header("Location: dashboard.php");
        exit();
    } else {
        $error = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>ES-SPAWNS Admin Login</title>

<style>
body{
    font-family:Arial,sans-serif;
    background:#0f172a;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.card{
    background:white;
    width:350px;
    padding:30px;
    border-radius:10px;
}

input{
    width:100%;
    padding:10px;
    margin:10px 0;
    box-sizing:border-box;
}

button{
    width:100%;
    padding:12px;
    background:#2563eb;
    color:white;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

.error{
    color:red;
    margin-bottom:10px;
}
</style>

</head>
<body>

<div class="card">

<h2>ES-SPAWNS Admin</h2>

<?php if($error): ?>
<p class="error"><?php echo $error; ?></p>
<?php endif; ?>

<form method="POST">

<input
type="text"
name="username"
placeholder="Username"
required>

<input
type="password"
name="password"
placeholder="Password"
required>

<button type="submit">
เข้าสู่ระบบ
</button>

</form>

</div>

</body>
</html>
