<?php
// Kết nối CSDL
require_once("connect.php");
$conn = mysqli_connect("localhost:4306", "root", "", "web-milk");

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối CSDL thất bại: " . mysqli_connect_error());
}

// Kiểm tra nếu form đã được submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $ma_sua = $_POST["ma_sua"];
    $ten_sua = $_POST["ten_sua"];
    $hang_sua = $_POST["hang_sua"];
    $loai_sua = $_POST["loai_sua"];
    $trong_luong = $_POST["trong_luong"];
    $don_gia = $_POST["don_gia"];
    $thanh_phan_dinh_duong = $_POST["thanh_phan_dinh_duong"];
    $loi_ich = $_POST["loi_ich"];

    // Thực hiện truy vấn thêm dữ liệu
    $sql = "INSERT INTO sua (ma_sua, ten_sua, hang_sua, loai_sua, trong_luong, don_gia, thanh_phan_dinh_duong, loi_ich)
            VALUES ('$ma_sua', '$ten_sua', '$hang_sua', '$loai_sua', '$trong_luong', '$don_gia', '$thanh_phan_dinh_duong', '$loi_ich')";

    if (mysqli_query($conn, $sql)) {
        // Nếu thêm thành công, chuyển hướng về trang danh sách sữa
        header("Location: danhsach_sua.php");
        exit;
    } else {
        echo "Lỗi thêm dữ liệu: " . mysqli_error($conn);
    }
}

// Đóng kết nối CSDL
mysqli_close($conn);
?>
