<?php
	$conn = mysqli_connect("localhost:4306", "root", "", "web-milk") or die("Kết nối thất bại");
	//Thiết lập mã tiếng Việt
	mysqli_set_charset($conn, "utf8");
?>