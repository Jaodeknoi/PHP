<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <?php
    echo "<p class = 'big'>PROFILE </p>";
    $name = "นายปภังกร กรนุ่ม";
    $nickname = "คิว";
    $age = 20;
    $birth = "27 ตุลาคม 2547";
    $faculty = "มหาวิทยาลัยพระจอมเกล้าพระนครเหนือ";
    $branch = " เทคโนโลยีสารสนเทศ (IT)";
    $image = 'nongkiw.jpg';

    echo  "<p class= 'normal'>
    ชื่อ - นามสกุล : $name
    <br><br>ชื่อเล่น : $nickname
    <br><br>อายุ : $age
    <br><br>วันเกิด : $birth
    <br><br>คณะ : $faculty
    <br><br>สาขา : $branch
</p><br>";
    echo "<center><img src='$image' width='30%'  ></center>";
    echo "<hr>"

    ?>
</body>
</html>