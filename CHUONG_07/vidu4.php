<?php
$servername = "localhost";
$database = "quan ly ban hang";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "UPDATE khachhang SET tenkh='Nguyễn Phương' WHERE makh='KH01'";

$result = mysqli_query($conn, $sql);


if ($result) {
    echo "Cập nhật thành công";
} else {
    echo "Cập nhật thất bại: " . mysqli_error($conn);
}

mysqli_close($conn);
?>