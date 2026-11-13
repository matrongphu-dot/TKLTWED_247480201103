<?php
$servername = "localhost";
$database = "quan ly ban hang";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully<br>";
}

// Thực thi câu lệnh truy vấn SQL
$str = "SELECT * FROM `khachhang`";
$khachhang = mysqli_query($conn, $str);

while ($row = mysqli_fetch_array($khachhang)) {
    echo $row['makh'] ;
    echo $row['tenkh'] ;
    echo $row['namsinh'] ;
    echo $row['dienthoai'] ;
    echo $row['diachi'] . "<br>";
}

mysqli_close($conn);
?>