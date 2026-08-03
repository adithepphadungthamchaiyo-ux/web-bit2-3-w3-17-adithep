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
        nav a:hover {
            opacity: 0.6;
        }
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

<form action="action/insert_order.php" method="post" enctype="multipart/form-data">

    <label>ชื่อผู้เข้าพัก</label>
    <input type="text" name="name">
    <br><br>

    <label>การจ่ายเงิน</label>
    <input type="text" name="payment">
    <br><br>

    <label>ประเภทการใช้งาน</label>
    <input type="text" name="usage_type">
    <br><br>

    <label>ภาพผู้เข้าพัก</label>
    <input type="text   " name="image">
    <br><br>

    <?php
        include "action/connect.php";

        $sql = "SELECT * FROM rooms";
        $result = mysqli_query($con, $sql);
    ?>

    <label>เลือกห้องพัก</label>

    <select name="room_id">
        <?php
        foreach($result as $room){
        ?>
            <option value="<?=$room["room_id"]?>">
                <?=$room["room_id"]." - ".$room["price"]." บาท"?>
            </option>
        <?php
        }
        ?>
    </select>

    <br><br>

    <button type="submit">บันทึก</button>

</form>

</body>
</html>