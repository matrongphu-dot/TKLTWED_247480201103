<?php
// Gọi file kết nối cơ sở dữ liệu từ Bài 1
include("Connection.php");

// Kiểm tra xem nút submit đã được nhấn hay chưa
if (isset($_POST['submit'])) {
    // Lấy dữ liệu từ form HTML
    $mahang = $_POST['mahang'];
    $tenhang = $_POST['tenhang'];
    $mansx = $_POST['mansx'];
    $namsx = $_POST['namsx'];
    $gia = $_POST['gia'];

    // Viết câu lệnh SQL chèn dữ liệu khớp với các cột trong phpMyAdmin
    $sql = "INSERT INTO hanghoa (mahang, tenhang, mansx, namsx, gia) 
            VALUES ('$mahang', '$tenhang', '$mansx', '$namsx', '$gia')";

    // Thực thi câu lệnh truy vấn và thông báo kết quả
    if (mysqli_query($conn, $sql)) {
        echo "Thêm hàng hóa thành công!","<br>";
    } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }
}
$sql = "SELECT * FROM hanghoa";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo $row['mahang'] . " - ";
            echo $row['tenhang'] . " - ";
            echo $row['mansx'] . " - ";
            echo $row['namsx'] . " - ";
            echo $row['gia'] . "<br>";
        }
        
        mysqli_free_result($result);
    } else {
        echo "No Records";
    }
} else {
    echo "Truy vấn thất bại: " . mysqli_error($conn);
}

mysqli_close($conn);


?>