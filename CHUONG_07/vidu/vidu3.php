<?php
// 1. Kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlibanhang"; // Thay tên database của bạn nếu cần

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Thiết lập tiếng Việt
mysqli_set_charset($conn, "utf8");

// 2. Thực hiện câu lệnh thêm dữ liệu (INSERT INTO)
$sql = "INSERT INTO khachhang (makh, tenkh, namsinh, dienthoai, diachi) VALUES ('K012', 'Nguyễn trung kiên', '2002', '0912345689', 'Bạc Liêu')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Mẫu tin đã được thêm.";
} else {
    echo "Không thêm được: " . mysqli_error($conn);
}

// 3. Đóng kết nối
mysqli_close($conn);
?>