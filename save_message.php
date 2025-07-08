<?php
include 'config.php';

$name = $_POST['sender_name'];
$email = $_POST['sender_email'];
$message = $_POST['message_content'];

$stmt = $conn->prepare("INSERT INTO messages (sender_name, sender_email, message_content) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
    echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='contact.php';</script>";
} else {
    echo "<script>alert('Gagal mengirim pesan. Silakan coba lagi.'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>