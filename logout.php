<?php
session_start();
session_destroy(); // إنهاء الجلسة

// إعادة توجيه المستخدم إلى الصفحة الرئيسية
header('Location: index.php');
exit();
?>
