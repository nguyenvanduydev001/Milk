<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost:4306"; // Thay thế bằng tên máy chủ 
$username = "root"; // Thay thế bằng tên đăng nhập 
$password = ""; // Thay thế bằng mật khẩu 
$dbname = "dangky"; // Thay thế bằng tên cơ sở dữ liệu 

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form đăng ký
$phone = $_POST['phone'];
$fullName = $_POST['full_name'];

// Kiểm tra checkbox "đồng ý điều khoản"
$agreeTerms = isset($_POST['agree_terms']) ? 1 : 0;

// Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO users (full_name, phone, agree_terms) VALUES ('$fullName', '$phone', $agreeTerms)";

if ($conn->query($sql) === TRUE) {
    header("Location: dangnhap.html");
    exit();
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
