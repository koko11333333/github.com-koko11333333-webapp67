<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>this is webpage for edit data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
        if(!isset($_GET['mvid'])){
            header("refresh: 0; url=mainv.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM movie WHERE mvid='$_GET[mvid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form method="post" action="editvsuccess.php">
        <p>

            <label>รหัสภาพยนตร์</label>
            <input type="text" name="mvid" id="mvid" value="<?=$row['mvid'];?>" hidden>
            <input type="text" name="mvid" id="mvid" value="<?=$row['mvid'];?>" />

        </p>
        <p>

            <label>ชื่อภาพยนตร์</label>
            <input type="text" name="mvid" id="mvid" value="<?=$row['mvid'];?>" hidden>
            <input type="text" name="mname" id="mvname" value="<?=$row['mvname'];?>" />

        </p>

        <p>

            <label>ปีที่ฉาย</label>

            <input type="text" name="mvyear" id="mvyear" value="<?=$row['mvyear'];?>" />

        </p>

        <p>

            <label>นักแสดงนำ</label>

            <input type="text" name="mvactor" id="mvactor" value="<?=$row['mvactor'];?>" />

        </p>

        <p>

            <label>ประเภท</label>

            <input type="text" name="mvgenre" id="mvgenre" value="<?=$row['mvgenre'];?>" />

        </p>
        <input id="bun" type="submit" value="บันทึก">
        <a href='mainv.php'><button> Mainmenu</button></a>
    </form>

</body>
</html>