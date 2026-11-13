<?php
$servername = "localhost";
$database = "quan ly ban hang";
$username = "root";
$password = "";

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Câu lệnh SQL thêm dữ liệu 
$sql = "INSERT INTO khachhang VALUES ('KH21', 'Hoàng Trọng Nhân', '2006', '0948042089', 'Bạc Liêu')";

$result = mysqli_query($conn, $sql);

// Kiểm tra kết quả 
if ($result) {
    echo "Mẫu tin đã được thêm.";
} else {
    echo "Không thêm được: " . mysqli_error($conn);
}

// Đóng kết nối
mysqli_close($conn);
?>