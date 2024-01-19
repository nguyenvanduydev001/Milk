<?php
	require_once("connect.php");

	// Tạo câu truy vấn và truy vấn
	$sql = "SELECT * FROM sua";
	// Kiểm tra truy vấn có thành công không
	$result = mysqli_query($conn, $sql);

	if (!$result) {
		die("Query failed: " . mysqli_error($conn));
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sữa</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        td a {
            display: inline-block;
            padding: 6px 12px;
            text-decoration: none;
            color: #fff;
            background-color: #4CAF50;
            border-radius: 4px;
        }

        td a:hover {
            background-color: #45a049;
        }

        button {
            text-align: center;
            margin-top: 20px;
            margin-left: 674px;
            border: none;
            padding : 10px;
            background-color: #aaa;
            border-radius: 4px;
            background-color: #45a049;
        }   
        button a{
            font-size: 16px;
            color: #fff;
            text-decoration: none;
            font-weight : 600;
        }
        button:hover {
            color: #fff;
        }
    </style>
</head>
<body>

<h2>Danh sách sữa</h2>

<table>
    <tr>
        <th>Tên sữa</th>
        <th>Hãng sữa</th>
        <th>Loại sữa</th>
        <th>Trọng lượng</th>
        <th>Đơn giá</th>
        <th>Thành phần dinh dưỡng</th>
        <th>Lợi ích</th>
        <th colspan="2">Thao tác</th>
    </tr>
    <!-- Dữ liệu danh sách sữa sẽ được hiển thị ở đây -->
    <?php
    // Assuming $result is the result of your database query
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td><?php echo $row["ten_sua"]; ?></td>
            <td><?php echo $row["hang_sua"]; ?></td>
            <td><?php echo $row["loai_sua"]; ?></td>
            <td><?php echo $row["trong_luong"]; ?></td>
            <td><?php echo $row["don_gia"]; ?></td>
            <td><?php echo $row["thanh_phan_dinh_duong"]; ?></td>
            <td><?php echo $row["loi_ich"]; ?></td>
            <td><a href="sua.php?id=<?php echo $row['id']; ?>">Sửa</a></td>
            <td><a href="xoa_sua.php?id=<?php echo $row['id']; ?>">Xoá</a></td>
        </tr>
    <?php
    }
    ?>
</table>

<button><a href="them_sua.php">Thêm sữa mới</a></button>

</body>
</html>
