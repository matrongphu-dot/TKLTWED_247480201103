<?php

include("Connection.php");


if (isset($_POST['submit'])) {
    
    $mahd = $_POST['mahd'];
    $makh = $_POST['makh'];
    $mahang = $_POST['mahang'];
    $soluong = $_POST['soluong'];

    
    $sql_gia = "SELECT gia FROM hanghoa WHERE mahang = '$mahang'";
    $res_gia = mysqli_query($conn, $sql_gia);
    $row_gia = mysqli_fetch_assoc($res_gia);
    $gia = $row_gia['gia'] ?? 0;
    $thanhtien = $soluong * $gia;

    
    $sql = "INSERT INTO hoadon (mahd, makh, mahang, soluong, thanhtien) 
            VALUES ('$mahd', '$makh', '$mahang', '$soluong', '$thanhtien')";

    
    if (mysqli_query($conn, $sql)) {
        echo "Thêm hóa đơn thành công!", "<br>";
    } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }
}


$sql = "SELECT * FROM hoadon";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo $row['mahd'] . " - ";
            echo $row['makh'] . " - ";
            echo $row['mahang'] . " - ";
            echo $row['soluong'] . " - ";
            echo $row['thanhtien'] . "<br>";
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