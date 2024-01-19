<?php
// Kiểm tra xem tham số id có được đặt trong URL không
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    // Yêu cầu tệp kết nối CSDL của bạn
    require_once("connect.php");
    
    // Sử dụng tên bảng và cột đúng trong câu truy vấn SQL của bạn
    $sql = "DELETE FROM sua WHERE id = $id";
    
    // Thực thi truy vấn
    $result = mysqli_query($conn, $sql);
    
    // Kiểm tra xem truy vấn có thành công không
    if ($result) {
        // Đóng kết nối
        mysqli_close($conn);
        
        // Chuyển hướng về trang danhsach_sua.php
        header("location:danhsach_sua.php");
    } else {
        // Hiển thị thông báo lỗi nếu truy vấn thất bại
        echo "Xóa thất bại " . mysqli_error($conn);
    }
} else {
    // Hiển thị thông báo lỗi nếu tham số id không được đặt
    echo "Yêu cầu không hợp lệ. Vui lòng cung cấp tham số 'id'.";
}
?>
