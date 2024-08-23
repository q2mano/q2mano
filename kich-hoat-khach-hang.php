
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1.0, user-scalable=1.0, minimum-scale=1.0, maximum-scale=5.0' name='viewport'>
    <title>Thêm khách hàng</title>
    <style>
 @import url("../css/font.css");
body {font-family: haylamday;font-size:17px;overflow-x:hidden; background-color:#a9c6ea; line-height:1; max-width:100%; margin:auto;font-family: vuonghiep;
}
#toantrang {width:100%;text-align: center;}

        h1 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #6e06f1;
            font-weight: 600;
        }

        input[type="text"],
        input[type="date"] {
            padding: 8px;
            width: 400px;
            margin-bottom: 10px;
            border-radius: 10px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 10px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div id='toantrang'>
    <h1>Thêm khách hàng</h1>
    <form method="POST" action="/api/kich-hoat-khach-hang.php">
        <label for="cliente_NOMBRE">Tên khách hàng:</label>
        <!-- Thêm thuộc tính accept-charset để hỗ trợ mã hóa UTF-8 -->
        <input type="text" name="cliente_NOMBRE" id="cliente_NOMBRE" required="" accept-charset="UTF-8">
        <br>

        <label for="cliente_ID">ID khách hàng:</label>
        <input type="text" name="cliente_ID" id="cliente_ID" required="">
        <br>

        <label for="Client_VisibleSkin">Visible Skin:</label>
        <input type="text" name="Client_VisibleSkin" id="Client_VisibleSkin" required="">
        <br>

        <label for="cliente_DateExpired">Ngày hết hạn:</label>
        <input type="date" name="cliente_DateExpired" id="cliente_DateExpired" required="">
        <br>

        <input type="submit" value="Thêm khách hàng">
    </form>
    </div>
</body>
</html>