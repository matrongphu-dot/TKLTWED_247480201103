<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "quan ly ban hang(1)";

    // 1. Sửa lại hàm connect và đúng thứ tự các tham số
    $conn = mysqli_connect($servername, $username, $password, $database);

    // 2. Kiêm tra kết nối
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully<br>";
    $sql = "SELECT makh, tenkh FROM `khachhang`";
    $result = mysqli_query($conn, $sql);

    // 4. Duyệt kết quả trả về bằng các hàm mysqli_...
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Mã khách hang: " . $row['makh'] . " - Họ tên: " . $row['tenkh'] . "<br>";
        }
        // Giải phóng bộ nhớ kết quả
        mysqli_free_result($result);
    } else {
        echo "Lỗi truy vấn: " . mysqli_error($conn);
    }

    // 5. Đóng kết nối ở cuối cùng
    mysqli_close($conn);
    ?>
</body>
</html>
