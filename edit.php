<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>学生信息表 - 修改</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<?php
$editId = $_GET["edit"];
$editLink = mysqli_connect("localhost","root","","tang") or die("数据库链接失败");
mysqli_set_charset($editLink,"utf8");


$getnameSql = "select name from stu WHERE id = {$editId};";
$getageSql = "select age from stu WHERE id = {$editId};";
$getsexSql = "select sex from stu WHERE id = {$editId};";
$getclassidSql = "select classid from stu WHERE id = {$editId};";

$getName = mysqli_query($editLink,$getnameSql);
$getAge = mysqli_query($editLink,$getageSql);
$getSex = mysqli_query($editLink,$getsexSql);
$getClassid = mysqli_query($editLink,$getclassidSql);

$editName = mysqli_fetch_assoc($getName);
$editAge = mysqli_fetch_assoc($getAge);
$editSex = mysqli_fetch_assoc($getSex);
$editClassid = mysqli_fetch_assoc($getClassid);



?>
<center>
    <table>
        <caption class="head">修改信息</caption>
        <form action="editdata.php" method="post">
            <?php

            echo "<tr><td>姓名:</td><td><input type=\"text\" name=\"name\" value=\"{$editName["name"]}"."\"></td></tr>";
            echo "<tr><td>年龄:</td><td><input type=\"text\" name=\"age\" value=\"{$editAge["age"]}"."\"></td></tr>";
            echo "<tr><td>学号:</td><td><input type=\"text\" name=\"id\" value=\"{$editId}"."\" readonly=\"true\"></td></tr>";
            echo "<tr><td>性别:</td><td><input type=\"text\" name=\"sex\" value=\"{$editSex["sex"]}"."\"></td></tr>";
            echo "<tr><td>班级:</td><td><input type=\"text\" name=\"classid\" value=\"{$editClassid["classid"]}"."\"></td></tr>";
            ?>
            <tr><td colspan="2"><input type="submit" value="确认修改"></td></tr>
        </form>
    </table>
    <a href="table.php">返回</a>
    <p>
        <?php
            echo "提示:不可以修改主键 学号的值"."<br/>";
            echo $getageSql,$getnameSql,$getclassidSql,$getsexSql."<br/>";
            mysqli_free_result($getAge);
            mysqli_free_result($getName);
            mysqli_free_result($getClassid);
            mysqli_free_result($getSex);
            mysqli_close($editLink);
            echo "执行结果:OK!";
        ?>
    </p>
</center>
</body>