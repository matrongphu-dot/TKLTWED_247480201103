<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "quan ly ban hang(1)";

// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Câu lệnh SQL thêm dữ liệu vào bảng khachhang
// Cấu trúc cột: makh, tenkh, namsinh, dienthoai, diachi
$sql = "INSERT INTO khachhang (makh, tenkh, namsinh, dienthoai, diachi) VALUES ('K012', 'Trần Văn tèo', '2002', '0912345679', 'Bạc Liêu')";

$result = mysqli_query($conn, $sql);

// Kiểm tra kết quả thêm dữ liệu giống như ví dụ
if ($result) {
    echo "Mẫu tin đã được thêm.";
} else {
    echo "Không thêm được: " . mysqli_error($conn);
}

// Đóng kết nối
mysqli_close($conn);
?>
