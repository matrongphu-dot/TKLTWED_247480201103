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

// Câu lệnh truy vấn SQL cho bảng khachhang
$sql = "SELECT makh, tenkh, namsinh, dienthoai, diachi FROM khachhang";
$result = mysqli_query($conn, $sql);

// Duyệt kết quả bằng mysqli_fetch_assoc và in ra màn hình 
while ($row = mysqli_fetch_assoc($result)) {
    echo "Mã KH: " . $row['makh'] . 
         " - Tên KH: " . $row['tenkh'] . 
         " - Năm sinh: " . $row['namsinh'] . 
         " - Điện thoại: " . $row['dienthoai'] . 
         " - Địa chỉ: " . $row['diachi'] . "<br>";
}

// Giải phóng bộ nhớ và đóng kết nối 
mysqli_free_result($result);
mysqli_close($conn);
?>