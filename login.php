<?php
error_reporting(E_ALL & ~E_NOTICE); // إخفاء إشعارات Notice
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<?php

// بدء جلسة وعرض الأخطاء
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arabic_schoool";

$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// معالجة البيانات عند إرسال النموذج
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // بدء الجلسة وتوجيه المستخدم إلى صفحة الملف الشخصي
            $_SESSION['email'] = $email;
            $_SESSION['grade'] = $row['grade'];
            header("Location: profile.php");
            exit(); // إنهاء السكريبت بعد التوجيه
        } else {
            echo "كلمة المرور غير صحيحة";
        }
    } else {
        echo "البريد الإلكتروني غير موجود";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول - منصة عربي ثانوي</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>تسجيل الدخول</h2>
        <form method="POST">
            <label for="email">البريد الإلكتروني:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">كلمة المرور:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">تسجيل الدخول</button>
        </form>
    </div>
</body>
</html>
