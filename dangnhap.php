<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost:4306"; // Thay thế bằng tên máy chủ 
$username = "root"; // Thay thế bằng tên đăng nhập 
$password = ""; // Thay thế bằng mật khẩu 
$dbname = "dangnhap"; // Thay thế bằng tên cơ sở dữ liệu 

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form đăng nhập
$name = $_POST['name'];
$password = $_POST['password'];
$rememberPassword = isset($_POST['remember_password']) ? 1 : 0;

// Kiểm tra nếu tên đăng nhập chứa khoảng trắng
if (empty(trim($name))) {
    header("Location: dangnhap.html?error=login_failed");
    exit();
}

// Thực hiện truy vấn để kiểm tra tên đăng nhập và mật khẩu từ cơ sở dữ liệu
$sql = "SELECT * FROM users WHERE name='$name' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Đăng nhập thành công, chuyển hướng 
    header("Location: trangchu.html");
    exit();
} else {
    // Đăng nhập thất bại
    header("Location: dangnhap.html?error=login_failed");
    exit();
}

// Đóng kết nối
$conn->close();
?>