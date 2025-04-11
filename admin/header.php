<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
          body {
            margin: 0; /* Loại bỏ khoảng trắng mặc định của body */
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9; /* Màu nền tổng thể */
            color: #333;
        }

        .boxcenter {
            width: 100%;
            margin: 0 auto;
        }

        header {
            background: coral;
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.5em;
            margin: 0;
            font-weight: 700;
        }

        .menu {
            background: #0056b3;
        }

        .menu ul {
            display: flex;
            justify-content: center;
            list-style: none;
            margin: 0;
            padding: 10px 0;
        }

        .menu ul li {
            margin: 0 15px;
        }

        .menu ul li a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .menu ul li a:hover {
            color: #ffd700;
        }

        /* Mobile Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2em;
            }

            .menu ul {
                flex-direction: column;
                text-align: center;
            }

            .menu ul li {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="boxcenter">
        <!-- BEGIN HEADER -->
        <header>
            <div class="row mb header_admin">
                <h1>Admin</h1>
            </div>
            <div class="row mb menu">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?act=listdm">Danh mục</a></li>
                    <li><a href="index.php?act=listsp">Hàng hóa</a></li>
                    <li><a href="index.php?act=dskh">Khách hàng</a></li>
                    <li><a href="index.php?act=dsbl">Bình luận</a></li>
                    <li><a href="index.php?act=thongke">Thống kê</a></li>
                    <li><a href="index.php?act=listthanhtoan">Danh sách thanh toán</a></li>
              <li><a href="index.php?act=addthanhtoan">Thêm đơn hàng</a></li>
              <li><a href="index.php?act=listfeedback">FEEDBACK> </a></li>
                </ul>
            </div>
        </header>
        <!-- END HEADER -->
    </div>
</body>
</html>
