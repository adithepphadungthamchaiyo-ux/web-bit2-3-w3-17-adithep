<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>

         nav {
            display: flex;
            gap: 24px;
            align-items: center;
            padding: 24px 32px;
            border-bottom: 1px solid #333;
        }
        nav a {
            color: #f0f0f0;
            text-decoration: none;
            font-size: 20px;
            border-bottom: 2px solid transparent;
            padding-bottom: 4px;
        }
        nav a:hover { opacity: 0.6; }
        nav a.active {
             border-bottom: 2px solid #f0f0f0;
        }
           

        body {
            background-color: #1e1e1e;
            color: #e0e0e0;
            font-family: 'Poppins', sans-serif;
            padding: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #2b2b2b;
            border: 1px solid #444 !important;
        }
        th, td {
            border: 1px solid #444 !important;
            padding: 10px;
            text-align: center;
        }
        thead th {
            background-color: #3a3a3a;
            color: #ffffff;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: 600;
        }
        tbody tr:hover {
            background-color: #383838;
        }
        img {
            border-radius: 6px;
            border: 1px solid #555;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #cccccc;
            text-decoration: none;
            padding: 8px 16px;
            border: 1px solid #555;
            border-radius: 4px;
            transition: 0.2s;
            font-weight: 300;
        }
        a:hover {
            background-color: #444;
            color: #fff;
        }
    </style>

</head>
<body>

    <nav>
        <a href="index.php" class="active">รายการเข้าพัก</a>
        <a href="room.php">ห้องพัก</a>
        <a href="manage_order.php">จัดการเข้าพัก</a>
        </nav>

    <?php
        include "action/connect.php";
        $sql = "SELECT * FROM orders";
        $result = mysqli_query($con, $sql);
    ?>

<a href="add_order.php">เพิ่ม</a>
        <table border=1>
        <thead>
        <th>รหัสรายการ</th>
        <th>ชื่อผู้เข้าพัก</th>
        <th>ชำระเงิน</th>
        <th>ประเภท</th>
        <th>ห้อง</th>
        <th>ภาพ</th>
        <th>จัดการ</th>
        </thead>

<?php

foreach($result as $order){
?>
    <tr>
        <td><?= $order["order_id"] ?></td>
        <td><?= $order["name"] ?></td>
        <td><?= $order["payment"] ?></td>
        <td><?= $order["usage_type"] ?></td>
        <td><?= $order["room_id"] ?></td>
        <td>
             <img
            src="<?= $order["image"] ?>"
            style="width:200px"
            >
        </td>
        <td>    
            <!-- แก้ไข -->
            <a href="edit_order.php?id=<?= $order["order_id"] ?>">แก้ไข</a>
            <!-- ลบ -->
            <a href="action/delete_order.php?id=<?=$order["order_id"]?>">ลบ</a>
        </td>
    </tr>
        <?php
    }
?>
</table>

</body>
</html>