<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$grade = $_SESSION['grade'];
$name = $_SESSION['email'];  // يجب تحديثه ليكون اسم المستخدم الفعلي


?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الملف الشخصي - منصة عربي ثانوي</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- التأكد من أن كل المحتوى داخل حاوية واحدة فقط -->
    <div class="profile-container">
        <h1>مرحباً بك، <?= $_SESSION['email']; ?></h1>
        <p>الصف الدراسي: <?= $_SESSION['grade']; ?></p>

        <?php if ($_SESSION['grade'] == 'grade1'): ?>
            <a class="lesson-link" href="grade1.php">اذهب إلى الصف الأول الثانوي</a>
        <?php elseif ($_SESSION['grade'] == 'grade2'): ?>
            <a class="lesson-link" href="grade2.php">اذهب إلى الصف الثاني الثانوي</a>
        <?php elseif ($_SESSION['grade'] == 'grade3'): ?>
            <a class="lesson-link" href="grade3.php">اذهب إلى الصف الثالث الثانوي</a>
        <?php endif; ?>
    </div>
</body>
</html>
