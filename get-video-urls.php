<?php
// قائمة الأكواد الصحيحة
$validCode = "grade1-تأسيس-النحو";

// قراءة بيانات POST
$data = json_decode(file_get_contents('php://input'), true);

// التحقق من صحة الكود
if ($data['code'] === $validCode) {
    // إذا كان الكود صحيحًا، إرجاع روابط الفيديو
    $videoUrls = [
        "https://www.youtube.com/embed/HB3cNn04P7Y",
        "https://www.youtube.com/embed/k5lIqsDns54",
        "https://www.youtube.com/embed/oBtSKsA2em8",
        "https://www.youtube.com/embed/cj3enFWhP08",
        "https://www.youtube.com/embed/-j4bhQSvv9U",
        "https://www.youtube.com/embed/vc6rk-x48iM",
        "https://www.youtube.com/embed/uYtjxkVb4a0",
        "https://www.youtube.com/embed/NpY6e5B43lE",
        "https://www.youtube.com/embed/MeA4V1vUgR0",
        "https://www.youtube.com/embed/jmrw_PNKlKI",
        "https://www.youtube.com/embed/uyAQPGrsE_M",
        "https://www.youtube.com/embed/prTMNXmwKKc",
        "https://www.youtube.com/embed/OieqAhbaVCI",

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
