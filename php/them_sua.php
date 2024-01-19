
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sữa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #333;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        option {
        }
    </style>
</head>

<body>
    <h2>Thêm sữa mới</h2>
    <form action="xuly_them_sua.php" method="post" enctype="multipart/form-data">
        <label for="ma_sua">Mã sữa:</label>
        <input type="text" id="ma_sua" name="ma_sua" required>

        <label for="ten_sua">Tên sữa:</label>
        <input type="text" id="ten_sua" name="ten_sua" required>

        <label for="hang_sua">Hãng sữa:</label>
        <select id="hang_sua" name="hang_sua">
            <option value="vinamilk">Vinamilk</option>
            <option value="thtruemilk">Th True Milk</option>
            <option value="suamoi">Sữa mới</option>
        </select>


        <label for="loai_sua">Loại sữa:</label>
        <select id="loai_sua" name="loai_sua">
            <option value="suabot">Sữa bột</option>
            <option value="suabich">Sữa bịch</option>
            <option value="suahop">Sữa hộp</option>
        </select>

        <label for="trong_luong">Trọng lượng: <span>gr or ml</span></label>
        <input type="text" id="trong_luong" name="trong_luong" required>

        <label for="don_gia">Đơn giá: <span>(VNĐ)</span></label>
        <input type="text" id="don_gia" name="don_gia" required>

        <label for="thanh_phan_dinh_duong">Thành phần dinh dưỡng:</label>
        <textarea id="thanh_phan_dinh_duong" name="thanh_phan_dinh_duong"></textarea>

        <label for="loi_ich">Lợi ích:</label>
        <textarea id="loi_ich" name="loi_ich"></textarea>

        <!-- Thêm chọn ảnh -->
        <label for="hinh_anh">Hình ảnh:</label>
        <input type="file" id="hinh_anh" name="hinh_anh" accept="image/*">

        <input type="submit" name="submit" value="Thêm mới">
    </form>

</body>
</html>
