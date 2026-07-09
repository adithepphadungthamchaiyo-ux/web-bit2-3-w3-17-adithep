<?php
// ตั้งค่าการเข้าถึง Database
$host = "localhost";
$username = "root";
$password = "";
$database = "manrood_db";

// ทำการเชื่อมต่อ
$con = mysqli_connect($host, $username, $password, $database);

// ตรวจสอบการเชื่อมต่อ (เอาเครื่องหมาย // ออกหากต้องการเปิดใช้งานเพื่อเช็คข้อผิดพลาด)
if (!$con) {
    die("เชื่อมต่อฐานข้อมูลไม่สำเร็จ: " . mysqli_connect_error());
}

// ตั้งค่าให้รองรับภาษาไทยและอักขระพิเศษได้อย่างถูกต้อง
mysqli_set_charset($con, "utf8mb4");
?>