<?php
session_start();

?>


<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> الصف الاول الثانوي - منصة عربي ثانوي</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap');
        
        body {
            font-family: 'Tajawal', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background: #0d47a1;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            color: white;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        header h1 {
            font-size: 1.8rem;
            margin: 0;
        }

        .container {
            margin-top: 70px;
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
            font-size: 1.8rem;
            margin-bottom: 30px;
            color: #1e88e5;
        }

        .course-card {
            background-color: white;
            padding: 15px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            border-radius: 10px;
        }

        .course-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #0d47a1;
        }

        .course-card button {
            background-color: #1e88e5;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .course-card button:hover {
            background-color: #0d47a1;
        }
        /* تصميم أساسي للجميع */
body {
    font-family: 'Tajawal', sans-serif;
    background-color: #f5f5f5;
    color: #333;
    margin: 0;
    padding: 0;
}

/* تحسين التخطيط للهواتف المحمولة */
@media (max-width: 768px) {
    header h1 {
        font-size: 1.4rem; /* تصغير حجم النص في الهيدير للهواتف */
    }

    .container {
        width: 95%; /* تقليل العرض بحيث يتناسب مع شاشات الهواتف */
        margin: 20px auto;
    }

    .course-card h3 {
        font-size: 1.2rem; /* تقليل حجم النص */
    }

    .course-card button {
        width: 100%; /* جعل الزر يغطي عرض الشاشة بالكامل على الهواتف */
        font-size: 1rem; /* تصغير حجم النص داخل الأزرار */
    }
    
    /* تحسين العرض للـ iframe على الشاشات الصغيرة */
    .video iframe {
        height: 300px; /* تقليل ارتفاع الفيديو */
    }
}

/* تحسين التخطيط للأجهزة اللوحية */
@media (min-width: 768px) and (max-width: 1024px) {
    header h1 {
        font-size: 1.6rem;
    }

    .container {
        width: 90%;
    }

    .course-card h3 {
        font-size: 1.4rem;
    }

    .video iframe {
        height: 400px;
    }
}

/* تحسين التخطيط لأجهزة سطح المكتب */
@media (min-width: 1024px) {
    header h1 {
        font-size: 1.8rem;
    }

    .container {
        width: 80%;
        margin: 40px auto;
    }

    .video iframe {
        height: 500px; /* الحجم الافتراضي */
    }
}

    </style>
</head>
<body>

<header>
    <h1>منصة عربي ثانوي - الصفحة الرئيسية</h1>
    <?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    echo '<a href="logout.php" class="btn">تسجيل الخروج</a>';
} else {
}
?>
<a href="logout.php" class="btn">تسجيل الخروج</a>

</header>
<p>
<div class="container">
    <h2>قائمة الفيديوهات التعليمية</h2>

    <div class="course-card">
        <h3>كورس النحو التأسيسي للصف الثالث الثانوي</h3>
        <a href="playlist.html">
            <button>عرض قائمة الفيديوهات</button>
        </a>
    </div>

</div>
</p>
</body>
</html>
