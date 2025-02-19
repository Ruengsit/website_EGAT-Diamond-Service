<?php
// กำหนดการตั้งค่าการเชื่อมต่อฐานข้อมูล
$servername = "127.0.0.1";
$username   = "root";    // เปลี่ยนเป็นชื่อผู้ใช้ฐานข้อมูลของคุณ
$password   = " ";    // เปลี่ยนเป็นรหัสผ่านฐานข้อมูลของคุณ
$dbname     = "eds_db";        // เปลี่ยนเป็นชื่อฐานข้อมูลของคุณ

// สร้างการเชื่อมต่อฐานข้อมูล
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// รับข้อมูลจากฟอร์ม
$name     = $_POST['name'];
$surname  = $_POST['surname'];
$phone    = $_POST['phone'];
$email    = $_POST['email'];
$company  = isset($_POST['company']) ? $_POST['company'] : "";
$product  = isset($_POST['product']) ? $_POST['product'] : "";

// เตรียมคำสั่ง SQL ด้วย prepared statement
$sql = "INSERT INTO contacts (name, surname, phone, email, company, product) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Preparation failed: " . $conn->error);
}

// ผูกค่าตัวแปรกับ prepared statement
$stmt->bind_param("ssssss", $name, $surname, $phone, $email, $company, $product);

// ดำเนินการบันทึกข้อมูลลงในฐานข้อมูล
if ($stmt->execute()) {
    echo "Record inserted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// ปิด statement และการเชื่อมต่อฐานข้อมูล
$stmt->close();
$conn->close();
?>
