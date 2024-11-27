<style>
    /* Toàn bộ phần bình luận */
.row2 {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
}
.font_title h1 {
    text-align: center;
    font-size: 2.2rem;
    color: #333;
    margin-bottom: 20px;
}
.form_content {
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}
.table-container {
    overflow-x: auto;
    margin-top: 20px;
}
table {
    width: 100%;
    border-collapse: collapse;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

table th, table td {
    padding: 15px;
    text-align: left;
    border: 1px solid #ddd;
    word-wrap: break-word;
}

table th {
    background-color: #f8f8f8;
    color: #444;
    font-weight: bold;
}

table tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tr:hover {
    background-color: #e9e9e9;
}

input[type="checkbox"] {
    margin-left: 10px;
}

input[type="button"] {
    padding: 10px 18px;
    font-size: 1rem;
    color: #fff;
    background-color: #28a745; /* Màu xanh nổi bật */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-right: 10px;
}

/* input[type="button"]:hover {
    background-color: #218838;
    box-shadow: 0 6px 14px rgba(0, 0, 0, 0.2);
} */

input[type="button"]:active {
    transform: scale(0.98);
}

/* .row.mb10 {
    text-align: center;
    margin-top: 20px;
}

.row2 .mb10 input[type="button"] {
    width: auto;
    margin-right: 15px;
} */

.row2 .mb10 input[type="button"]:last-child {
    margin-right: 0;
}
 /* Background */
 body {
            background: linear-gradient(120deg, #f6d365, #fda085);
            min-height: 100vh;
            padding: 20px;
        }
        table th {
    background-color: blue;  /* Màu xanh lá */
    color: #fff;               /* Màu chữ trắng */
    font-weight: bold;
    padding: 12px;
    text-align: left;
}
input[type="button"] {
    background-color: #007bff;  /* Màu nền của nút */
    color: white;                /* Màu chữ của nút */
    padding: 10px 20px;          /* Khoảng cách trong nút */
    border: none;                /* Xóa viền của nút */
    border-radius: 5px;          /* Bo tròn góc nút */
    font-size: 14px;             /* Kích thước chữ */
    cursor: pointer;            /* Con trỏ chuột khi hover vào nút */
    transition: background-color 0.3s ease; /* Hiệu ứng mượt khi thay đổi màu nền */
}

input[type="button"]:hover {
    background-color: #0056b3; /* Màu nền khi hover */
}

</style>
<?php
$loadbl = loadbl_binhluan(0);
?>
<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    
    <div class="row2 form_content">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Nội dung</th>
                        <th>ID người dùng</th>
                        <th>ID sản phẩm</th>
                        <th>Ngày bình luận</th>
                        <th>Chức Năng</th>
                        
                    </tr>
                    <?php
                    foreach ($listbinhluan as $binhluan) {
                        extract($binhluan);
                        $xoa_bl = "index.php?act=xoa_bl&id=" . $id;
                        echo '<tr>
                <td><input type="checkbox" name="" id="" /></td>
                    <td>' . $id . '</td>
                    <td>' . $noidung . '</td>
                    <td>' . $iduser . '</td>
                    <td>' . $idpro . '</td>
                    <td>' . $ngaybinhluan . '</td>
                <td>
                    <a href="' . $xoa_bl . '"><input type="button" value="Xóa" /></a>
                </td>
            </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="">
                <button>CHỌN TẤT CẢ </button>
                <button>BỎ CHỌN TẤT CẢ</button>
                <button></button>
            </div>
        </form>
    </div>
</div>