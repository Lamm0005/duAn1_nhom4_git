<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách loại hàng hóa</title>
    <style>
        /* Định dạng tổng thể */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

        .container {
            width: 100%; /* Chiều rộng toàn màn hình */
            height: 100vh; /* Chiều cao toàn màn hình */
            padding: 20px;
            background: #ffffff;
            border-radius: 0;
        }

        .text-center {
            text-align: center;
        }

        h1 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 16px;
        }

        thead th {
            background-color: #007bff;
            color: white;
            padding: 12px;
            text-align: center;
        }

        tbody tr:nth-child(even) {
            background-color: #f4f4f9;
        }

        tbody tr:hover {
            background-color: #e2e6ea;
        }

        td, th {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        td input[type="checkbox"] {
            cursor: pointer;
        }

        .btn {
            padding: 10px 15px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            display: inline-block;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }

        .btn-success {
            background-color: #28a745;
            color: white;
        }

        .btn-warning {
            background-color: #ffc107;
            color: black;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }
        .btn:hover {
            opacity: 0.9;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .d-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .d-flex button {
            flex: 1;
            margin: 0 10px;
        }
        body {
            background: linear-gradient(120deg, #f6d365, #fda085);
            min-height: 100vh;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
        </div>
        <form action="#" method="POST">
            <table>
                <thead>
                    <tr>
                        <th><input type="checkbox" id="selectAll"></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th>HÀNH ĐỘNG</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm = "index.php?act=suadm&id=" . $id;
                        $xoadm = "index.php?act=xoadm&id=" . $id;
                        echo '
                        <tr>
                            <td><input type="checkbox" name="select[]" value="' . $id . '"></td>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>
                                <div class="action-buttons">
                                    <a href="' . $suadm . '" class="btn btn-warning">Sửa</a>
                                    <a href="' . $xoadm . '" class="btn btn-danger">Xóa</a>
                                </div>
                            </td>
                        </tr>';
                    }
                    ?>
                </tbody>
            </table>
            <div class="d-flex">
                <button type="button" class="btn btn-primary" id="selectAllBtn">Chọn Tất Cả</button>
                <button type="button" class="btn btn-secondary" id="deselectAllBtn">Bỏ Chọn Tất Cả</button>
                <a href="index.php?act=adddm" class="btn btn-success">Nhập Thêm</a>
            </div>
        </form>
    </div>

    <script>
        // JavaScript để xử lý chọn tất cả và bỏ chọn
        document.getElementById("selectAll").addEventListener("change", function() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(checkbox => checkbox.checked = this.checked);
        });

        document.getElementById("selectAllBtn").addEventListener("click", () => {
            document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => checkbox.checked = true);
        });

        document.getElementById("deselectAllBtn").addEventListener("click", () => {
            document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => checkbox.checked = false);
        });
    </script>
</body>
</html>
