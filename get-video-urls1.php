<?php
// قائمة الأكواد الصحيحة للملف الأول
$validCode = "grade1-تأسيس-النحو";

// قراءة بيانات POST
$data = json_decode(file_get_contents('php://input'), true);

// التحقق من صحة الكود
if ($data['code'] === $validCode) {
    // إذا كان الكود صحيحًا، إرجاع روابط الفيديو
    $videoUrls = [
        "https://www.youtube.com/embed/HB3cNn04P7Y",  // فيديو 1
        "https://www.youtube.com/embed/k5lIqsDns54",  // فيديو 2
        "https://www.youtube.com/embed/VIDEO_ID_3",   // فيديو 3
        "https://www.youtube.com/embed/VIDEO_ID_4"    // فيديو 4
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
