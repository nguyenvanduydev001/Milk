<!DOCTYPE html>
<html>
<head>
	<title>Cập nhật thể loại</title>
</head>
<body>
<?php
	//đưa dữ liệu cũ lên form
	//lấy id truyền từ trang danhsach.php bằng biến có tên là key
	$id = $_GET["key"];
	//lấy thông tin thể loại có id là $id
	require_once("connect.php");
	$sql = "select * from theloai where id = $id";
	//$result là 1 table (table này chỉ có 1 hàng)
	$result = mysqli_query($conn, $sql);
	//lấy hàng trong table
	//$row chứa thông tin của thể loại cần sửa
	//$row là mảng chứa các từ khóa: id, ten, thutu, anhien
	$row = mysqli_fetch_assoc($result);
	//cập nhật
	if(isset($_POST["btnSua"]))
	{
		//lấy dữ liệu trên form
		$ten = $_POST["txtTen"];
		$thutu = $_POST["txtThutu"];
		$anhien = $_POST["sltAnhien"];
		$sql = "update theloai set ten = '$ten', thutu = $thutu, anhien = $anhien
								where id = $id";
		$result = mysqli_query($conn, $sql);
		if($result)
		{
			mysqli_close($conn);
			header("location:danhsach.php");
		}
		else
		{
			echo "Update thất bại " . mysqli_error($conn);
		}
	}
?>
	<form method="post">
		<table>
			<tr>
				<td>Tên thể loại</td>
				<td><input type="text" name="txtTen" value="<?php echo $row['ten']; ?>"></td>
			</tr>
			<tr>
				<td>Thứ tự</td>
				<td><input type="number" name="txtThutu" value="<?php echo $row['thutu']; ?>"></td>
			</tr>
			<tr>
				<td>Ẩn hiện</td>
				<td>
					<select name="sltAnhien">
						<option value="0">Ẩn</option>
						<option value="1" 
						<?php
							if($row["anhien"] == 1)
								echo "selected";
						?>
						>Hiện</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="btnSua" value="Cập nhật"></td>
				<td><input type="reset" name="btnHuy" value="Hủy"></td>
			</tr>
		</table>
	</form>
</body>
</html>