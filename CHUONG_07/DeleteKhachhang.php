<?php

include("Connection.php");


if (isset($_POST['submit'])) {
    
    $makh = $_POST['makh'];

    
    $sql = "DELETE FROM khachhang WHERE makh = '$makh'";

    
    if (mysqli_query($conn, $sql)) {
        echo "Xóa khách hàng thành công!", "<br>";
    } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }
}


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
        
        mysqli_free_result($result);
    } else {
        echo "No Records";
    }
} else {
    echo "Truy vấn thất bại: " . mysqli_error($conn);
}


mysqli_close($conn);
?>