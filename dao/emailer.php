<?php

require './vendor/autoload.php'; // Đường dẫn đến tệp autoload.php của Composer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
try {
    // Tạo một đối tượng PHPMailer
    $recipient = $_POST["recipient"];
    $subject = $_POST["subject"];
    $body = $_POST["body"];

    $mail = new PHPMailer(true); // Passing `true` enables exceptions

    // Cấu hình máy chủ SMTP và thông tin đăng nhập
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'truongnguyenth001@gmail.com';
    $mail->Password = 'Truong@11';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 587;

    // Cấu hình người gửi và người nhận
    $mail->setFrom('truongnguyenth001@gmail.com', 'shop_DH');
    $mail->addAddress($recipient, 'ssaadasd Name');

    // Thiết lập chủ đề và nội dung email
    $mail->Subject = 'Đặt hàng online';
    $mail->Body = 'Cảm ơn bạn đã đặt hàng!!.';

    // Gửi email
    $mail->send();

    echo 'Email sent successfully.';
} catch (Exception $e) {
    echo 'Failed to send email. Error: ' . $mail->ErrorInfo;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sender</title>
</head>
<body>
    <?php if(isset($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="recipient">Recipient:</label>
        <input type="email" name="recipient" required><br>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" required><br>

        <label for="body">Body:</label>
        <textarea name="body" rows="4" required></textarea><br>

        <input type="submit" value="Send Email">
    </form>
</body>
</html>