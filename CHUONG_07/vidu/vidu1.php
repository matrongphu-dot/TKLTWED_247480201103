<?php
// 1. Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlibanhang"; // Thay tên cơ sở dữ liệu của bạn vào đây

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// 2. Đoạn code truy vấn của bạn
$sql = "SELECT * FROM khachhang";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo $row['makh'] . " - ";
            echo $row['tenkh'] . " - ";
            echo $row['namsinh'] . " - ";
            echo $row['dienthoai'] . " - ";
            echo $row['diachi'] . "<br>";
        }
        // Giải phóng bộ nhớ của biến
        mysqli_free_result($result);
    } else {
        echo "No Records";
    }
} else {
    echo "Truy vấn thất bại: " . mysqli_error($conn);
}

// 3. Đóng kết nối
mysqli_close($conn);
?>