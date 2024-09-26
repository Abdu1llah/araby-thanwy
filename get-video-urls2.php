<?php
// قائمة الأكواد الصحيحة للملف الثاني
$validCode = "grade2-تأسيس-النحو";

// قراءة بيانات POST
$data = json_decode(file_get_contents('php://input'), true);

// التحقق من صحة الكود
if ($data['code'] === $validCode) {
    // إذا كان الكود صحيحًا، إرجاع روابط الفيديو
    $videoUrls = [
        "https://www.youtube.com/embed/1RfQB4AK0-w",  // فيديو 5
        "https://www.youtube.com/embed/m1AdbWkUzvA",  // فيديو 6
        "https://www.youtube.com/embed/8K-17VrM0VY",  // فيديو 7
        "https://www.youtube.com/embed/DfKOCgExK3o",
        "https://www.youtube.com/embed/lqG1dGRbk2g",
        "https://www.youtube.com/embed/A3UlMjdzJEg",
        "https://www.youtube.com/embed/C0aCt0LJxd8",
        "https://www.youtube.com/embed/kZTa-zr1Vv4",
        "https://www.youtube.com/embed/GuEv-3OF1ng"
               // فيديو 8        // فيديو 8
    ];

    // إرجاع الروابط في شكل JSON
    echo json_encode([
        'success' => true,
        'videos' => $videoUrls
    ]);
} else {
    // إذا كان الكود غير صحيح
    echo json_encode([
        'success' => false
    ]);
}
?>
