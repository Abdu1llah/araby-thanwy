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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $grade = $_POST['grade'];

    $sql = "INSERT INTO users (name, email, password, grade) VALUES ('$name', '$email', '$password', '$grade')";

    if ($conn->query($sql) === TRUE) {
        // بدء الجلسة وتوجيه المستخدم إلى صفحة الملف الشخصي
        $_SESSION['email'] = $email;
        $_SESSION['grade'] = $grade;
        header("Location: profile.php");
        exit(); // إنهاء السكريبت بعد التوجيه
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>التسجيل - منصة عربي ثانوي</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>التسجيل</h2>
        <form method="POST">
            <label for="name">الاسم:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">البريد الإلكتروني:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">كلمة المرور:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">تأكيد كلمة المرور:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <label for="grade">الصف الدراسي:</label>
            <select id="grade" name="grade" required>
                <option value="grade1">الصف الأول الثانوي</option>
                <option value="grade2">الصف الثاني الثانوي</option>
                <option value="grade3">الصف الثالث الثانوي</option>
            </select>

            <button type="submit">تسجيل</button>
        </form>
    </div>
</body>
</html>
