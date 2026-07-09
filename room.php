<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
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
    
<?php
        include "action/connect.php";

        //      ดึง    ทั้งหมด จาก  ตารางorders
        $sql = "SELECT * FROM rooms";
                //              db.   คำสั่ง
        $result = mysqli_query($con, $sql);git init
        //ทดสอบ
        //var_dump($result);
    ?>

    <table border=1>
        <thead>
            <th>รหัสรายการ</th>
            <th>ชื่อผู้เข้าพัก</th>
            <th>ชำรำเงิน</th>
            <th>ประเภท</th>

        </thead>

        <?php
            foreach($result as $rooms){
                ?>  
                    <tr>
                        <td><?=$rooms["room_id"] ?></td>
                        <td><?=$rooms["smoek"] ?></td>
                        <td><?=$rooms["bathtub"] ?></td>
                        <td><?=$rooms["price"] ?></td>
                    </tr>
                <?php

            }
        ?>
    </table>    
    <a href="index.php">กลับหน้าorders</a>
</body>
</html>